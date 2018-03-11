<?php
/* Smarty version 3.1.30, created on 2017-07-13 17:06:46
  from "F:\wamp\wamp\www\ershouApp\template\index\list.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59678c866c76d3_73921459',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6190c9a253f64d8e91c36e2a0391aee5c65fda5d' => 
    array (
      0 => 'F:\\wamp\\wamp\\www\\ershouApp\\template\\index\\list.html',
      1 => 1499958400,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59678c866c76d3_73921459 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/list.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/base.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/rem.js"><?php echo '</script'; ?>
>
</head>
<body style="background-color: #F5F5F5">
<header>
    <span class="title">商品列表</span>
    <span class="return">&#xe612;</span>
    <div class="ss">
        <div class="ss-title">
            <span>Title</span>
            <span class="dash"></span>
            <input type="text" placeholder="Please find here" class="">
        </div>
        <span class="iconfont yuyin">&#xe62a;</span>
    </div>
</header>
    <div class="product-lists">
        <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v1');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v1']->value) {
?>
            <li>
                <div class="first">
                    <div class="first-photo"></div>
                    <div class="first-name">
                        <div class="fn">
                            <span>Jim.Green</span><span class="iconfont icon-xihuan shoucang"></span><span>28390</span>
                        </div>
                        <div> 特价处理机不可失是不再来</div>
                    </div>
                    <div class="address">
                        <div><?php echo $_smarty_tpl->tpl_vars['v1']->value["address"];?>
</div>
                        <div>BEIJING</div>
                    </div>
                    <div class="iconfont icon-ditu dizhi"></div>
                </div>
                <ul class="product-list">
                    <li>
                        <a href="">
                            <img src="<?php echo IMG_PATH;?>
/<?php echo $_smarty_tpl->tpl_vars['v1']->value['img'];?>
" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="<?php echo IMG_PATH;?>
/index-p2.png" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="<?php echo IMG_PATH;?>
/index-p3.png" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="<?php echo IMG_PATH;?>
/index-more.png" alt="" class="imgmore">
                        </a>
                    </li>
                </ul>
                <div class="product-title">
                    <span class="jianbian">超值数码系列</span>
                    <span>Charm of travel</span>
                    <em class="hot">HOT</em>
                    <span class="package "></span>
                </div>
                <div class="xu"></div>
                <div class="pro-con"><?php echo $_smarty_tpl->tpl_vars['v1']->value["info"];?>
</div>
                <span class="price">RMB <?php echo $_smarty_tpl->tpl_vars['v1']->value["price"];?>
</span>
                <div class="line"></div>
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
    var back=document.querySelector(".return");
    back.onclick=function(){
        history.go(-1);
    }
<?php echo '</script'; ?>
>
</html><?php }
}
