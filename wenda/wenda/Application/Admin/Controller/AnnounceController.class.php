<?php 
namespace Admin\Controller;
use Think\controller;
class AnnounceController extends BaseController{
	 public function announcelist(){
	 	$announce=M('announce');
	 	$count=$announce->count();
	 	$Page=new \Think\Page($count,2);//注意Page  一定要大写  否则则会失败
	 	$Page->setConfig('prev', '上一页');
        $Page->setConfig('next', '下一页');
	 	$show=$Page->show();
	 	//进行分页数据查询 注意limit方法的参数使用要使用Page类的属性（死的
        $list=$announce->order('createtime')->limit($Page->firstRow.', '.$Page->listRows)->select();
        //var_dump($list);
        $this->assign('list',$list);//赋值数据集
        // $this->page=$show;//赋值分页输出
        $this->assign('Page',$show);
        //var_dump($page);
        $this->display();
	 }
	 public function delannounce(){
	 	$aid=$_GET['aid'];//get方法后面跟的是方括号
	 	//var_dump($aid);
	 	//exit();
	 	$announce=M('announce');
	 	$result=$announce->where("aid=$aid")->delete();
	 	if($result){
	 		$data=1;//赋值是一个等于号
	 		$this->ajaxReturn($data);
	 	}
	 	else{
	 		$data=0;
	 		$this->ajaxReturn($data);
	 	}
	 }
	 public function updatestate(){
	 	$aid=$_GET['aid'];
	 	$announce=M('announce');
	 	$state=$announce->where("aid=$aid")->getField('state');
	 	if($state){
	 		//$date['state']=0;
	 		$announce->state=0;
	 		$result=$announce->where("aid=$aid")->save($date);
	 		if($result){
	 		$s=$announce->where("aid=$aid")->getField('state');
	 		$data=$s['state'];
	 		$this->ajaxReturn($data);
	 	    }
	 	    else{
            $data=2;
	 		$this->ajaxReturn($data);

	 	    }
	 		
	 	}
	 	else{
	 		$date['state']=1;
	 		$result=$announce->where("aid=$aid")->save($date);
	 	    if($result){
	 		$s=$announce->where("aid=$aid")->getField('state');
	 		$data=$s['state'];
	 		$this->ajaxReturn($data);
	 	    }
	 	    else{
	 	    $data=2;
	 		$this->ajaxReturn($data);

	 	 
	 	    }

	 	}

	}

	public function getdata(){
	 	$aid=$_POST['aid'];//get方法后面跟的是方括号
	 	//var_dump($aid);
	 	//exit();
	    $announce=M('announce');
	 	$tdata=$announce->where("aid=$aid")->find();
	 	//echo $announce->getLastSql();
	 	//echo json_encode($tdata);
	 	echo json_encode($tdata);
	 }
	 public function doingedit(){
		$a= M('announce');
		$aid = $_POST['aid'];
		$a->context = $_POST['context'];
		if (false!=$a->where("aid = $aid")->save()) {
			$mes = "修改成功！";
			echo json_encode($mes);
		}else{
			$mes = "错误！";
			echo json_encode($mes);

 }
}
	
	public function addannounce(){
		$this->display();
	}
	public function doingadd(){
		$a = M('announce');
	    $a->context=$_POST['context'];
	    /*// 取得成功上传的文件信息 
	    $info = $upload->upload(); 
	    // 保存当前数据对象 
	    $data['pic'] = $info[0]['savename']; 
	    var_dump($data['pic']);*/
		$a->createtime = array('exp','now()');
		if (false!=$a->add()) {
			$msg="添加成功！是否转到公告列表？";
			echo json_encode($msg);
		}else{
            $msg = "添加失败！";
            echo json_encode($msg);
		}	
	}
/*	public function upload(){
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->savePath  =      './Public/Admin/announce'; 
        // 设置附件上传目录
         // 上传单个文件 
        $info   =   $upload->uploadOne($_FILES['photo1']); 
        if(!$info) {
        // 上传错误提示错误信息
        $this->error($upload->getError());
          }
        else{
         // 上传成功 获取上传文件信息
        echo $info['savepath'].$info['savename'];
        } 
         }*/





}

 ?>
