<?php
namespace API\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
       $this -> show("<body style='with:100%;height:100%;magin:0;padding:0'><div style='with:300px;height:200px;font-family:'宋体','微软雅黑''>欢迎使用</div></body>");
    }
}