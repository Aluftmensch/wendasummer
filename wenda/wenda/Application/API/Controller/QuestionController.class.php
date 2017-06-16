<?php
namespace API\Controller;
use Think\Controller;
header("Content-Type: text/json; charset=utf-8");
class QuestionController extends ResponseController{
    public function qlist(){
        if ($_SERVER['REQUEST_METHOD']=="POST") {
        $page = isset($_POST['page']) ? $_POST['page'] : 1;
        $pageSize = isset($_POST['pagesize']) ? $_POST['pagesize'] : 8;
        }else {
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $pageSize = isset($_GET['pagesize']) ? $_GET['pagesize'] : 8;
        }
        $offset = ($page - 1) * $pageSize;
        $q = D('Question');
        $qlistdata= $q-> relation(true)->order('qid desc')->limit($offset ." , ".$pageSize)->select();
        $jsondata = array('page' =>$page ,'question'=>$qlistdata );
        return ResponseController::wendajson($jsondata);
    }
    public function qdetail(){
        if ($_SERVER['REQUEST_METHOD']=="POST") {
             $qid = $_POST['qid'];
        }else{
             $qid = $_GET['qid'];
        }
        if ($qid!=NULL) {
        $q = D('Question');
        $data = $q -> relation(true) -> where("qid = ".$qid) -> find();
        $senddata = array("code"=>"1","qdetail"=>$data);
        return ResponseController::wendajson($senddata);
        }else{
        $senddata = array("code"=>"403","qdetail"=>"");
        return ResponseController::wendajson($senddata);
        }
    }
    public function deletequestion(){
        if ($_SERVER['REQUEST_METHOD']=="POST") {
            $qid = $_POST['qid'];
        }else{
            $qid = $_GET['qid'];
        }
        if ($qid!=NULL) {
            $f = M('Qadditional');
            if (0!=$f -> where("qid =".$qid) ->count()) {
                $filepath = './Public/questionimg/';
                $filedata = $f -> where("qid =".$qid) -> select();
                foreach ($filedata as $v) {
                if (false!=$f->where("fileid = ".$v['fileid'])->delete()) {
                      $delfile = $filepath.$v['filename'];
                      unlink($delfile);
                   }
                }
            }
            $q = M('Question');
            if (false!=$q -> where("qid =".$qid) -> delete()) {
                return ResponseController::resultjson("1","success");
            }else{
                return ResponseController::resultjson("0","failure");
            }
        }else{
                return ResponseController::resultjson("403","");
        }
    }
}