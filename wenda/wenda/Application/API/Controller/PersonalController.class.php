<?php
namespace API\Controller;
use Think\Controller;
header("Content-Type: text/json charset=utf-8");
class PersonalController extends ResponseController {
	public function userdata(){
		if ($_SERVER['REQUEST_METHOD']=="POST") {
			$data['uid'] = $_POST['uid'];
		}else{
			$data['uid'] = $_GET['uid'];
		}
		if ($data['uid']!=NULL) {
			$user = M('Users');
			$userdata = $user -> where($data) -> field('pwd,regdate',true) ->find();
			if ($userdata!=NULL) {
				return ResponseController::wendajson($userdata);
			}else{
				$senddata = array("code"=>"201","data"=>"false");
				return ResponseController::wendajson($senddata);
			}
		}else{
			$senddata = array("code"=>"403","data"=>"");
			return ResponseController::wendajson($senddata);
		}
	}
	public function updatauserdata(){
		if ($_SERVER['REQUEST_METHOD']=="POST") {
			$uid = $_POST['uid'];
            $data['username'] = $_POST['username'];
            $data['email'] = $_POST['email'];
            $data['tel'] = $_POST['tel'];
		}else{
			$uid = $_GET['uid'];
            $data['username'] = $_GET['username'];
            $data['email'] = $_GET['email'];
            $data['tel'] = $_GET['tel'];
		}
		if ($uid!=NULL&&$data['username']!=NULL&&$data['email']!=NULL&&$data['tel']!=NULL) {
			$user = M('Users');
			if ($_FILES['upic']['size']!=0) {
				  $filepath = './Public/userphoto/'; 
				  $data['upic'] = parent::myupload('upic',$filepath);
				  $name = $user -> field('upic') -> where("uid = ".$uid) -> find();
				  if ($name['upic']!="default.jpg") {
				    $filename = $filepath.$name['upic'];
				    unlink($filename);
				  }
			}
			if (false!=$user -> where("uid = ".$uid) ->save($data)) {
				return ResponseController::resultjson("1","success");
			}else{
				return ResponseController::resultjson("0","failure");
			}
		}else{
			return ResponseController::resultjson("403"," ");
		}

	}
	

}