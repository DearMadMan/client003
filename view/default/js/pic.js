var gb={};
         gb.rat="l";
        $(document).ready(function(){
            var ul=$(".pic-ul").eq(0);
            var imgs=$(".pic-ul img");
            ul.width(imgs.length*560);
            gb.width=ul.width();
            gb.timer=setInterval(function(){


                if(gb.rat=="r")
                {
                    if(parseInt(ul.css("left").replace(/px/,''))>=0)
                    {
                        gb.rat="l";
                        console.log("l");
                        ul.animate({ left: '-=560px' }, 600, 'easeOutCirc', function () {  });
                    }
                    else
                    {
                            ul.animate({ left: '+=560px' }, 600, 'easeOutCirc', function () {  });
                    }


                }
                else
                {

                        if(parseInt(ul.css("left").replace(/px/,''))<=(-gb.width+560))
                        {
                            console.log("r");
                            gb.rat="r";
                            ul.animate({ left: '+=560px' }, 600, 'easeOutCirc', function () {  });
                        }
                        else
                        {
                            ul.animate({ left: '-=560px' }, 600, 'easeOutCirc', function () {  });
                        }


                }

            }, 3000)
        });