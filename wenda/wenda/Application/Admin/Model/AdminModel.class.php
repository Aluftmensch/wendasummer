<?php
namespace Admin\Model;
use Think\Model;
/**
* 
*/
class AdminModel extends Model{
	  	protected $_validate=array(
	  	array('code','check_verify','验证码错误!',0,'callback',1),
	  	);
	   protected  function check_verify($code){
			$verify = new \Think\Verify();
			return $verify->check($code);
		}
	
}