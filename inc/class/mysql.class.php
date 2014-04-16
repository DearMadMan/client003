<?php



class mysql extends db
{
	private static $_instance;
	private $config;
	private $resource;
    private $insertlog;
	private function __construct()
	{
		$this->Init();
	}
	private function __clone(){}

    public static function GetInstance()
    {
    	if(!(self::$_instance instanceof self))
    	{
    		self::$_instance =new self();
    	}
       return self::$_instance;
    }

    private function Init()
    {
    	$this->config=config::GetInstance();
    	$this->Connect($this->config->config_db_host,$this->config->config_db_user,$this->config->config_db_password);
    	$this->SelectDb($this->config->config_db_name);
    	$this->SetCharset($this->config->config_db_charset);
    }
	 protected function Connect($host,$user,$pwd)
	{
		$this->resource= mysql_connect($host,$user,$pwd);

	}
 	 public function SelectDb($db)
 	{
 		$sql="use ".$db.';';
 		$this->Query($sql);
 	}
 	 public function SetCharset($charset)
 	{
 		$sql="set names utf8;";
 		$this->Query($sql);
 	}
 	 public function Query($sql)
 	{
 		$result=mysql_query($sql);
    if($this->config->config_write_log==true)
    {
      dblog::WriteLog($sql);
    }
 		if($result!==false)
 		{
 			return $result;
 		}
 		else
 		{
      if(!DEBUG)
      {
        die("Sorry!Error Now!");
      }
 			$sqlerror=array();
 			$sqlerror["sql"]=$sql;
 			$sqlerror["error"]=mysql_error();
      echo "<br />";
 			print_r($sqlerror);exit;
 		}

 	}

 	 public function GetOne($sql)
     {
       $result=$this->Query($sql);
       $row=mysql_fetch_assoc($result);
       if(empty($row))
       {
        return false;
       }
       foreach ($row as $key => $value) {
           return $row[$key];
       }
     }
     public function GetRow($sql)
     {
       $result=$this->Query($sql);
       $row=mysql_fetch_assoc($result);
       return $row;
     }
 	 public function GetAll($sql)
   {
       $result=$this->Query($sql);
       $rows=array();
       while ($row=mysql_fetch_assoc($result))
        {
          $rows[]=$row;
        }
        return $rows;
   }
 	 public function GetInsertId($source="")
   {
      return $source==""?mysql_insert_id():mysql_insert_id($source);
   }

   public function GetAffectedRows($source="")
   {

      return $source==""?mysql_affected_rows():mysql_affected_rows($source);
   }

 	 public function AutoExcute($table,$where="",$fields="",$data="",$type="insert")
   {
        $_where="";
        $where==""?1:$_where=("where ".$where);
        if($where!=""&&$fields==""&&$data=="")
        {

          $sql="delete from $table ".$_where;
          $result= $this->Query($sql);
          $off=$this->GetAffectedRows($this->resource);
          if($off>0)
          {
            return true;
          }
          return false;


        }


          $fieldstr="";
          if(is_array($fields))
          {
              foreach ($fields as $value)
            {

              $fieldstr=$fieldstr.$value.",";
            }
            $fieldstr=trim($fieldstr,",");
          }
          else
          {
              $fieldstr=$fields;
          }
          $datastr="";
          if(is_array($data))
          {
             foreach ($data as $value)
             {
               $datastr=$datastr."'".$value."',";
             }
             $datastr=trim($datastr,",");
          } else
          {
              $datastr=$data;
          }

        if(strtolower($type)=="insert")
        {
          //insert

          $sql="insert into $table ($fieldstr) values ($datastr) $_where;";
          $result=$this->Query($sql);
          $off=$this->GetAffectedRows($this->resource);
          if($off>0)
          {
            return true;
          }
          return false;
        }
        if(strtolower($type)=='update')
        {

          $fieldarr=explode(",",$fieldstr);


          if(!is_array($data))
          {
            die("因为数据中如果含有分割符','会造成意外分割的情况，所有我们约定update中,值参数只允许为数组！");
          }
          $setstr="";
          for($i=0,$length=count($fieldarr);$i<$length;$i=$i+1)
          {
            $setstr=$setstr.$fieldarr[$i]."='".$data[$i]."',";
          }
          $setstr=trim($setstr,",");
          $sql="update $table set $setstr $_where";
          $result=$this->Query($sql);
          $off=$this->GetAffectedRows($this->resource);
          if($off>0)
          {
            return true;
          }
          return false;
        }
   }

}













?>