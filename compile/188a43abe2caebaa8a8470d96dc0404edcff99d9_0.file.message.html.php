<?php
/* Smarty version 3.1.30, created on 2017-08-12 08:17:33
  from "F:\wamp\wamp\www\ershouApp\template\index\message.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_598e9d7d1bb073_11339397',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '188a43abe2caebaa8a8470d96dc0404edcff99d9' => 
    array (
      0 => 'F:\\wamp\\wamp\\www\\ershouApp\\template\\index\\message.html',
      1 => 1502518651,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_598e9d7d1bb073_11339397 (Smarty_Internal_Template $_smarty_tpl) {
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
<style>
    header{
        width: 100%;
        height: 0.88rem;
        background: #1B71F0;
        position: relative;
        text-align: center;
        color: #ffffff;
        font-size: 0.25rem;
        line-height: 0.88rem;
    }
    .return{
        float: left;
        color: #ffffff;
        font-size: 0.3rem;
        text-align: center;
        font-family: 'iconfont';
        margin-left: 0.26rem;
    }
    .title{
        display: inline-block;
    }
    @font-face {
        font-family: 'iconfont';  /* project id 348180 */
        src: url('//at.alicdn.com/t/font_348180_wt82z0pt4ixgk3xr.eot');
        src: url('//at.alicdn.com/t/font_348180_wt82z0pt4ixgk3xr.eot?#iefix') format('embedded-opentype'),
        url('//at.alicdn.com/t/font_348180_wt82z0pt4ixgk3xr.woff') format('woff'),
        url('//at.alicdn.com/t/font_348180_wt82z0pt4ixgk3xr.ttf') format('truetype'),
        url('//at.alicdn.com/t/font_348180_wt82z0pt4ixgk3xr.svg#iconfont') format('svg');
    }
</style>
<body>
<header>
    <span class="return">&#xe658;</span>
    <span class="title">我的留言</span>

</header>
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
    $(".return").click(function () {
        history.go(-1);
    })
<?php echo '</script'; ?>
>
</html><?php }
}
