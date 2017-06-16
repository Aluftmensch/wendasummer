<?php
namespace Admin\Controller;
use Think\Controller;
class TypeController extends BaseController {
	public function typelist(){
		$t = M('firsttype');
		$count = $t -> count();
		$Page = new \Think\Page($count,4);
		$Page->setConfig('prev', '上一页');
        $Page->setConfig('next', '下一页');
        $show = $Page -> show();
		$data = $t ->order("tid DESC") -> limit($Page ->firstRow.','.$Page ->listRows) -> select();
		$this -> assign("page",$show);
		$this-> assign("type",$data);
		$this -> display();
	}
	public function add(){
		$this -> display();
	}
	public function doingadd(){
		$t = M('firsttype');
		$t->sname = $_POST['typename'];
		$t->addtime = array('exp','now()');
		if (false!=$t->add()) {
			$msg="添加成功！是否转到类型列表？";
			echo json_encode($msg);
		}else{
            $msg = "添加失败！";
            echo json_encode($msg);
		}	
	}
	public function deltype(){
		$tid = $_GET['tid'];
		$t = M('firsttype');
		$result = $t -> where("stid = $tid") -> delete();
		if ($result) {
			$data = "1";
			$this -> ajaxReturn($data);
		}else{
			$data = "0";
			$this -> ajaxReturn($data);
		}
	}
	public function getdata(){
		$tid = $_POST['tid'];
		$t = M('firsttype');
		$tdata = $t -> where("stid = $tid") -> find();
		if (!empty($tdata)) {
			echo json_encode($tdata);
		}else{
			$tdata = "1";
			echo json_encode($tdata);
		}
	}
	public function doingedit(){
		$t = M('firsttype');
		$tid = $_POST['tid'];
		$t->sname = $_POST['typename'];
		if (false!=$t->where("stid = $tid")->save()) {
			$mes = "修改成功！";
			echo json_encode($mes);
		}else{
			$mes = "错误！";
			echo json_encode($mes);
		}	
	}
}