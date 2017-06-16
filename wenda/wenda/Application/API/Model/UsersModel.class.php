<?php
namespace API\Controller;
use Think\Model;
	class UsersModel extends Model{
		protected $_auto = array ( 
    // array('username','getName',1,'callback' ),
    // array('pwd','md5',1,'function') , // 对pwd字段在新增的时候使md5函数处理
    // array('email','getEmail',1,'callback'),
    array('regdate','getTime',1,'callback'),
 );	
 //    protected function getName(){
 //      $username=$_POST['username'];
 //      return $username;
 //    }
 //    protected function getEmail()
 //    {
 //    $email=$_POST['email'];
 //    return $email;
 //    }
    protected function getTime()
 {
  date_default_timezone_set('PRC');
  $regdate=date("Y-m-d H:i:s");
  return $regdate;
 }
	}
?>
