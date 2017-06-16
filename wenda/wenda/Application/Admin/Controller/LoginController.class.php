<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function check(){
        $m = D('Admin');
        if ($m->create()) {
           $data['adminname'] = $_POST['name'];
           $data['password']  = md5($_POST['password']);
           $result = $m -> where($data) -> find();
            if ($result) {
                $m->loginip = get_client_ip();//获取登录IP
                $m -> where("adminid =".$result['adminid']) -> save();//IP写入
                $_SESSION['adminname'] = $data['adminname'];
                $_SESSION['aid'] = $result['adminid'];
                $this -> redirect('Welcome/index','',3,'欢迎使用，页面跳转中~~~~');
            }else{
                $this->error("用户名或密码错误！");
            }
        }else{
        $this -> error($m -> geterror());
        }
    }

    public function logout(){
    	unset($_SESSION['adminname']);
    	unset($_SESSION['aid']);
    	session_destroy();
    	$this->redirect('Index/index','',3,'3秒后自动退出，页面跳转中····');

    }

}