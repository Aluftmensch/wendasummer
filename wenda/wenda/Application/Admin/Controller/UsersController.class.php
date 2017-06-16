<?php
namespace Admin\Controller;
use Think\Controller;
class UsersController extends BaseController {
	public function userslist(){
    $user = M("Users");
	$count = $user -> where("identity = 0") -> count();
	$Page = new \Think\Page($count,4);
	$Page->setConfig('prev', '上一页');
    $Page->setConfig('next', '下一页');
	$show = $Page -> show();
	$data = $user ->where("identity = 0") -> order("uid DESC") -> limit($Page ->firstRow.','.$Page ->listRows) -> select();
	$this -> assign("page",$show);
	$this-> assign("users",$data);
	$this -> display();
	}   
	public function delusers(){
		$uid = $_GET['uid'];
		$u = M('Users');
		$upic = $u -> field('upic') -> where("uid=$uid") ->find();
		if ($upic['upic']!='default.jpg') {
		$upath = './Public/userphoto/';
        $ufile=$upath.$upic['upic'];
        unlink($ufile);
		}
		$result = $u -> where("uid=$uid") -> delete();
		if ($result) {
			$data = "1";
			$this -> ajaxReturn($data);
		}else{
			$data = "0";
			$this -> ajaxReturn($data);
		}
	}
	public function reset(){
		$uid=$_GET['uid'];
		$u=M('Users');	
		$u->pwd=md5('123456');
		if(false!==$u->where("uid=$uid")->save()){
			$data = "1";
			$this -> ajaxReturn($data);
		}else{
			$data = "0";
			$this -> ajaxReturn($data);
		}		
    }
    public function detail(){
    	$uid = $_GET['id'];
    	$u = M('Users');
    	$ud = $u -> where("uid = $uid") -> find();
    	$this->assign("ud",$ud);
    	$this->display();
    }
    public function search(){
    	$search = $_POST['s'];
    	$date['username|email|tel'] = array('like',"%$search%");
    	$u = M('Users');
    	$result = $u -> where($date) -> select();
    	if (!empty($result)) {
    		$ud = array('info'=>1,'uda'=>$result);
    		echo json_encode($ud);
    	}else{
    		$ud = array('info'=>0);
    		echo json_encode($ud);
    	}
    }
    public function teacherlist(){
		$user = M("Users");
		$count = $user -> where("identity = 1") -> count();
		$Page = new \Think\Page($count,1);
		$Page->setConfig('prev', '上一页');
		$Page->setConfig('next', '下一页');
		$show = $Page -> show();
		$tdata = $user -> where("identity = 1") -> order("uid DESC") -> limit($Page ->firstRow.','.$Page ->listRows) -> select();
		$this -> assign("page",$show);
		$this -> assign("tusers",$tdata);
		 $this -> display();
    }
    public function gettdata(){
    	 $user = M("Users");
    	 $page = isset($_POST['page']) ? $_POST['page'] : 1;
		 $pageSize = 1;
		 $offset = ($page - 1) * $pageSize;
		 $tdata = $user -> where("identity = 1") -> order("uid DESC") -> limit($offset ." , ".$pageSize) -> select();
		 echo json_encode($tdata);

    }
}
