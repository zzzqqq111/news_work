<?php
/* Smarty version 3.1.30, created on 2017-07-17 03:46:28
  from "F:\wamp\wamp\www\ershouApp\template\index\updateMessage.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596c16f45550a2_79267304',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0b43cf5e19846809fa6f0de9e920e413de2ca63' => 
    array (
      0 => 'F:\\wamp\\wamp\\www\\ershouApp\\template\\index\\updateMessage.html',
      1 => 1500255508,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596c16f45550a2_79267304 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <?php echo '<script'; ?>
 src="<?php echo URL_PATH;?>
/static/js/rem.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo URL_PATH;?>
/static/js/jquery.js"><?php echo '</script'; ?>
>
</head>
<body>
<header >
    <a class="back" href="javascript:;"></a>
    <h1 class="mui-title">设置</h1>
</header>
<main>
    <div class="right" mid="<?php echo $_smarty_tpl->tpl_vars['mid']->value;?>
">
        <table class="table">
            <tr>
                <td>头像</td>
                <td>
                    <div class="photo"></div>
                </td>
            </tr>
            <tr>
                <td>昵称</td>
                <td>
                    <input type="text" class="nicheng" attr="nicheng" value="111111">
                </td>
            </tr>
            <tr>
                <td>用户名</td>
                <td>
                    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['mname']->value;?>
" name="mname" class="mname">
                </td>
            </tr>
            <tr>
                <td>修改密码</td>
                <td>
                    <input type="text" class="glyphicon glyphicon-pencil" value="" name="password">
                </td>
            </tr>
            <tr>
                <td>电话号码</td>
                <td>
                    <input type="text" class="telphone" attr="email" value="<?php echo $_smarty_tpl->tpl_vars['mphone']->value;?>
">
                </td>
            </tr>
            <tr>
                <td colspan="2"><button>确认修改</button></td>
            </tr>
        </table>
    </div>
    <div class="message"></div>
</main>
</body>
</html><?php }
}
