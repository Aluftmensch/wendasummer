<?php
namespace API\Controller;
use Think\Controller;
class CollectionController extends ResponseController
{
	 public function collection(){
      if($_SERVER['REQUEST_METHOD']=="POST"){
		    $data['uid'] = $_POST['uid'];
		    $data['qid']= $_POST['qid'];
      }
      else{
		    $data['uid'] = $_GET['uid'];
		    $data['qid']= $_GET['qid'];
      }
      if ($data['uid']!=NULL&&$data['qid']!=NULL) {
        $collection=M('Collectionquestion');
        if (false!=$collection->add($data)) {
             return ResponseController::resultjson("1","success");
        }
        else{
           return ResponseController::resultjson("0","failure");
        }
      }
      else{
        //传输数据错误
       return ResponseController::state("403","");
      }
    }
    //取消收藏
    public function delcollection(){
      if($_SERVER['REQUEST_METHOD']=="POST"){
		    $data['uid']  = $_POST['uid'];
		    $data['qid'] = $_POST['qid'];
      }
      else{
		    $data['uid']  = $_GET['uid'];
		    $data['qid'] = $_GET['qid'];
      }
      if ($data['uid']!=NULL&&$data['qid']!=NULL) {
        $collection=M('Collectionquestion');
        $f=$collection->where($data)->field('fqid')->find();
        if (false!=$collection->where($f)->delete()) {
        	  return ResponseController::resultjson("1","success");
        }
        else{
           return ResponseController::resultjson("0","failure");
        }
      }
      else{
           return ResponseController::state("403");
      }
    }
    //判断是否收藏
    public function isCollection(){
      if($_SERVER['REQUEST_METHOD']=="POST"){
		    $data['uid']  = $_POST['uid'];
		    $data['qid'] = $_POST['qid'];
      }
      else{
		    $data['uid']  = $_GET['uid'];
		    $data['qid'] = $_GET['qid'];
      }
      if ($data['uid']!=NULL&&$data['qid']!=NULL) {
        $c=M('Collectionquestion');
        $result=$c->where($data)->count();
        if ($result>0) {
        	$msg = array('collected'=>'1');
        	return ResponseController::wendajson($msg);
        }
        else{
	      $msg = array('collected'=>'0');
	      return ResponseController::wendajson($msg);
        }
      }
      else{
          return ResponseController::state("403");
      }
    }
    //收藏列表
      public function collectionList(){
      if ($_SERVER['REQUEST_METHOD']=="POST") {
        $data['uid']=$_POST['uid'];
      }
      else{
        $data['uid']=$_GET['uid'];
      }
      if ($data['uid']!=NULL) {
        $follow=D('Collectionquestion');
       $result=$follow->where("wenda.wenda_collectionquestion.uid=".$data['uid'])->relation(true)->select();
          //var_dump($result); 
         if ($result!=NULL) {
         //var_dump($result);
         return ResponseController::wendajson($result);
        }
        else{
          $msg = array('selected'=>'0');
          return ResponseController::wendajson($msg);
        }
      }
      else{
        return ResponseController::state("403");
      }
    }



}
?>