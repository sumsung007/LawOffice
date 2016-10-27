<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="zh">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>demo2</title>
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/styles2.css">
</head>
<body>
<div class="wrapper">
	<div class="container">
		<h1>律师事务所信息管理系统</h1>
		<h2>欢迎您注册</h2>
		<form id="test" onSubmit="return validate()" action="<?php echo U(GROUP_NAME . '/Register/register');?>" method="post">
        <!-- onSubmit="return validate()" -->
			 <input type="text" name="Name" id="name"  onChange='check("name")' placeholder="用户名">
            <span id="nameCheck" class="check" hidden="true">*请输入4至16位的用户名</span>
            
            
			<input type="text" name="realname" id="realname" onChange='check("realname")'  placeholder="真实姓名" >
            <span id="realnameCheck" class="check" hidden="true" >*真实姓名为必填项</span>
            
            <input type="text" name="visa" id="visa" onChange='check("visa")' placeholder="证件号" >
            <span id="visaCheck" class="check" hidden="true">*请正确输入您的证件号</span>
            
           <input type="password" name="Password" id="password"  onChange='check("password")' placeholder="注册密码">
           
            <span id="passwordCheck" class="check" hidden="true">*密码由6至16位数字或字母组成</span>
            
            <input type="password" name="cpassword" id="cpassword" onChange='check("cpassword")' placeholder="确认密码">
            <span id="cpasswordCheck" class="check" hidden="true">*请注意两次密码输入是否一致！</span>
            
            
            <input type="tel" name="phonenum" id="phonenum" onChange='check("phonenumber")'  placeholder="联系方式">
            <span id="phonenumCheck" class="check" hidden="true">电话号码不能为非数字字符</span>
            <input type="text" name="Idnumber"  id="Idnumber" onChange='check("Idnumber")' placeholder="身份证号">
            <span id="IdnumberCheck" class="check" hidden="true">请输入正确的身份证号</span>
            <input  type="email" name="email" id="email" onChange='check(this.id)'  placeholder="常用邮箱">
            <span id="emailCheck" class="check" hidden="true">*电子邮件格式不正确！</span>
            
			<button type="submit" name="submit" >确认注册</button>
		</form>
	</div><!--container-->
	 
	<ul class="bg-bubbles">
    
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	  <li></li>
		<p>&nbsp;</p>
		<li></li>
	</ul>
	
</div>

<script type="text/javascript" src="__PUBLIC__/js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/load.js"></script>
<!--<script type="text/javascript" src="js/registerCheck.js"></script>-->
<!--<script type="text/javascript">
$('#login-button').click(function(event){
	event.preventDefault();
	$('form').fadeOut(500);
	$('.wrapper').addClass('form-success');
});
</script>-->
</body>
</html>