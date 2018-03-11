<?php
/* Smarty version 3.1.30, created on 2017-08-12 10:57:42
  from "F:\wamp\wamp\www\ershouApp\template\index\sousuo-fail.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_598ec3066e7932_88733080',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c513b7e03f1d9695fb8580195b5cd733ad135a7' => 
    array (
      0 => 'F:\\wamp\\wamp\\www\\ershouApp\\template\\index\\sousuo-fail.html',
      1 => 1502528260,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_598ec3066e7932_88733080 (Smarty_Internal_Template $_smarty_tpl) {
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
/ss.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/base.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/yidong.js"><?php echo '</script'; ?>
>
</head>
<body style="background: #F5F5F5;">
<header>
    <span class="title">搜索与查找<br>SEARCH AND FIND </span>
    <span class="return">&#xe658;</span>
    <span class="return jingque">&#xe61d;</span>
    <form action="index.php?m=index&f=search&a=selectByKey" method="post" class="ss">
        <div class="ss-title">
            <span>Title</span>
            <span class="dash"></span>
            <input type="text" placeholder="Please find here" class="" name="keywords">
        </div>
        <input type="submit" class="iconfont paizhao" vaule="搜索">
    </form>
</header>
<main>
    <!--搜索失败-->
    <div class="fail-result">
        <div class="resultset" style="background:#F5F5F5;color: red">
            <div>SORRY...</div>
            <div>很遗憾，未能找到查找的内容，你可以相关的内容查找</div>
        </div>
        <div class="success-result">
            <div class="fenlei">
                <div class="fenlei-ss relative-word"></div>
                <div class="down"></div>
            </div>
            <ul class="hotwords">
                <li>
                    <a href="">
                        手机
                    </a>
                </li>
                <li>
                    <a href="">
                        时尚数码
                    </a>
                </li>
                <li>
                    <a href="">
                        实用的迷你数码
                    </a>
                </li>
                <li>
                    <a href="">
                        数码
                    </a>
                </li>
                <li>
                    <a href="">
                        迷你
                    </a>
                </li>
            </ul>
            <div class="fenlei">
                <div class="fenlei-ss relative-result"></div>
            </div>
            <ul class="list">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rrrr']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                <li>
                    <div class="left">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['img'];?>
" alt="">
                    </div>
                    <div class="right">
                        <div class="right-top">
                            <span class="piease">PIEASE FIND HERE <span style="color: #545A68;">PLE HAVE</span></span>
                            <div class="new">NEW</div>
                        </div>
                        <span class="dss"><?php echo $_smarty_tpl->tpl_vars['v']->value['info'];?>
</span>
                        <ul class="little-dot">
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                        <ul class="star-num">
                            <li>
                                <div class="left-star"></div>
                                <div class="left-num">1,263,709</div>
                            </li>
                        </ul>
                    </div>
                </li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </ul>
        </div>
    </div>
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
