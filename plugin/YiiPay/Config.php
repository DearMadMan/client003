<?php
include_once("YiiPay_Fun.php");
/*
 *====================================================================
 *
 *
 *                 	æä¾›æŠ€æœ¯æ”¯æŒ?
 *
 *     æœ¬é¡µé¢ä¸ºé…ç½®æ–‡ä»¶ï¼Œè¯·é…ç½®ç›¸å…³ä¿¡æ¯
 *
 *====================================================================
*/



//æ­¤å¤„è¯·ä¿®æ”¹ä¸ºè‡ªå·±çš„å•†æˆ·ID (å°?00ä¿®æ”¹ä¸ºæ‚¨è‡ªå·±çš„æ•°å­—ID)
$WebID	=	5493;

//æ­¤å¤„è¯·ä¿®æ”¹ä¸ºè‡ªå·±çš„å•†æˆ·Key (Key = "ABCD" ,ä¿®æ”¹""å·å†… ABCD ä¸ºæ‚¨çš„å¯†é’?
$Key	=	"62c0d1ef0af30f359d372a639ca9338f";

//æ­¤å¤„è¯·ä¿®æ”¹ä¸ºå•†æˆ·ç»‘å®šçš„æ”¯ä»˜å®è´¦å·
//è‹¥ç»‘å®šå¤šä¸ªæ”¯ä»˜å®è´¦å·ï¼Œè¯·ç”¨â€?â€è‹±æ–‡åˆ†å·åˆ†éš”ï¼Œå¹¶è¿è¡Œå¤šä¸ªè½¯ä»?
$AliAccount	=	"shij3a@163.com";

//å¦‚æžœæ‚¨åŒæ—¶ç»‘å®šäº†å¤šä¸ªæ”¯ä»˜å®è´¦å·ï¼Œåˆ™åœ¨æ­¤è®¾ç½®å˜æ¢æ”¯ä»˜å®è´¦å·æ”¶æ¬¾çš„é—´éš”æ—¶é—?
$JiaoHuanTime	=	0;					//å•ä½ï¼šåˆ†é’?
//å¦‚æžœâ€?AliAccountâ€å‚æ•°åªç»‘å®šä¸€ä¸ªæ”¯ä»˜å®è´¦å·ï¼Œåˆ™â€?JiaoHuanTimeâ€å‚æ•°å°†ä¸è¢«ä½¿ç”¨
//â€?JiaoHuanTimeâ€å¦‚è®¾ç½®ä¸ºâ€?â€ï¼Œåˆ™éšæœºæ”¹å˜æ”¶æ¬¾çš„æ”¯ä»˜å®è´¦å·ï¼›è‹¥è®¾ç½®ä¸ºâ€?0â€ï¼Œåˆ™æ¯60åˆ†é’Ÿå˜æ¢ä¸€æ¬¡æ”¶æ¬¾çš„æ”¯ä»˜å®è´¦å?

//æ˜¯å¦å¯ç”¨è·³è½¬åŠŸèƒ½ å€¼ä¸ºâ€?â€æˆ–â€?â€?1:ä»˜æ¬¾æˆåŠŸåŽï¼Œè‡ªåŠ¨è·³è½¬ 0:ä»˜æ¬¾æˆåŠŸåŽï¼Œä¸è‡ªåŠ¨è·³è½?
$IsNotify	=	1;

//*******************************************************************
//=====ä»¥ä¸‹ä»£ç ä¸è¦ä¿®æ”¹=====
$AliAccount	=	GetRndAliAccount($AliAccount,$JiaoHuanTime);
?>