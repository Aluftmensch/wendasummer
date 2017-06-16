<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>控制台-校内问答后台管理系统</title>
		<meta name="keywords" content="Bootstrap模版,Bootstrap模版下载,Bootstrap教程,Bootstrap中文" />
		<meta name="description" content="站长素材提供Bootstrap模版,Bootstrap教程,Bootstrap中文翻译等相关Bootstrap插件下载" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- basic styles -->
		<link href="/wenda/Public/Admin/assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="/wenda/Public/Admin/assets/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="/wenda/Public/Admin/assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!-- page specific plugin styles -->

		<!-- fonts -->

	
		<!-- ace styles -->

		<link rel="stylesheet" href="/wenda/Public/Admin/assets/css/ace.min.css" />
		<link rel="stylesheet" href="/wenda/Public/Admin/assets/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="/wenda/Public/Admin/assets/css/ace-skins.min.css" />

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="/wenda/Public/Admin/assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->

		<script src="/wenda/Public/Admin/assets/js/ace-extra.min.js"></script>

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="/wenda/Public/Admin/assets/js/html5shiv.js"></script>
		<script src="/wenda/Public/Admin/assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body>
		<div class="navbar navbar-default" id="navbar">
			<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>

			<div class="navbar-container" id="navbar-container">
				<div class="navbar-header pull-left">
					<a href="#" class="navbar-brand">
						<small>
							<i class="icon-leaf"></i>
							校内问答-后台管理系统
						</small>
					</a><!-- /.brand -->
				</div><!-- /.navbar-header -->

				<div class="navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						<li class="grey">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="icon-tasks"></i>
								<span class="badge badge-grey">4</span>
							</a>

							<ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="icon-ok"></i>
									还有4个任务完成
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">软件更新</span>
											<span class="pull-right">65%</span>
										</div>

										<div class="progress progress-mini ">
											<div style="width:65%" class="progress-bar "></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">硬件更新</span>
											<span class="pull-right">35%</span>
										</div>

										<div class="progress progress-mini ">
											<div style="width:35%" class="progress-bar progress-bar-danger"></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">单元测试</span>
											<span class="pull-right">15%</span>
										</div>

										<div class="progress progress-mini ">
											<div style="width:15%" class="progress-bar progress-bar-warning"></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">错误修复</span>
											<span class="pull-right">90%</span>
										</div>

										<div class="progress progress-mini progress-striped active">
											<div style="width:90%" class="progress-bar progress-bar-success"></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										查看任务详情
										<i class="icon-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="purple">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="icon-bell-alt icon-animated-bell"></i>
								<span class="badge badge-important">8</span>
							</a>

							<ul class="pull-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="icon-warning-sign"></i>
									8条通知
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-pink icon-comment"></i>
												新闻评论
											</span>
											<span class="pull-right badge badge-info">+12</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<i class="btn btn-xs btn-primary icon-user"></i>
										切换为编辑登录..
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-success icon-shopping-cart"></i>
												新订单
											</span>
											<span class="pull-right badge badge-success">+8</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-info icon-twitter"></i>
												粉丝
											</span>
											<span class="pull-right badge badge-info">+11</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										查看所有通知
										<i class="icon-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="green">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="icon-envelope icon-animated-vertical"></i>
								<span class="badge badge-success">5</span>
							</a>

							<ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="icon-envelope-alt"></i>
									5条消息
								</li>

								<li>
									<a href="#">
										<img src="/wenda/Public/Admin/assets/avatars/avatar.png" class="msg-photo" alt="Alex's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Alex:</span>
												不知道写啥 ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>1分钟以前</span>
											</span>
										</span>
									</a>
								</li>

								<li>
									<a href="#">
										<img src="/wenda/Public/Admin/assets/avatars/avatar3.png" class="msg-photo" alt="Susan's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Susan:</span>
												不知道翻译...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>20分钟以前</span>
											</span>
										</span>
									</a>
								</li>

								<li>
									<a href="#">
										<img src="/wenda/Public/Admin/assets/avatars/avatar4.png" class="msg-photo" alt="Bob's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Bob:</span>
												到底是不是英文 ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>下午3:15</span>
											</span>
										</span>
									</a>
								</li>

								<li>
									<a href="inbox.html">
										查看所有消息
										<i class="icon-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<!-- <img class="nav-user-photo" src="/wenda/Public/Upload/<?php echo ($_SESSION['admin']['photo']); ?>" alt="Jason's Photo" /> -->
								<span class="user-info">
									<small>欢迎光临,</small>
									<?php echo ($_SESSION['adminname']); ?>
								</span>

								<i class="icon-caret-down"></i>
							</a>

							<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="#">
										<i class="icon-cog"></i>
										设置
									</a>
								</li>

								<li>
									<a href="#">
										<i class="icon-user"></i>
										个人资料
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="<?php echo U('Login/logout');?>">
										<i class="icon-off"></i>
										退出
									</a>
								</li>
							</ul>
						</li>
					</ul><!-- /.ace-nav -->
				</div><!-- /.navbar-header -->
			</div><!-- /.container -->
		</div>

		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<div class="main-container-inner">
				<a class="menu-toggler" id="menu-toggler" href="#">
					<span class="menu-text"></span>
				</a>

				<div class="sidebar" id="sidebar">
					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
					</script>

					<div class="sidebar-shortcuts" id="sidebar-shortcuts">
						<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
							<button class="btn btn-success">
								<i class="icon-signal"></i>
							</button>

							<button class="btn btn-info">
								<i class="icon-pencil"></i>
							</button>

							<button class="btn btn-warning">
								<i class="icon-group"></i>
							</button>

							<button class="btn btn-danger">
								<i class="icon-cogs"></i>
							</button>
						</div>

						<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
							<span class="btn btn-success"></span>

							<span class="btn btn-info"></span>

							<span class="btn btn-warning"></span>

							<span class="btn btn-danger"></span>
						</div>
					</div><!-- #sidebar-shortcuts -->

					<ul class="nav nav-list">
							
						<li>
							<a href="<?php echo U('Welcome/index');?>" class="dropdown-toggle">
								<i class="icon-home"></i>
								<span class="menu-text"> 后台首页 </span>
							</a>
						</li>
						
						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-lock"></i>
								<span class="menu-text"> 权限管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="#">
										<i class="icon-double-angle-right"></i>
										管理员列表
									</a>
								</li>
								<li>
									<a href="#">
										<i class="icon-double-angle-right"></i>
										添加管理员
									</a>
								</li>
								
								
							</ul>
						</li>
						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-group"></i>
								<span class="menu-text"> 用户管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="<?php echo U('Users/userslist');?>">
										<i class="icon-double-angle-right"></i>
										用户列表
									</a>
								</li>

								<!-- <li>
									<a href="/wenda/admin.php/User/add.html">
										<i class="icon-double-angle-right"></i>
										添加用户
									</a>
								</li> -->
							</ul>
						</li>

						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-list"></i>
								<span class="menu-text"> 类型管理</span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="<?php echo U('Type/typelist');?>">
										<i class="icon-double-angle-right"></i>
										类型列表
									</a>
								</li>
										
								<li>
									<a href="<?php echo U('Type/add');?>">
										<i class="icon-double-angle-right"></i>
										添加分类
									</a>
								</li>
										
								</ul>
						</li>
						<script type="text/javascript">
							function teach() {
								window.location.href="<?php echo U('Users/teacherlist');?>";
								// body...
							}
						</script>
						
					
						
						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-user"></i>
								<span class="menu-text"> 讲师管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="javascript:teach()">
										<i class="icon-double-angle-right"></i>
										讲师列表
									</a>
								</li>

								<li>
									<a href="#">
										<i class="icon-double-angle-right"></i>
										添加讲师
									</a>
								</li>
							</ul>
						</li>
							
						<!-- <li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-list-alt"></i>
								<span class="menu-text"> 目录管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="/wenda/admin.php/Course/index.html">
										<i class="icon-double-angle-right"></i>
										目录列表
									</a>
								</li>

								<li>
									<a href="/wenda/admin.php/Course/add.html">
										<i class="icon-double-angle-right"></i>
										添加目录
									</a>
								</li>
							</ul>
						</li> -->
						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-file"></i>
								<span class="menu-text"> 新闻管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>
							<ul class="submenu">
								<li>
									<a href="#">
										<i class="icon-double-angle-right"></i>
										新闻列表
									</a>
								</li>

								<li>
									<a href="#">
										<i class="icon-double-angle-right"></i>
										添加新闻
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-bullhorn"></i>
								<span class="menu-text"> 广告管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>
							<ul class="submenu">
								<li>
									<a href="#">
										<i class="icon-double-angle-right"></i>
										广告列表
									</a>
								</li>
								<li>
									<a href="#">
										<i class="icon-double-angle-right"></i>
										添加广告
									</a>
								</li>
							</ul>
						</li>					
						
	
						
						
						
						
						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-credit-card"></i>
								<span class="menu-text"> 公告管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>
							<ul class="submenu">
								<li>
									<a href="<?php echo U('Announce/announcelist');?>">
										<i class="icon-double-angle-right"></i>
										公告列表
									</a>
								</li>
								<li>
									<a href="#">
										<i class="icon-double-angle-right"></i>
										添加公告
									</a>
								</li>
							</ul>
						</li>

			
					</ul><!-- /.nav-list -->

					<div class="sidebar-collapse" id="sidebar-collapse">
						<i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
					</div>

					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
					</script>
				</div>

			



			

			

<div class="main-content">
					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						<ul class="breadcrumb">
							<li>
								<i class="icon-home home-icon"></i>
								<a href="<?php echo U('Welcome/index');?>">后台主页</a>
							</li>

							<li>
								<a href="#">用户管理</a>
							</li>
							<li class="active">用户列表</li>
						</ul><!-- .breadcrumb -->

					</div>

					<div class="page-content">
						<div class="page-header">
							<h1>
								用户管理
								<small>
									<i class="icon-double-angle-right"></i>
									用户列表
								</small>
							</h1>
						</div><!-- /.page-header -->
				
						
							<div class="seachform" >
							<input name="search" type="search" results=s placeholder="请输入邮箱名或用户名或联系电话" class="scinput" style="min-width: 250px" />
							&nbsp;&nbsp;&nbsp;<input type="submit" class="btn btn-primary btn-xs"  value="查询"/>
							</div>
						<div><br/></div>
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="row">
									<div class="col-xs-12">
										
										<div class="table-header">
											&nbsp;
										</div>

										<div class="table-responsive">
											<table id="sample-table-2" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th class="center">
														用户名
														</th>
														<th>电话</th>
														<th>邮箱</th>
												

														<th>
															身份
														</th>
													

														<th>操作</th>
													</tr>
												</thead>
									
									<?php if(is_array($users)): $i = 0; $__LIST__ = $users;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$u): $mod = ($i % 2 );++$i;?><tbody >
													<tr>
														<td align="center" >
															<?php echo ($u["username"]); ?>
														</td>

														<td>
														<?php echo ($u["tel"]); ?>
														</td>
														<td><?php echo ($u["email"]); ?></td>
								
														<td><?php if(($u["identity"] == 0)): ?>学生<?php else: ?>教师<?php endif; ?></td>

														<td class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
																<a class="blue" href="/wenda/admin.php/Users/detail/id/<?php echo ($u["uid"]); ?>">
																	<i class="icon-zoom-in bigger-130">
																    查看
																	</i>	
																</a>

																<a class="green"  href="javascript:;" id="<?php echo ($u["uid"]); ?>">
																	<i class="icon-pencil bigger-130">重置密码</i>	
																</a>
																<a class="red" href="#" id="<?php echo ($u["uid"]); ?>">
																	<i class="icon-trash bigger-130">删除</i>
																</a>
															</td>
													</tr>
												</tbody><?php endforeach; endif; else: echo "" ;endif; ?>
											<tr>
												<td colspan="6"><div class="yahoo2"><?php echo ($page); ?></div></td>
											</tr>
											</table>
											
										
										</div>
									</div>
								</div>
<script type="text/javascript" src="/wenda/Public/jquery.min.js"></script>
<script type="text/javascript">
$(function(){
    $("input[type='submit']").click(function(){
			var s = $("input[name='search']").val();
			s = $.trim(s);
			if (s!='') {
				$("#sample-table-2>tbody").remove();
				$.ajax({
				url:"/wenda/admin.php/Users/search",
				data:{'s':s}, 
				type:"POST",
				dataType:"json",
				success:function(date){		
                   	var msg = eval(date.uda);
                    var html = "";
                    //alert(date.info);
                     //$.each(msg,function(){
                     	if (date.info!=0) {
                     	    for (var i in msg) { 
                     	    	html+="<tbody id='"+msg[i].uid+"'>";
                     	    	html+="<tr >";
                    	        html+="<td align='center'>"+msg[i].username+"</td>";
                    	        html+="<td>"+msg[i].tel+"</td>";
                    	        html+="<td>"+msg[i].email+"</td>";
                    	        if (msg[i].identity==0) {
                    	        	 html+="<td>学生</td>";
                    	        }else{
                    	        	 html+="<td>教师</td>";
                    	        }
                    	        html+="<td><a class='blue' href='/wenda/admin.php/Users/detail/id/"+msg[i].uid+"'><i class='icon-zoom-in bigger-130'>查看</i></a><a class='green' onclick='sreset("+msg[i].uid+")' href='#' id='"+msg[i].uid+"'><i class='icon-pencil bigger-130'>重置密码</i></a><a class='red' onclick='sdelusers("+msg[i].uid+")' href='#' id='"+msg[i].uid+"'><i class='icon-trash bigger-130'>删除</i></a></td>";
                    	        html+="</tr>";
                    	        html+="</tbody>";
                                        }
                               $("#sample-table-2>thead").after(html);
                     	}else{
                    $("#sample-table-2").after("<p id='message' style='color:#000000;font-family:微软雅黑'>无相关数据</p>");
                     	}
					//})      
				},
				error:function(er){
				BackErr(er);}
			});
			 return false;   
			}  
		});
    $(".red").click(function(){
		var id = $(this).attr("id");
		var commentContainer = $(this).parent().parent();   
		if (confirm('你确定要删除吗？')){
				$.ajax({
					url:"/wenda/admin.php/Users/delusers",
					data:{'uid':id}, 
					type:"GET",
					dataType:"json",
					success:function(date){
						if (date==1) {
                         commentContainer.remove();
						}else{
							alert("错误！");
						}
					}
				});
			 return false;   
		}
	});
	$(".green").click(function(){
		var id = $(this).attr("id");
		if (confirm('您确定要重置该用户密码吗？')){
				$.ajax({
					url:"/wenda/admin.php/Users/reset",
					data:{'uid':id}, 
					type:"GET",
					dataType:"json",
					success:function(date){
						if (date==1) {
							alert("密码已经重置为初始密码123456！");
						}else{
							alert("错误！");
						}
					}
				});
			return false;   
		}
	});				
});
function sdelusers(y){
	var id = y;
	//var id = $(this).attr("id");
	//var commentContainer = $(this).parent().parent().parent();   
	if (confirm('你确定要删除吗？')){
	$.ajax({
		url:"/wenda/admin.php/Users/delusers",
		data:{'uid':id}, 
		type:"GET",
		dataType:"json",
		success:function(date){
			if (date==1) {
		     var sy = document.getElementById(y);
		     sy.remove();
            // commentContainer.slideUp('slow', function() {$(this).remove();});
			}else{
				alert("错误！");
			}
		}
	});
	 return false;   
    }

}
function sreset(i){
	var id = i;
	//var id = $(this).attr("id");
	//var t = $(".green").attr('id');
	//alert(id);
	if (confirm('您确定要重置该用户密码吗？')){

		$.ajax({
			url:"/wenda/admin.php/Users/reset",
			data:{'uid':id}, 
			type:"GET",
			dataType:"json",
			success:function(date){
				if (date==1) {
					alert("密码已经重置为初始密码123456！");
				}else{
					alert("错误！");
				}
				}
		});
	return false;   
    }
}
</script>
								<!-- onclick="if (confirm('你确定要删除吗？')) {del(id='<?php echo ($u["uid"]); ?>')} " -->
<!-- <script type="text/javascript">
	function del(id) {
		$.ajax({
				url:"/wenda/admin.php/Users/delusers",
				data:{'uid':id}, 
				type:"GET",
				dataType:"json",
				success:function(date){
                  alert(date);
                   
				}
			});
		 return false;   
	}
</script> -->
							
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div><!-- /.main-content -->


<style type="text/css">
DIV.yahoo2 {
  PADDING-RIGHT: 3px; PADDING-LEFT: 3px; FONT-SIZE: 0.85em; PADDING-BOTTOM: 3px; MARGIN: 3px; PADDING-TOP: 3px; 
  FONT-FAMILY: Tahoma,Helvetica,sans-serif; text-indent: 22px
}
DIV.yahoo2 A {
BORDER-RIGHT: #ccdbe4 1px solid; PADDING-RIGHT: 8px; BACKGROUND-POSITION: 50% bottom; BORDER-TOP: #ccdbe4 1px solid; 
PADDING-LEFT: 8px; PADDING-BOTTOM: 2px; BORDER-LEFT: #ccdbe4 1px solid; COLOR: #0061de; MARGIN-RIGHT: 3px; PADDING-TOP: 2px; 
BORDER-BOTTOM: #ccdbe4 1px solid; TEXT-DECORATION: none
}
DIV.yahoo2 A:hover {
BORDER-RIGHT: #2b55af 1px solid; BORDER-TOP: #2b55af 1px solid; BACKGROUND-IMAGE: none; BORDER-LEFT: #2b55af 1px solid;
COLOR: #fff; BORDER-BOTTOM: #2b55af 1px solid; BACKGROUND-COLOR: #3666d4
}
DIV.yahoo2 A:active {
BORDER-RIGHT: #2b55af 1px solid; BORDER-TOP: #2b55af 1px solid; BACKGROUND-IMAGE: none; BORDER-LEFT: #2b55af 1px solid;
COLOR: #fff; BORDER-BOTTOM: #2b55af 1px solid; BACKGROUND-COLOR: #3666d4
}
DIV.yahoo2 SPAN.current {
PADDING-RIGHT: 6px; PADDING-LEFT: 6px; FONT-WEIGHT: bold; PADDING-BOTTOM: 2px; COLOR: #000; MARGIN-RIGHT: 3px; PADDING-TOP: 2px
}
DIV.yahoo2 SPAN.disabled {
DISPLAY: none
}
DIV.yahoo2 A.next {
BORDER-RIGHT: #ccdbe4 2px solid; BORDER-TOP: #ccdbe4 2px solid; MARGIN: 0px 0px 0px 10px; BORDER-LEFT: #ccdbe4 2px solid; 
BORDER-BOTTOM: #ccdbe4 2px solid
}
DIV.yahoo2 A.next:hover {
BORDER-RIGHT: #2b55af 2px solid; BORDER-TOP: #2b55af 2px solid; BORDER-LEFT: #2b55af 2px solid; BORDER-BOTTOM: #2b55af 2px 
solid;
}
DIV.yahoo2 A.prev {
BORDER-RIGHT: #ccdbe4 2px solid; BORDER-TOP: #ccdbe4 2px solid; MARGIN: 0px 10px 0px 0px; BORDER-LEFT: #ccdbe4 2px solid; 
BORDER-BOTTOM: #ccdbe4 2px solid
}
DIV.yahoo2 A.prev:hover {
BORDER-RIGHT: #2b55af 2px solid; BORDER-TOP: #2b55af 2px solid; BORDER-LEFT: #2b55af 2px solid; BORDER-BOTTOM: #2b55af 2px 
solid
}
</style>
	<div class="ace-settings-container" id="ace-settings-container">
					<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
						<i class="icon-cog bigger-150"></i>
					</div>

					<div class="ace-settings-box" id="ace-settings-box">
						<div>
							<div class="pull-left">
								<select id="skin-colorpicker" class="hide">
									<option data-skin="default" value="#438EB9">#438EB9</option>
									<option data-skin="skin-1" value="#222A2D">#222A2D</option>
									<option data-skin="skin-2" value="#C6487E">#C6487E</option>
									<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
								</select>
							</div>
							<span>&nbsp; 选择皮肤</span>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar" />
							<label class="lbl" for="ace-settings-navbar"> 固定导航条</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
							<label class="lbl" for="ace-settings-sidebar"> 固定滑动条</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" />
							<label class="lbl" for="ace-settings-breadcrumbs">固定面包屑</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />
							<label class="lbl" for="ace-settings-rtl">切换到左边</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" />
							<label class="lbl" for="ace-settings-add-container">
								切换窄屏
								<b></b>
							</label>
						</div>
					</div>
				</div><!-- /#ace-settings-container -->
			</div><!-- /.main-container-inner -->

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="icon-double-angle-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->

		<!--<script src="/wenda/Public/Admin/assets/js/jquery-2.0.3.min.js"></script>-->
		<script src="/wenda/Public/Admin/assets/js/jquery-2.0.3.min.js"></script>
		

		<!-- <![endif]-->

		<!--[if IE]>
<script src="/wenda/Public/Admin/assets/js/jquery-1.10.2.min.js"></script>
<![endif]-->

		<!--[if !IE]> -->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='/wenda/Public/Admin/assets/js/jquery-2.0.3.min.js'>"+"<"+"script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='/wenda/Public/Admin/assets/js/jquery-1.10.2.min.js'>"+"<"+"script>");
</script>
<![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='/wenda/Public/Admin/assets/js/jquery.mobile.custom.min.js'>"+"<"+"script>");
		</script>
		<script src="/wenda/Public/Admin/assets/js/bootstrap.min.js"></script>
		<script src="/wenda/Public/Admin/assets/js/typeahead-bs2.min.js"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="/wenda/Public/Admin/assets/js/excanvas.min.js"></script>
		<![endif]-->

		<script src="/wenda/Public/Admin/assets/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="/wenda/Public/Admin/assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="/wenda/Public/Admin/assets/js/jquery.slimscroll.min.js"></script>
		<script src="/wenda/Public/Admin/assets/js/jquery.easy-pie-chart.min.js"></script>
		<script src="/wenda/Public/Admin/assets/js/jquery.sparkline.min.js"></script>
		<!-- <script src="/wenda/Public/Admin/assets/js/flot/jquery.flot.min.js"></script>
		<script src="/wenda/Public/Admin/assets/js/flot/jquery.flot.pie.min.js"></script>
		<script src="/wenda/Public/Admin/assets/js/flot/jquery.flot.resize.min.js"></script> -->

		<!-- ace scripts -->

		<script src="/wenda/Public/Admin/assets/js/ace-elements.min.js"></script>
		<script src="/wenda/Public/Admin/assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->

		<script type="text/javascript">
			jQuery(function($) {
				$('.easy-pie-chart.percentage').each(function(){
					var $box = $(this).closest('.infobox');
					var barColor = $(this).data('color') || (!$box.hasClass('infobox-dark') ? $box.css('color') : 'rgba(255,255,255,0.95)');
					var trackColor = barColor == 'rgba(255,255,255,0.95)' ? 'rgba(255,255,255,0.25)' : '#E2E2E2';
					var size = parseInt($(this).data('size')) || 50;
					$(this).easyPieChart({
						barColor: barColor,
						trackColor: trackColor,
						scaleColor: false,
						lineCap: 'butt',
						lineWidth: parseInt(size/10),
						animate: /msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase()) ? false : 1000,
						size: size
					});
				})
			
				$('.sparkline').each(function(){
					var $box = $(this).closest('.infobox');
					var barColor = !$box.hasClass('infobox-dark') ? $box.css('color') : '#FFF';
					$(this).sparkline('html', {tagValuesAttribute:'data-values', type: 'bar', barColor: barColor , chartRangeMin:$(this).data('min') || 0} );
				});
			
			
			
			
			 
			
			
			
			
			
			
			
			
				var d1 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.5) {
					d1.push([i, Math.sin(i)]);
				}
			
				var d2 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.5) {
					d2.push([i, Math.cos(i)]);
				}
			
				var d3 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.2) {
					d3.push([i, Math.tan(i)]);
				}
				
			
			
				$('#recent-box [data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('.tab-content')
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $source.offset();
					var w2 = $source.width();
			
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
			
			
				$('.dialogs,.comments').slimScroll({
					height: '300px'
			    });
				
				
				//Android's default browser somehow is confused when tapping on label which will lead to dragging the task
				//so disable dragging when clicking on label
				var agent = navigator.userAgent.toLowerCase();
				if("ontouchstart" in document && /applewebkit/.test(agent) && /android/.test(agent))
				  $('#tasks').on('touchstart', function(e){
					var li = $(e.target).closest('#tasks li');
					if(li.length == 0)return;
					var label = li.find('label.inline').get(0);
					if(label == e.target || $.contains(label, e.target)) e.stopImmediatePropagation() ;
				});
			
			
				$('#tasks').disableSelection();
				$('#tasks input:checkbox').removeAttr('checked').on('click', function(){
					if(this.checked) $(this).closest('li').addClass('selected');
					else $(this).closest('li').removeClass('selected');
				});
				
			
			})
		</script>
	</body>
</html>