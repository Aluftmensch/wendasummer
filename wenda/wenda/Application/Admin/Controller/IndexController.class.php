<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
      $this->display();
    }
	 public function verify()
	{
	ob_clean();//清空缓存
	$Verify =     new \Think\Verify();
	$Verify->fontSize = 12;
	$Verify->length   = 2;
	$Verify->useNoise = false;
	$Verify->entry();
	}
    

}