<?php
namespace Admin\Controller;
use Think\Controller;
class WelcomeController extends BaseController {
	public function index(){
		 $arr = array();
		 $date = array();
		 for ($i=1; $i <11 ; $i++) { 
	 	 $time = date("Y-m-d",strtotime(1-$i." day"));
	 	 $date[$i] = $time;
	 	 $users = M('Users');
	 	 $day = $users -> where("regdate='$time'") ->count();
	 	 $arr[$i] = $day;		 	
		}
		 $this -> assign("day",$arr);
		 $this -> assign("date",$date);
		 $arr1 = array();
		 for ($i=1; $i<11;$i++) { 
		 $time = date("Y-m-d",strtotime(1-$i." day"));
	 	 $q = M('Question');
	 	 $day = $q -> where("createtime='$time'") ->count();
	 	 $arr1[$i] = $day;
		 }
		 $this -> assign("over",$arr1);
		 $this -> display();

	}
        
}
