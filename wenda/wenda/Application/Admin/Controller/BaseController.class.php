<?php
namespace Admin\Controller;
use Think\Controller;
class BaseController extends Controller {
	public function _initialize()
    {
        header("Content-type:text/html;charset=utf-8");
        $this->checkstate();
    }
    private function checkstate()
    {
       if(!isset($_SESSION['aid']) || $_SESSION['aid']==''){
                $this->error('您还没有登录！',U('Index/index'));
            }
    }
    public function at()
    {
        $localtime = date('Y-m-d H:i:s', time());
        return $localtime;
    }
}

