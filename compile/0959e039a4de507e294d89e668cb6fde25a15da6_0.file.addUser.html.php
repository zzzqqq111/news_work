<?php
/* Smarty version 3.1.30, created on 2017-07-11 12:10:15
  from "E:\wamp\www\ershouApp\template\admin\addUser.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5964a4079b9e39_83906919',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0959e039a4de507e294d89e668cb6fde25a15da6' => 
    array (
      0 => 'E:\\wamp\\www\\ershouApp\\template\\admin\\addUser.html',
      1 => 1499767812,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5964a4079b9e39_83906919 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.min.css">
</head>
<body>
<form class="form-horizontal" method="post" action="index.php?m=admin&f=user&a=addCon">

    <div class="form-group">
        <label class="col-sm-2 control-label">用户名</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="username" name="uname">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">密码</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" placeholder="Password" name="upass">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">电话</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Telphone" name="uphone">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">添加用户</button>
        </div>
    </div>
</form>
</body>
</html><?php }
}
