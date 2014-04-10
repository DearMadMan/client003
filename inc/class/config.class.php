<?php

include_once(DATA_PATH.'config.php');
class config
{


	private static $_instance;
	private $_data=array();
	private function __construct()
	{
		$this->Data_init();
	}
	private function __clone(){}
	public function __get($name)
	{
		if(isset($this->_data[$name]))
		{
			return $this->_data[$name];
		}else
		{
			return "not found !";
		}
	}

	public function __set($name,$value)
	{
		$this->_data[$name]=$value;
	}

	public function __unset($name)
	{
		if(isset($this->_data[$name]))
		{
			unset($this->_data[$name]);
		}
	}


	public static function GetInstance()
	{
		if(!(self::$_instance instanceof self))
		{

			self::$_instance=new self();
		}
		else
		{

		}
		return self::$_instance;
	}


	private function Data_init()
	{

		$_config_data=file(DATA_PATH.'config.php');
		$_math_string='/\s*\$(\S*)\s*=\s*(\S*)/';

		for($i=0,$length=count($_config_data);$i<$length;$i++)
		{
			if(strstr($_config_data[$i],"{do_not_match_this}"))
			{

				continue;
			}
			if(preg_match($_math_string,$_config_data[$i],$_matches))
			{
				$this->_data[$_matches[1]]=trim(trim($_matches[2],';'),'"');
			}

		}

	}
	public function GetConfig()
	{
		echo "<br/>".$config_db_host;
	}
}




?>