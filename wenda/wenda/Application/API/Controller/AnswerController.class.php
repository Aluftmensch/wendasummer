<?php
namespace API\Controller;
use Think\Controller;
header("Content-Type: text/json; charset=utf-8");
/**
* 
*/
class AnswerController extends ResponseController
{   
	public function atest(){
		$this->display();
	}
    //回答列表
	public function aulist(){
      
	}
	//添加答案
	public function insertanswer(){
		if ($_SERVER['REQUEST_METHOD']=="POST") {
			$data['uid'] = $_POST['uid'];
			$data['qid'] = $_POST['qid'];
			$data['answerstexrt'] = $_POST['answerstexrt'];
		}else{
			$data['uid'] = $_GET['uid'];
			$data['qid'] = $_GET['qid'];
			$data['answerstexrt'] = $_GET['answerstexrt'];
		}
		if ($data['uid']!=NUll&&$data['qid']!=NUll&&$data['answerstexrt']!=NUll) {
			if ($_FILES['voicefile']['size']!=0) {
				$voicefilepath = "./Public/voicefile/";
		        $voicefiletype = array('mp3','wav','amr');
		        $data['voicefile'] = parent::voicefileupload('voicefile',$voicefilepath,$voicefiletype);
			}
			 $an = M('Answers');
			$data['answerstime'] = array('exp','now()');
			if (false!=$an->add($data)) {
				return ResponseController::resultjson("1","success");
			}else{
				 return ResponseController::resultjson("0","failure");
			}

			
		}else{
			return ResponseController::resultjson("403","");
		}
	}
}