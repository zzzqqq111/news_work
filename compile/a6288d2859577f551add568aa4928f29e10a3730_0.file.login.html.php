<?php
/* Smarty version 3.1.30, created on 2017-07-22 08:23:51
  from "F:\wamp\www\ershouApp\template\admin\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5972ef77bcce75_20737207',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6288d2859577f551add568aa4928f29e10a3730' => 
    array (
      0 => 'F:\\wamp\\www\\ershouApp\\template\\admin\\login.html',
      1 => 1499915286,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5972ef77bcce75_20737207 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>登录</title>
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,
    	maximum-scale=1,user-scalable=no">
	<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>
/base.css">
	<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>
/login.css">
	<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/yidong.js"><?php echo '</script'; ?>
>
</head>
<body>
	<div class="background">
		<div class="mask">
			<form action="index.php?m=admin&f=login&a=check" method="post" class="box">
				<div class="uname-box">
					<input type="text" class="uname-txt" name="mname">
					<span class="uname">用户名</span>
					<span class="line">|</span>
				</div>
				<div class="upwd-box">
					<input type="text" class="uname-txt" name="mpass">
					<span class="uname">密码</span>
					<span class="line">|</span>
				</div>

				<div class="uyzm-box">
					<input type="text" class="uyzm-txt" name="code">
					<span class="uname">验证码</span>
					<img src="index.php?m=admin&f=login&a=code" alt="" style="width: 35%;height: 100%;cursor: pointer;position: absolute;top:0;right: 0;"  title="点击刷新验证码" onclick="this.src=this.src+'&code='+Math.random();" name="code">
				</div>

				<input type="submit" class="login-register login" value="登录">

			</form>
		</div>
	</div>
</body>
</html><?php }
}
