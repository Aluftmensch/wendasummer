<?php
namespace API\Controller;
use Think\Controller;
header("Content-Type: text/json; charset=utf-8");
class UsersController extends ResponseController {
   public function login(){

        if ($_SERVER['REQUEST_METHOD']=="POST") {
         $data['username'] = $_POST['username'];
         $data['pwd'] = md5($_POST['pwd']);
        }else{
          $data['username'] = $_GET['username'];
          $data['pwd'] = md5($_GET['pwd']);
        }  
        if ($data['username']!=NULL&&$data['pwd']!=NULL) {
        // $result = array("date"=>"","info"=>"success","state"=>"403");
         $m = M("users");
           $result = $m->where($data)->find();
            if ($result) {
              $data = array('uid'=>$result['uid'],'msg'=>'success');
             return ResponseController::wendajson($data);
            }else{
                 //登录失败状态码
              $data = array('uid'=>'0','msg'=>'failure');
              return ResponseController::wendajson($data);
                // echo json_encode($info);
            } 
      }
      else{
            //数据传输异常
            $data = array('uid'=>'403','msg'=>'Illegal');
            return ResponseController::wendajson($data);
      }
    }
    public function regusers(){
      if ($_SERVER['REQUEST_METHOD']=="POST") {
          $data['username'] = $_POST['username'];
          $data['pwd'] = md5($_POST['pwd']);
          $data['email'] = $_POST['email'];
        }else{
          $data['username'] = $_GET['username'];
          $data['pwd'] = md5($_GET['pwd']);
          $data['email'] = $_GET['email'];
        }  
        if ($data['username']!=NULL&&$data['pwd']!=NULL&&$data['email']!=NULL) {
            $m=M("Users");
            $data['regdate'] = array('exp','now()');
        if (false!=$m->add($data)) {
            return ResponseController::resultjson("1","success");
        }
        else{
            return ResponseController::resultjson("0","failure");
        }
       }else{
            return ResponseController::resultjson("403","");
       }
      
    }
}