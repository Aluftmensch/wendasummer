<?php
namespace Home\Model;
use Think\Model;
/**
* 自动验证
*/
class UsersModel extends Model
{
	 protected $_validate=array(
	  	array('code','check_verify','验证码错误!',0,'callback',3)
	  	);
	   protected  function check_verify($code){
			$verify = new \Think\Verify();
			return $verify->check($code);
		}

	
}
