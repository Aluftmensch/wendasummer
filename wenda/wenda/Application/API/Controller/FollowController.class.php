<?php
namespace API\Controller;
use Think\Controller;
header("Content-Type: text/json; charset=utf-8");
class FollowController extends ResponseController
{
	 public function follow(){
      if($_SERVER['REQUEST_METHOD']=="POST"){
		    $data['uid'] = $_POST['uid'];
		    $data['fuid']= $_POST['fuid'];
      }
      else{
		    $data['uid'] = $_GET['uid'];
		    $data['fuid']= $_GET['fuid'];
      }
      if ($data['uid']!=NULL&&$data['fuid']!=NULL) {
        $follow=M('friendlist');
        if (false!=$follow->add($data)) {
           return ResponseController::resultjson("1","success");
        }
        else{
            return ResponseController::resultjson("0","failure");
        }
      }
      else{
        //传输数据错误
       return ResponseController::resultjson("403","");
      }
    }
    //取消关注
    public function delfollow(){
      //header("Content-Type: text/html; charset=utf-8");
      if($_SERVER['REQUEST_METHOD']=="POST"){
		    $data['uid']  = $_POST['uid'];
		    $data['fuid'] = $_POST['fuid'];
      }
      else{
		    $data['uid']  = $_GET['uid'];
		    $data['fuid'] = $_GET['fuid'];
      }
      if ($data['uid']!=NULL&&$data['fuid']!=NULL) {
        $follow=M('friendlist');
        $f=$follow->where($data)->field('frid')->find();
        $result=$follow->where("frid = ".$f['frid'])->delete();
        if ($result>0) {
        	 return ResponseController::resultjson("1","success");
        }
        else{
            return ResponseController::resultjson("0","failure");
        }
      }
      else{
           return ResponseController::resultjson("403","");
      }
    }
    //判断是否关注
    public function isfollow(){
      if($_SERVER['REQUEST_METHOD']=="POST"){
		    $data['uid']  = $_POST['uid'];
		    $data['fuid'] = $_POST['fuid'];
      }
      else{
		    $data['uid']  = $_GET['uid'];
		    $data['fuid'] = $_GET['fuid'];
      }
      if ($data['uid']!=NULL&&$data['fuid']!=NULL) {
        $follow=M('friendlist');
        $result=$follow->where($data)->count();
        if ($result>0) {
        	$msg = array('code'=>'1');
        	return ResponseController::wendajson($msg);
        }
        else{
	      $msg = array('code'=>'0');
	      return ResponseController::wendajson($msg);
        }
      }
      else{
        $msg = array('code'=>'403');
        return ResponseController::wendajson($msg);
      }
    }
    public function followlist(){
       if($_SERVER['REQUEST_METHOD']=="POST"){
        $uid  = $_POST['uid'];
      }
      else{
        $uid  = $_GET['uid'];
      }
      if (!empty($uid)) {
          $f = M('friendlist');
          $fidlist = $f -> where('uid = '.$uid) ->field('fuid')-> select();
          if (!empty($fidlist)) {
          $u = M('Users');
          $uidlist = array_column($fidlist,'fuid');
          $udata['uid'] = array('in',$uidlist);
          $flresult = $u -> field('pwd,regdate',true) ->where($udata) -> select();
          $sentflist = array('code'=>'200',"followlist"=>$flresult);
          return ResponseController::wendajson($sentflist);
          }else{
          $sentflist = array('code'=>'200',"followlist"=>"");
          return ResponseController::wendajson($sentflist);
          }
      }else{
          $sent = array('code'=>'403',"followlist"=>"");
          return ResponseController::wendajson($sent);
      }
    }
}