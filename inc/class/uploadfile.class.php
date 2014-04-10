<?php



class uploadfile
{

	private static $file_size=1024;
	private static $file_data_type=array("jpg",
					               "gif",
					               "zip",
					               "rar",
					               "txt",
					               "png"
					               );
	private static $random_name=true;

	private static $temp_dir="././temp/";
	private static $date_dir=true;
	private static $return_path=true;

	public static function UploadFiles($files)
	{
		$return_paths=array();
		$date_dir_temp="";
		self::$date_dir?$date_dir_temp=(self::$temp_dir.date("Ymd")."/"):$date_dir_temp=self::$temp_dir;

		if(self::$date_dir)
		{

			if(!file_exists($date_dir_temp))
			{
				if(!mkdir($date_dir_temp))
				{
					die($date_dir_temp." can't write!");
				}
			}
		}

		foreach ($files as $key => $value)
		{
			if(is_array($value['name']))
			{


				foreach ($value['name'] as $k => $v)
				{

					$file_data_type=mb_strrchr($v,".",false,"utf-8");
					$file_data_type=str_replace(".", "", $file_data_type);
					if(!self::IsFileDataType($file_data_type))
					{
						echo "不是允许的上传类型<br />";
						continue;
					}
					if(!self::IsFileSize($value['size'][$k]))
					{
						echo "不是允许的大小！";
						continue;
					}
					if($value['error'][$k]==2)
					{
						echo GetError(2)."<br />";
						continue;
					}

					if(!is_uploaded_file($value['tmp_name'][$k]))
					{
						die('do not attack!');
					}
					$temp_name=iconv("UTF-8","gb2312",$v);
					if(self::$random_name)
					{
						$temp_name=time().str_pad(rand(0,9999999),8,"0",STR_PAD_LEFT).".".$file_data_type;
					}

					if(move_uploaded_file($value['tmp_name'][$k], $date_dir_temp.$temp_name))
					{
						 $return_paths[]=$date_dir_temp.$temp_name;
						 echo "ok";
					}
					else
					{
						 echo self::GetError($value['error'][$k])."<br />";
					}

				}
			}else
			{

					$file_data_type=mb_strrchr($value['name'],".",false,"utf-8");
					$file_data_type=str_replace(".", "", $file_data_type);
					if(!self::IsFileDataType($file_data_type))
					{
						echo "不是允许的上传类型<br />";
						continue;
					}
					if(!self::IsFileSize($value['size']))
					{
						echo "不是允许的大小！";
						continue;
					}
					if($value['error']==2) //超过html上传限制
					{
						echo self::GetError(2)."<br />";
						continue;
					}

					if(!is_uploaded_file($value['tmp_name']))
					{
						die('do not attack!');
					}
					$temp_name=iconv("UTF-8","gb2312",$value['name']); //中文乱码
					if(self::$random_name)
					{
						$temp_name=time().str_pad(rand(0,9999999),8,"0",STR_PAD_LEFT).".".$file_data_type;
					}

					if(move_uploaded_file($value['tmp_name'], $date_dir_temp.$temp_name))
					{
						 $return_paths[]=$date_dir_temp.$temp_name;
						 echo "ok";
					}
					else
					{
						 echo self::GetError($value['error'])."<br />";
					}
			}
		}
		if(self::$return_path)
		{

			return $return_paths;
		}
	}
	public static function SetTempDir($temp)
	{
		self::$temp_dir=$temp;
	}
	public static function IsFileDataType($file_data_type)
	{
		$result=false;
		if(in_array($file_data_type, self::$file_data_type))
		{
			$result=true;
		}
		return $result;
	}
	public static function IsFileSize($file_size)
	{
		$result=false;
		$file_size>(self::$file_size*1024)?$result=false:$result=true;
		return $result;
	}

	public static function Init($temp_dir="",$file_size="",$file_data_type="",$random_name="",$date_dir="")
	{

		$file_size!=""?self::$file_size=$file_size:1;
		$file_data_type!=""?self::$file_data_type=$file_data_type:1;
		$random_name!=""?self::$random_name=$random_name:1;
		$temp_dir!=""?self::$temp_dir=$temp_dir:1;
		$date_dir!=""?self::$date_dir=$date_dir:1;
	}

	public function GetError($num)
	{
		$errors=array(
			true,
			"上传的文件超过了 php.ini 中 upload_max_filesize 选项限制的值",
			"上传文件的大小超过了 HTML 表单中 MAX_FILE_SIZE 选项指定的值",
			"文件只有部分被上传",
			"没有文件被上传",
			"",
			"找不到临时文件夹",
			"文件写入失败"
			);
		return $errors[$num];
	}

}

?>