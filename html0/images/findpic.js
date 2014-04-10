var NALA = NALA || {};
NALA.findPic = {
	$itemList: null,
	Total: 0,
	TIME: 60,
	CountDown: null,
	BOX: '',
	Answer: [],
	Result: {
		coin: 0,
		box: 0,
		num: GameNum,
		virtual_game: ( !! virtual_game) ? 1 : 0
	},
	$TipHd: null,
	$time: null,
	$coin: $('<div class="result-check result-coin">+1积分</div>'),
	$right: $('<div class="result-check"><span class="iconfont">&#126;</span></div>'),
	$wrong: $('<div class="result-check result-wrong"><em>-6秒</em><span class="iconfont">&#223;</span></div>'),
	init: function() {
		var that = this,
			_top = $('#wrapper').offset().top,
			$list = $('#items-list');
		$('body,html').animate({
			scrollTop: _top
		}, 500);
		setTimeout(function() {
			if (ending) {
				that.initGame(0);
				return false;
			}
			if ($list.length > 0) {
				that.$itemList = $list;
				that.$TipHd = $('#tip-header');
				that.$time = $('#time-header');
				that.getAnswer();
				that.mainEvent();
				NALA.common.fixed($('#fix-header'));
				that.$right.appendTo('body');
				that.$wrong.appendTo('body');
				that.$coin.appendTo('body');
			}
		}, 400);
	},
	getAnswer: function() {
		var that = this;
		$.ajax({
			url: '/findSister/ajaxobjectInfo',
			type: 'post',
			data: {
				'num': GameNum
			},
			dataType: 'json',
			success: function(data) {
				that.initGame(data.data);
				that.BOX = data.box;
			},
			error: function(xhr) {
				setTimeout(function() {
					that.getAnswer();
				}, 500);
			}
		});
	},
	initGame: function(data) {
		var that = this,
			$initTip = null,
			$doc = $(document),
			_mtop = $(window).height() / 2 - 220,
			_height = $doc.height(),
			_top = $doc.scrollTop(),
			html = '';
		if (ending) {
			$initTip = $('<div id="game-win"><div style="height:' + _height + 'px;" class="lock-bg"></div><div class="game-tip" style="top:' + _top + 'px; margin-top:' + _mtop + 'px;"></div></div>').appendTo('body');
			that.showGameResult(2, 0);
			return;
		}
		that.Answer = data;
		$.each(data, function(i, v) {
			html += '<p>' + v.name + ' x ' + v.num + '</p>';
			that.Total += v.num;
		});
		$initTip = $('<div id="game-win"><div style="height:' + _height + 'px;" class="lock-bg"></div><div class="game-tip" style="top:' + _top + 'px; margin-top:' + _mtop + 'px;"><div class="game-target"><h3>本关目标</h3>' + html + '</div></div><div style="top:' + _top + 'px; margin-top:' + (_mtop + 80) + 'px;" class="ready">Ready</div></div>').appendTo('body');
		setTimeout(function() {
			$initTip.find('.game-tip').fadeOut(function() {
				var $ready = $initTip.find('.ready').addClass('readyshow');
				setTimeout(function() {
					$ready.text('GO');
					setTimeout(function() {
						$initTip.fadeOut();
						$ready.remove();
						that.$TipHd.html(html);
						that.countDownTime();
					}, 500);
				}, 1000);
			});
		}, 2000);
	},
	countDownTime: function() {
		var that = this,
			$time = that.$time,
			timeJson = NALA.common.timeJson;
		that.CountDown = setInterval(function() {
			var tjson;
			if (that.TIME < 1) {
				$time.html('<em>00</em>秒');
				that.showGameResult(0, 0);
			} else {
				that.TIME--;
				tjson = timeJson(that.TIME);
				$time.html('<em>' + tjson.secs + '</em>秒');
			}
		}, 1000);
	},
	mainEvent: function() {
		var that = this,
			$list = that.$itemList;
		$list.find('li').each(function(i) {
			var _this = $(this);
			if (i % 2 == 0) {
				_this.addClass('shark2');
			}
			_this.on('click', function() {
				var $img = _this.find('img'),
					_time = 0,
					_offset = _this.offset(),
					_type = $img.data('type'),
					_okstr = '<em class="iconfont">&#344;</em>';
				if (_type == undefined || _type == false) {
					that.TIME -= 5;
					that.$wrong.stop().css({
						'opacity': '0.8',
						'top': _offset.top,
						'left': _offset.left,
						'display': 'block'
					});
					setTimeout(function() {
						that.$wrong.fadeOut();
					}, 300);
				} else if (_type == 'box') {
					if (that.Result.box) {
						return false;
					}
					clearInterval(that.CountDown);
					$img.attr('src', 'http://img.nala.com.cn/b2c/findpic/images/baohe-open.png');
					if (that.BOX == '') {
						_okstr += '恭喜找到宝盒，可惜是空的。';
					} else {
						_okstr += '恭喜找到宝盒，获得：' + that.BOX + '！';
					}
					NALA.dialog.ok(_okstr, function() {
						that.countDownTime();
					});
					that.Result.box = 1;
				} else if (_type == 'coin') {
					if ($img.data('click') == 1) {
						return false;
					}
					$img.data('click', 1).attr('src', 'http://img.nala.com.cn/b2c/findpic/images/bb.png');
					that.$coin.stop().css({
						'opacity': '0.8',
						'top': _offset.top,
						'left': _offset.left,
						'display': 'block'
					});
					setTimeout(function() {
						that.$coin.fadeOut();
					}, 300);
					that.Result.coin += 1;
				} else {
					$.each(that.Answer, function(i, v) {
						if (v.type == _type) {
							if (v.num == 0) {
								that.TIME -= 5;
								that.$wrong.stop().css({
									'opacity': '0.8',
									'top': _offset.top,
									'left': _offset.left,
									'display': 'block'
								});
								setTimeout(function() {
									that.$wrong.fadeOut();
								}, 300);
							} else {
								that.$right.stop().css({
									'opacity': '0.8',
									'top': _offset.top,
									'left': _offset.left,
									'display': 'block'
								});
								setTimeout(function() {
									that.$right.fadeOut();
									v.num--;
									$img.data('type', false).attr('src', v.pics[v.num]);
									that.$TipHd.find('p').eq(i).text(v.name + ' x ' + v.num);
									that.Total--;
									if (that.Total <= 0) {
										$.ajax({
											url: '/findSister/ajaxSisterSuccess',
											type: 'post',
											dataType: 'json',
											data: that.Result,
											success: function(data) {
												var flag = data.status;
												if (flag != 0) {
													that.showGameResult(flag, data.jifen);
												}
											}
										});
									}
								}, 300);
							}
							return false;
						}
					});
				}
			});
		});
	},
	showGameResult: function(flag, jifen) {
		var that = this,
			$win = $('#game-win'),
			_top = $(window).scrollTop(),
			html = btnhtml = '再来一次',
			link = 'javascript:location.reload();';
		clearInterval(that.CountDown);
		switch (flag) {
			case 0:
				html = '<h3>&nbsp;&nbsp;好可惜，失败了！</h3><p><i class="iconfont jifen-ico">&#371;</i></p><div class="btm">我就不信这小小的“找你媚”都过不了！</div>';
				break;
			case 1:
				if (virtual_game) {
					html = '<h3>&nbsp;&nbsp;恭喜您，过关了！</h3><p><i class="iconfont jifen-ico">&#344;</i></p>';
				} else {
					html = '<h3>&nbsp;&nbsp;恭喜您，过关了！</h3><p>获得积分：<em>+' + jifen + '</em><i class="iconfont jifen-ico">&#8198;</i></p>';
				}
				html += '<div class="btm"><b>再接再厉，一口气通关</b></div>';
				btnhtml = '下一关';
				break;
			case 2:
				if (ending || virtual_game) {
					html = '<h3>&nbsp;&nbsp;哇塞，通关了！</h3><p><i class="iconfont jifen-ico">&#344;</i></p>';
					link = 'http://www.nala.com.cn/findSister/sisterGameBegin?virtual=true';
				} else {
					html = '<h3>&nbsp;&nbsp;哇塞，通关了！</h3><p>获得积分：<em>+' + jifen + '</em><i class="iconfont jifen-ico">&#8198;</i></p>';
				}
				html += '<div class="btm">瞧这眼力劲儿，百步射苍蝇都不在话下</div>';
				break;
			default:
				break;
		}
		btnhtml = '<div class="btm-btn"><a href="javascript:share_sina();" class="game-btn">分享到微博</a><a href="' + link + '" class="game-btn">' + btnhtml + '</a></div>';
		$win.find('.game-tip').css('top', _top).show().html('<div class="game-result">' + html + '</div>' + btnhtml).end().fadeIn();
	}
};

function share_sina() {
	var share = {
		url: 'http://www.nala.com.cn/findSister/sisterGameBegin',
		title: '哇，我在玩NALA的《找你媚》，居然还能赚积分，积分还能当现金！太神奇了，亲爱的朋友们，一起来赚积分吧！',
		pic: 'http://img.nala.com.cn/b2c/findpic/images/640x300.png',
		searchPic: false
	}
	window.open('http://service.t.sina.com.cn/share/share.php?appkey=443780578&title=' + encodeURIComponent(share.title) + '&pic=' + share.pic + '&searchPic=false&url=' + share.url);
}
$(function() {
	NALA.findPic.init();
	$('#start-btn').click(function() {
		if (NALA.userInfo.login) {
			location.href = '/findSister/sisterGameBegin';
			return false;
		} else {
			NALA.dialog.showLogin();
		}
	});
});