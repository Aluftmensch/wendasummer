<?php
namespace Home\Controller;
use Think\Controller;
/**
* 处理登录
SESSION未处理
*/
class LoginController extends Controller
{
	public function checkuser(){
		$u = D('Users');
		if ($u->create()) {
			 $email = I('post.email');
			 $pwd = md5(I('post.pass'));
			 $regexp = '/^0?(13|14|15|17|18)[0-9]{9}$/';
			 $v = trim($email);
			 $t = preg_match($regexp,$v);
			 if (filter_input(INPUT_POST,"email",FILTER_VALIDATE_EMAIL)) {
			 	$data = array('email'=>$email,'pwd'=>$pwd);
			 	$result = $u -> where($data) -> find();
			 	if ($result) {
			 		// $_SESSION['uid'] = $result['uid'];
			 		// $_SESSION['username'] = $result['username'];
			 		$this -> redirect('Users/index','',3,"<span style='width:300px;heigth:200px;font-size:0.8em;font-family:微软雅黑'>登录成功，欢迎使用，页面跳转中···</span>");
			 	}else{
			 		$this -> error("用户名或密码错误!");
			 	}
			 }
			 elseif ($t==1) {
			 	$data = array('tel'=>$email,'pwd'=>$pwd);
			 	$result = $u -> where($data) -> find();
			 	if ($result) {
			 		$this -> redirect('Users/index','',3,"<span style='width:300px;heigth:200px;font-size:0.8em;font-family:微软雅黑;'>登录成功，欢迎使用，页面跳转中···</span>");
			 	}else{
			 		$this -> error("用户名或密码错误!");
			 	}
			 }else{
			 	$data = array('username'=>$email,'pwd'=>$pwd);
			 	$result = $u -> where($data) -> find();
			 	if ($result) {
			 		$this -> redirect('Users/index','',3,"<span style='width:300px;heigth:200px;font-size:0.8em;font-family:微软雅黑'>登录成功，欢迎使用，页面跳转中···</span>");
			 	}else{
			 		$this -> error("用户名或密码错误!");
			 	}
			 }
		}else{
			$this->error($u->getError());
		}
	}
}



