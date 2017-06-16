<?php
namespace Home\Controller;
use Think\Controller;
/**
* 处理注册
*/
class RegController extends Controller
{
	public function doreg(){
		$u = D('Users');
		if ($u->create()) {
			echo "小强可爱极了!!!!!!!!!";
		}else{
			$this -> error($u -> getError());
		}
	}
}