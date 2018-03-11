<?php
/* Smarty version 3.1.30, created on 2017-07-11 12:51:59
  from "E:\wamp\www\ershouApp\template\admin\editUser.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5964adcfcb8c78_76418615',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c754bacc20f76e4c24f2d9a6b7bdfac0fbe1018b' => 
    array (
      0 => 'E:\\wamp\\www\\ershouApp\\template\\admin\\editUser.html',
      1 => 1499770316,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5964adcfcb8c78_76418615 (Smarty_Internal_Template $_smarty_tpl) {
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
<form action="index.php?m=admin&f=user&a=editUser" method="post">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    <input type="hidden" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['mid'];?>
" name="uid">
    <div class="form-group">
        <label>用户名</label>
        <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['mname'];?>
" name="uname">
    </div>
    <div class="form-group">
        <label>密码</label>
        <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['mpass'];?>
" name="upass">
    </div>
    <div class="form-group">
        <label>电话</label>
        <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['mphone'];?>
" name="uphone">
    </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    <button type="submit" class="btn btn-default">编辑</button>
</form>

</body>
</html><?php }
}
