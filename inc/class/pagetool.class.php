<?php


 class pagetool
{

	protected static $instance=null;
	protected $db=null;
	protected $sql="";
	protected $dfNum=10;
	protected $count=0;
	protected $pageNow=0;
	protected $lastPage=0;
	protected $pagePath="";

	private function __construct()
	{
		$this->Init();
	}
	private function __clone(){}
	private function Init(){}
	public static function GetInstance()
	{
		if(!(self::$instance instanceof self))
		{
			self::$instance = new self();
		}
		return self::$instance;
	}

	public function setNeed($db,$sql,$dfNum,$pageNow,$pagePath,$id="*")
	{

		$countstr=strtolower($sql);
		$countstr=preg_replace('/select(.*)from/',"select count($id) from",$countstr);
		$this->db=$db;
		$this->sql=$sql;
		$this->dfNum=$dfNum;
		$this->count=$db->GetOne($countstr);
		if($pageNow<=0)
		{
			$pageNow=1;
		}
		$this->pageNow=$pageNow;
		$this->lastPage=ceil($this->count/$dfNum);
		if($this->lastPage==0)
		{
			$this->lastPage=1;
		}
		if(!strstr($pagePath,"?"))
		{
			$pagePath.="?1=1";
		}
		$this->pagePath=$pagePath;

	}


	public function getRes()
	{
		if($this->pageNow>$this->lastPage)
		{
			$this->pageNow=$this->lastPage;
		}

		$this->pageNow>0?1:$this->pageNow=1;

		$startNum=(($this->pageNow)-1)*$this->dfNum;
		$sql=$this->sql." limit $startNum,".$this->dfNum;
		$res=$this->db->GetAll($sql);
		return $res;
	}


	public function CreatePageRow()
	{
		$str="";
		if($this->pageNow>$this->lastPage)
		{
			$this->pageNow=$this->lastPage;
		}

		if($this->lastPage==1)
		{
			$str="<a class='disable' >上一页</a>";
			$str.="<a class='active' >1</a>";
			$str.="<a class='disable' >下一页</a>";
			return $str;
		}

		if($this->pageNow-1<=0)
		{
			$str="<a class='disable'>上一页</a>";

		}
		else
		{
			$str="<a href='".$this->pagePath."&pageNow=".($this->pageNow-1)."'>上一页</a>";
		}


		if($this->lastPage<=7)
		{
			for ($i=1; $i <= $this->lastPage; $i++) {
				if($i==$this->pageNow)
				{
					$str.="<a class='active'>".($i)."</a>";
				}
				else
				{
					$str.="<a href='".$this->pagePath."&pageNow=$i'>".$i."</a>";
				}

			}

		}
		else
		{

			if($this->pageNow<=3)
			{

				$num=4;
				for ($i=1; $i <= $num; $i++) {
					if($i==$this->pageNow)
					{
						$str.="<a class='active'>".($i)."</a>";
					}
					else{
						$str.="<a href='".$this->pagePath."&pageNow=$i'>".($i)."</a>";
					}

				}
				$str.=" ... ";
				$str.="<a href='".$this->pagePath."&pageNow=".$this->lastPage."'>".($this->lastPage)."</a>";

			}
			else
			{
				 if($this->lastPage-$this->pageNow<=3)
				 {
				 	$str.="<a href='".$this->pagePath."&pageNow=0'>1</a>";
				 	$str.=" ... ";
				 	for ($i=($this->lastPage-4); $i <=$this->lastPage ; $i++) {
				 		if($i==$this->pageNow)
				 		{
				 			$str.="<a class='active'>".($i)."</a>";
				 		}
				 		else
				 		{
				 			$str.="<a href='".$this->pagePath."&pageNow=$i'>".($i)."</a>";
				 		}

				 	}
				 }
				 else
				 {
				 	$str.="<a href='".$this->pagePath."&pageNow=0'>1</a>";
				 	$str.=" ... ";
				 	for ($i=($this->pageNow-2); $i <=$this->pageNow+2; $i++) {
				 		if($i==$this->pageNow)
				 		{
				 			$str.="<a class='active'>".($i)."</a>";
				 		}
				 		else
				 		{
				 			$str.="<a href='".$this->pagePath."&pageNow=$i'>".($i)."</a>";
				 		}
				 	}
				 	$str.=" ... ";
				 	$str.="<a href='".$this->pagePath."&pageNow=".$this->lastPage."'>".($this->lastPage)."</a>";
				 }
			}

		}

		if($this->pageNow+1>$this->lastPage)
		{
			$str.="<a class='disable'>下一页</a>";
		}
		else
		{
			$str.="<a href='".$this->pagePath."&pageNow=".($this->pageNow+1)."'>下一页</a>";
		}

		return $str;

	}



}
?>