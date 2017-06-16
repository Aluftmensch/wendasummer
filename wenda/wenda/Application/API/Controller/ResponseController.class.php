<?php
namespace API\Controller;
use Think\Controller;
header("Content-Type: text/json; charset=utf-8");
class ResponseController extends Controller {
	public static function resultjson($code, $message = ''){
			if(!is_numeric($code)) {
			return '';
		}

		$result = array(
			'code' => $code,
			'msg' => $message,
		);

		echo json_encode($result);
		exit;
	}
    public	function wendajson($str){
    echo preg_replace_callback('/\\\\u([0-9a-f]{4})/i', create_function('$matches', 'return iconv("UCS-2BE","UTF-8",pack("H*", $matches[1]));'), json_encode($str));
    exit;
    }
    public function myupload($picname,$filepath){
        $upload = new \Think\Upload();
		$upload->maxSize = 3145728 ;
		$upload->exts = array('jpg', 'gif', 'png', 'jpeg');
		$upload->saveName=time().rand();
		$upload->rootPath = $filepath; 
		$upload->autoSub = false;
		$info = $upload->upload();
		if(!$info) 
		{
		$this->error($upload->getError());
		}
		$picsavename =$upload->saveName.$suffix;
		$p=$picsavename;
		$image = new \Think\Image();
		$image->open($filepath.$p);
		// 缩略图400*500
		$image->thumb(400, 500)->save($filepath.$p);   
		return $picsavename;
		exit;
	}
	public function manyfilesupload($i,$filename,$filepath){
	if($filename['error'][$i]>0){
	switch ($filename["error"][$i]) {//附件检查
		case 1:
		$this->resultjson("101","File is too large");//附件大小系统极限大小
		break;
		case 3:
		$this->resultjson("303","Upload failed");//失败
		break;
		case 4:
		$this->resultjson("600","Not found file");//无附件上传
		break;
		default:
		$this->resultjson("500","unknown error");//未知错误
	}
	continue;
	}
	$maxSize = 5242881;//附件小于等于5MB
	if ($filename['size'][$i] > $maxSize) {
		$this->resultjson("101","File is too large,The file  max size 5MB");
			continue;
	}
	$allowedExts = array("gif", "jpeg", "jpg", "png",);
	$temp = explode(".", $filename["name"][$i]);
	$extension = end($temp);
	$savename=time().rand(99,1000).".".$extension;
	if (!in_array($extension, $allowedExts)) {
		$this->resultjson("300","File types are not supported");
		continue;
	}
	if (file_exists($filepath . $filename["name"][$i])){
		$this->resultjson("110","The file has been uploaded");
	}else{
	   move_uploaded_file($filename["tmp_name"][$i], $filepath . $savename);
		$image = new \Think\Image();
		$image->open($filepath.$savename);
		// 缩略图400*500
		$image->thumb(400,500)->save($filepath.$savename); 
		return $savename; 
	}
	}
	public function voicefileupload($voicefilename,$voicefilepath,$voicefiletype){
        $upload = new \Think\Upload();
		$upload->maxSize = 5242880 ;
		$upload->exts = $voicefiletype;
		$upload->saveName=time().rand();
		$upload->rootPath = $voicefilepath; 
		$upload->autoSub = false;
		$info = $upload->upload();
		if(!$info) 
		{
		$this->error($upload->getError());
		}

		return $info[$voicefilename]['savename'];
		exit;
	}


}