<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>test</title>
	<style type="text/css">
		body{margin: 0;padding: 0;font-size: 0.8em;font-family: 微软雅黑}
		#main{width: 400px;height: 400px;margin:0 auto;}
		#hang{margin:12px 0;}
	</style>
</head>
<body>
	<div id="main">
		<form action="/wenda/api.php/Personal/updatauserdata" method="post" enctype="multipart/form-data">
		<input type="hidden" name="uid" value="10">
		    <div id="hang">
		     <label>昵称</label>
			<input type="text" name="username"><br>
			</div>
			 <div id="hang">
			 <label>电话</label>
			<input type="tel" name="tel"><br>
			</div>
			 <div id="hang">
			 <label>电邮</label>
			<input type="text" name="email"><br>
			</div>
			 <div id="hang">
			 <label>头像</label>
			<input type="file" name="upic"><br><br>
			</div>
			<button type="submit">测试提交</button>

		</form>
	</div>
</body>
</html>