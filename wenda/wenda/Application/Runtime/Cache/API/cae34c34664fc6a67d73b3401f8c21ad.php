<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>uploadfile-test</title>
	<style type="text/css">
	    body{margin: 0;padding: 0;font-family: 微软雅黑;font-size: 0.8em}
		#main{width: 600px;height: 800px;margin: 0 auto;}
		#testform{width: 460px;height: auto;margin: 0 auto;margin-top: 22px}
		#testform form{margin-top: 22px}
		#testform form table{border: 1px solid #000000;width:400px;height: auto;}
		#testform form table input{margin:0 auto;width: 300px;height: auto;position: relative;top: 25%;margin: 0 12px}
		.testinput{height: 42px;width: 280px;float: left;}
		.testtext{width: 70px;height: 42px;text-align: center;line-height: 42px;}
	</style>
</head>
<body>
	<div id="main">
		<div id="testform"><label for="" style="font-size: 1.2em;font-family: inherit;">多文件上传测试</label>
		<!-- <form action="<?php echo U('Insert/addquestion');?>" method="POST" enctype="multipart/form-data"> -->
		<form action="<?php echo U('Question/deletequestion');?>" method="get">
		<table>
		   <tr>
				<td class="testtext">问题ID</td>
				<td class="testinput"><input type="text" name="qid"></td>
			</tr>
		  <!--   <tr class="testtr">
				<td class="testtext">UID</td>
				<td class="testinput"><input type="text" name="uid"></td>
			</tr>
			<tr class="testtr">
				<td class="testtext">描述</td>
				<td class="testinput"><input type="text" name="description"></td>
			</tr>
			<tr class="testtr">
				<td class="testtext">TID</td>
				<td class="testinput"><input type="text" name="tid"></td>
			</tr>
			<tr class="testtr">
				<td class="testtext">补充文本</td>
				<td class="testinput"><input type="text" name="textcontent"></td>
			</tr>
			<tr class="testtr">
				<td class="testtext">文件1</td>
				<td class="testinput"><input type="file" name="filename[]"></td>
			</tr>
			<tr>
				<td class="testtext">文件2</td>
				<td class="testinput"><input type="file" name="filename[]"></td>
			</tr>

			<tr>
				<td class="testtext">文件3</td>
				<td class="testinput"><input type="file" name="filename[]"></td>
			</tr>

			<tr>
				<td class="testtext">文件4</td>
				<td class="testinput"><input type="file" name="filename[]" ></td>
			</tr>
			
			<tr>
				<td class="testtext">文件5</td>
				<td class="testinput"><input type="file" name="filename[]" ></td>
			</tr> -->
			<tr>
				<td style="height:42px;width:auto;border-top: 1px solid #000000;text-align: right;padding-right: 12px" colspan="2" rowspan="1"><button type="submit" style="border-radius: 4px;background: #f0f0f0;">提交测试</button></td>
			</tr>
		</table>
		</form>
			</div>
	</div>
</body>
</html>