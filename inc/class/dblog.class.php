<?php


 class dblog
{
	private static $_instance;
	private static $logpath=LOG_PATH;
	private static $filer;
	private static $logname="db.log";
	private static $logsize=200;
	private function __construct()
	{
	}
	private function __clone()
	{
	}
	public static function WriteLog($log)
	{
		self::$filer=filer::GetInstance();

		$date=date("Ymd");
		$realpath=self::$logpath.$date.'/'.self::$logname;
		$dirpath=self::$logpath.$date;
		if(!file_exists($dirpath))
		{
			if(!mkdir($dirpath))
				{
					die("can't mkdir $dirpath!");
				}
		}

		if(!file_exists($realpath))
		{
			self::$filer->Append($realpath,'',"");
		}

		if(filesize($realpath)>=self::$logsize*1024)
		{

			rename($realpath, self::$logpath.$date.'/'.date("Ymd_H_i_s_").rand(0,99999).'.bak');

		}
		self::$filer->Append($realpath,date("H:i:s ").$log,"\r\n");
		return true;
	}

}
?>