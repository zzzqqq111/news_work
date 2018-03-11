<?php
/* Smarty version 3.1.30, created on 2017-08-12 09:08:54
  from "F:\wamp\wamp\www\ershouApp\template\index\success.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_598ea986f0c225_18414510',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b43e0ded74f75d980f8983a64c4900471124a389' => 
    array (
      0 => 'F:\\wamp\\wamp\\www\\ershouApp\\template\\index\\success.html',
      1 => 1502521731,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_598ea986f0c225_18414510 (Smarty_Internal_Template $_smarty_tpl) {
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
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/rem.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.js"><?php echo '</script'; ?>
>
</head>
<style>
    @font-face {
        font-family: 'iconfont';  /* project id 348180 */
        src: url('//at.alicdn.com/t/font_348180_wt82z0pt4ixgk3xr.eot');
        src: url('//at.alicdn.com/t/font_348180_wt82z0pt4ixgk3xr.eot?#iefix') format('embedded-opentype'),
        url('//at.alicdn.com/t/font_348180_wt82z0pt4ixgk3xr.woff') format('woff'),
        url('//at.alicdn.com/t/font_348180_wt82z0pt4ixgk3xr.ttf') format('truetype'),
        url('//at.alicdn.com/t/font_348180_wt82z0pt4ixgk3xr.svg#iconfont') format('svg');
    }
    .return{
        float: left;
        color: #ffffff;
        font-size: 0.4rem;
        text-align: center;
        font-family: 'iconfont';
    }
    main{
        width: 100%;
        height: 12.95rem;
        position: relative;
    }
    main img{
        width: 100%;
        height: 100%;
    }
    .return{
        float: left;
        color: #1894CD;
        font-size: 0.4rem;
        text-align: center;
        font-family: 'iconfont';
        position: absolute;
        top: 0.3rem;
        left: 0.3rem;
    }
</style>
<body>
    <main>
        <img src="<?php echo IMG_PATH;?>
/sucess.png" alt="">
        <div class="return">&#xe658;</div>
    </main>
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
