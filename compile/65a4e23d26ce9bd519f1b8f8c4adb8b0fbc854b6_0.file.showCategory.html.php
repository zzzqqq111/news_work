<?php
/* Smarty version 3.1.30, created on 2017-07-12 03:24:22
  from "E:\wamp\www\ershouApp\template\admin\showCategory.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59657a463d1e85_89563475',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '65a4e23d26ce9bd519f1b8f8c4adb8b0fbc854b6' => 
    array (
      0 => 'E:\\wamp\\www\\ershouApp\\template\\admin\\showCategory.html',
      1 => 1499821680,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59657a463d1e85_89563475 (Smarty_Internal_Template $_smarty_tpl) {
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
/base.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.min.css">
</head>
<body>
<form class="form-horizontal" method="post" action="index.php?m=admin&f=category&a=addCon">
    <div class="form-group">
        <div class="col-sm-10">
            <?php echo $_smarty_tpl->tpl_vars['str']->value;?>

        </div>
    </div>
</form>
</body>
</html><?php }
}
