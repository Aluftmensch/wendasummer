<?php
namespace Home\Controller;
use Think\Controller;
/**
* 公共模块
*/
class PublicController extends Controller
{
	 public function verify(){
		ob_clean();//清空缓存
		$Verify =     new \Think\Verify();
		$Verify->fontSize = 12;
		$Verify->length   = 2;
		$Verify->useNoise = false;
		$Verify->entry();
	}
}