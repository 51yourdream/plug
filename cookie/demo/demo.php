<?php
// if($_COOKIE['username']){
// 	header("location:../php/demo.php");
// }
var_dump($_COOKIE);
// echo $_COOKIE['username'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>jQuery.form.js 插件学习</title>
        <style>
			.margin-top-bottom{margin-bottom: 5px;margin-top: 5px}
			.padding-top-bottom{padding-top: 5px;padding-bottom: 5px}
			#output{color:red;}
        </style>
    </head>
    <body>
    <h2>cookie </h2>
    	<form action="../php/demo.php" method="get" id="form-id">
    		<div class="margin-top-bottom padding-top-bottom">
    			<label for="">用户名</label>
    			<input type="text" name="username" id="username">
    		</div>
    		<div class="margin-top-bottom padding-top-bottom">
    			<label for="">密码</label>
    			<input type="password" name="password" />
    		</div>
    		<div class="margin-top-bottom padding-top-bottom">
    			<input type="submit" value="登陆">
    			<input type="reset" value="重置">
    		</div>
    	</form>
    	<div id="output"></div>
		<script src="../js/jquery-2.1.4.min.js"></script> 
    	<script src="../js/jquery.cookie.js"></script>
    </body>
</html>
<script>
	$(function(){
		if($.cookie('username')){
			alert($.cookie('username'));
		}
	});
    $("#form-id").submit(function(){
    	if($("#username").val()){
    		$.cookie('username1',$("#username").val(), {expires: 7, path: '/'});
    	}
    });
    //$.cookie('下标建',"值",options); options 设置参数 options = {expires:7,path: '/'}
</script>
