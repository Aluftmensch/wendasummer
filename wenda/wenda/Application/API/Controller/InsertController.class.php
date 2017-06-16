<?php
namespace API\Controller;
use Think\Controller;
header("Content-Type: text/json; charset=utf-8");
/**
* 
*/
class InsertController extends ResponseController
{
	public function index(){
		$this->display();
	}
	public function addquestion(){
		if ($_SERVER['REQUEST_METHOD']=="POST") {
			$data['uid'] = $_POST['uid'];
			$data['description'] = $_POST['description'];
			$data['tid'] = $_POST['tid'];
			$textcontent = $_POST['textcontent'];
		}else{
			$data['uid'] = $_GET['uid'];
			$data['description'] = $_GET['description'];
			$data['tid'] = $_GET['tid'];
			$textcontent = $_GET['textcontent'];
		}
		if ($data['uid']!=NULL&&$data['tid']!=NULL&&$data['description']!=NULL) {
			if ($textcontent!=NUll) {
				$data['textcontent'] = $textcontent;
			}
			$data['createtime'] = array('exp','now()');
			$question = M("Question");
			$result = $question -> add($data);
			if ($result) {
			$filedata['qid'] = $result;
            if ($_FILES['filename']['size']!=0) {
		    $filepath = './Public/questionimg/';
		    $f = M('Qadditional');
			$num = count($_FILES['filename']['name']);
			for($i=0;$i<$num;$i++){
			$filedata['filename'] = parent::manyfilesupload($i,$_FILES['filename'],$filepath);
			$f -> add($filedata);
		    }
		}
			return ResponseController::resultjson("1","success");
		}else{
			return ResponseController::resultjson("0","failure");
			}
		}else{
			return ResponseController::resultjson("403","");
			
		}
	}
}