<?php
/* Smarty version 3.1.30, created on 2017-07-22 11:36:48
  from "F:\wamp\www\ershouApp\template\index\message.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59731cb0e6d950_56225230',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '48f831a6b53ae41dcf00a5922d4767b34b7540b7' => 
    array (
      0 => 'F:\\wamp\\www\\ershouApp\\template\\index\\message.html',
      1 => 1500716205,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59731cb0e6d950_56225230 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/rem.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/message.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/base.css">
</head>
<body>

<div class="main">
    <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        <li>
            <a href="">
                <div class="left">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
" alt="">
                </div>
                <div class="right">
                    <div class="info">
                        <span class="name"><?php echo $_smarty_tpl->tpl_vars['v']->value['lname'];?>
</span>
                        <span class="time"><?php echo $_smarty_tpl->tpl_vars['v']->value['time'];?>
</span>
                    </div>
                    <div class="con"><?php echo $_smarty_tpl->tpl_vars['v']->value['lcon'];?>
</div>
                </div>
            </a>
        </li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </ul>
</div>
</body>
<?php echo '<script'; ?>
>
<?php echo '</script'; ?>
>
</html><?php }
}
