<?php

class filer
{
	private static $_instance;
	private function __construct()
	{

	}
	private function __clone()
	{

	}
	public static function GetInstance()
	{
		if(!(self::$_instance instanceof self))
		{
			self::$_instance=new self();
		}
		return self::$_instance;
	}

	public function ReadOne($path)
	{
		if(!file_exists($path))
		{
			die("Not found $path");
			return false;
		}
		$handle=@fopen($path,'r');
		if($handle)
		{
			$buffer=fgets($handle);
			fclose($handle);
			return $buffer;
		}
		else
		{
			fclose($handle);
			return false;
		}
	}

	public function ReadAll($path,$format="")
	{
		if(!file_exists($path))
		{
			die("Not found $path");
			return false;
		}
		$handle=@fopen($path,'r');
		$string="";
		if($handle)
		{
			while(!feof($handle))
			{
				$string=$string.fgets($handle).$format;
			}
		$string=trim($string,$format);

		}
		fclose($handle);
		return $string;
	}

	public function Append($path,$string,$format='')
	{
		if(file_exists($path))
		{
			if(!is_writable($path))
			{
				die("Not is_writable $path");
				return false;
			}
		}
		$handle=@fopen($path,'ab');
		if(!$handle)
		{
			fclose($handle);
			die("Can't Open $path");
			return false;
		}
		if(fwrite($handle, $string.$format)===false)
		{
			fclose($handle);
			die("write false");
			return false;
		}
		fclose($handle);
		return true;
	}

}

?>