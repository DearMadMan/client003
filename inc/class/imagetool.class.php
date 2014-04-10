<?php

class imagetool
{
	private static $can_remove=true;
	private static $width=350;
	private static $height=350;
	private static $jpeg_quality=95;
	private static $watermark=true;
	private static $watermark_path="watermark.png";
	private static $watermark_padding_x=0;
	private static $watermark_padding_y=0;
	private static $watermark_apache=70;
	private static $com_mode=3;
	private static $return_success=true;
	private static $cover_img=false;


	public static function GetImage($arr)
	{
		$returns=array();
		if(is_array($arr))
		{
			foreach ($arr as $key => $value)
			{
				$returns[]=self::GetImageFromString($value);
			}
		}
		else
		{
				$returns=self::GetImageFromString($arr);
		}
		if(self::$return_success)
		{
			return $returns;
		}
	}

	public static function ImageInfo($path)
	{

		if(!file_exists($path))
		{

			return false;
		}
		$info=getimagesize($path);
		if(!$info)
		{
			if(self::$can_remove)
			{
				unlink($path);
			}
			return false;
		}

		$img=array();
		$img['width']=$info[0];
		$img['height']=$info[1];
		$img['ext']=substr($info['mime'],strpos($info['mime'],'/')+1);
		return $img;
	}

	public static function WaterMarker($d_img,$img)
	{

			$w_img=self::ImageInfo(self::$watermark_path);
			if(!$w_img)
			{
				return false;
			}

			if($img['width']<$w_img['width']||$img['height']<$w_img['height'])
			{
				return false;
			}
			$wfunc='imagecreatefrom'.$w_img['ext'];
			if(!function_exists($wfunc))
			{
				return false;
			}
			$w_im=$wfunc(self::$watermark_path);  //创建水印画布
			$dx=0;
			$dy=0;
			$x=true;
			$y=true;
			 if(self::$watermark_padding_x+$w_img['width']>$img['width'])
			 {
			 	$x=false;
			 }
			 if(self::$watermark_padding_y+$w_img['height']>$img['height'])
			 {
			 	$y=false;
			 }
			 $temp_x=$img['width']-$w_img['width'];
			 $temp_y=$img['height']-$w_img['height'];
			switch (self::$com_mode) {
				case 0:
					$x?$dx=self::$watermark_padding_x:$dx=0;
					$y?$dy=self::$watermark_padding_y:$dy=0;
					break;
				case 1:

					$x?$dx=self::$watermark_padding_x+$temp_x:$temp_x;
					$y?$dy=self::$watermark_padding_y:0;
					break;
				case 2:
					$x?$dx=self::$watermark_padding_x:0;
					$y?$dy=self::$watermark_padding_y+$temp_y:$temp_y;
					break;
				case 3:
					$x?$dx=self::$watermark_padding_x+$temp_x:$temp_x;
					$y?$dy=self::$watermark_padding_y+$temp_y:$temp_y;
					break;
				default:
					break;
			}
		 imagecopymerge($d_img, $w_im, $dx, $dy, 0, 0, $w_img['width'],$w_img['height'], self::$watermark_apache);
		 imagedestroy($w_im);
		 return $d_img;
	}

	public static function WaterMarkerFromPath($path)
	{
			$img=self::ImageInfo($path);
			if(!$img)
			{
				return false;
			}
			$dfunc='imagecreatefrom'.$img['ext'];
			$d_img=$dfunc($path);
			$d_img=self::WaterMarker($d_img,$img);
			$dfc='image'.$img['ext'];
			$dfc($path);
			imagedestroy($d_img);
	}

	public static function GetImageFromString($path)
	{

		$img=self::ImageInfo($path);
		if(!$img)
		{
			return false;
		}

		$calc=min(self::$width/$img['width'],self::$height/$img['height']);

		$imagecreatefromfunc='imagecreatefrom'.$img['ext'];

		$s_img=$imagecreatefromfunc($path);
		$d_img=imagecreatetruecolor(self::$width, self::$height);
		$white=imagecolorallocate($d_img,255,255,255);
		imagefill($d_img, 0, 0, $white);
		$dwidth=(int)$img['width']*$calc;
		$dheight=(int)$img['height']*$calc;
		$paddingx=(int)(self::$width-$dwidth)/2;
		$paddingy=(int)(self::$height-$dheight)/2;
		imagecopyresampled($d_img, $s_img,$paddingx,$paddingy, 0, 0, $dwidth, $dheight, $img['width'], $img['height']);
		if(self::$cover_img)
		{

			unlink($path);
		}
		else
		{

			if(strripos($path,"/"))
			{
				$str=substr($path,strripos($path,"/")+1);
				$strp=substr($path,0,strripos($path,"/")+1);
				$path=$strp."thumb_".$str;
			}
			else
			{
				$path="thumb_".$path;
			}


		}
		if(self::$watermark)
		{

			$dimg=array();
			$dimg['width']=self::$width;
			$dimg['height']=self::$height;
			$d_img=self::WaterMarker($d_img,$dimg);
		}


		$createfunc ='image'.$img['ext'];
		$createfunc($d_img,$path);
		imagedestroy($s_img);
		imagedestroy($d_img);
		return $path;


	}

	public static function InitFromArray($array)
	{

		foreach ($array as $key => $value)
		{

			if(isset(self::$$key))
			{

				self::$$key=$value;
			}
			else
			{
			}
		}
	}











}


?>