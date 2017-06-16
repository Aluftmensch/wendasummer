<?php
namespace API\Controller;
use Think\Controller;
header("Content-Type: text/json; charset=utf-8");
class ThumbupController extends ResponseController{
	//点赞
	public function Thumbup(){
		if($_SERVER['REQUEST_METHOD']=="POST"){
			$data['uid']=$_POST['uid'];
			$data['qid']=$_POST['qid'];
		}
		else{
			$data['uid']=$_GET['uid'];
			$data['qid']=$_GET['qid'];
		}
	}

}
?>
