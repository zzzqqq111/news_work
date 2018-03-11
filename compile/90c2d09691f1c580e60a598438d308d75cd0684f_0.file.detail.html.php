<?php
/* Smarty version 3.1.30, created on 2017-07-22 12:23:54
  from "F:\wamp\www\ershouApp\template\index\detail.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_597327ba4202e1_87550982',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '90c2d09691f1c580e60a598438d308d75cd0684f' => 
    array (
      0 => 'F:\\wamp\\www\\ershouApp\\template\\index\\detail.html',
      1 => 1500719031,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597327ba4202e1_87550982 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximun-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>查看商品详情</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/detail.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/base.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/yidong.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/detail.js"><?php echo '</script'; ?>
>
</head>
<body>
<div class="ckxq">
    <span class="ckxq_text">查看商品详情</span>
    <span class="ckxq_info">FUJINJINGDIAN</span>
    <div class="thenews"></div>
</div>

<div class="bg_1"></div>
<div class="bg_2"></div>
<div class="bg_3"></div>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['re']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
<div class="bg_pic">
    <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['img'];?>
" alt="">
</div>

<div class="info">
    <span class="chan">CHAN NKEWANCHENGYU <br> ARTSTATION</span>
    <div class="starBox">
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
    </div>
    <div class="wrong">
        <div class="left-line"></div>
        <div class="right-line"></div>
        <div class="right-circle"></div>
    </div>
    <div class="price">
        <?php echo $_smarty_tpl->tpl_vars['v']->value["price"];?>

    </div>
    <div class="rmb">RMB</div>
    <div class="life"><?php echo $_smarty_tpl->tpl_vars['v']->value["info"];?>
</div>
    <div class="more">
        <div class="more1 iconfont">&#xe605;</div>
        <div class="more2 iconfont">&#xe605;</div>
    </div>
    <div class="gb">
        <div class="g16 g1">16G</div>
        <div class="g32 g1">32G</div>
        <div class="g64 g1">64G</div>
        <div class="g128 g1 g">128G</div>
    </div>
    <div class="colour">
        <span class="ys">颜·色</span>
    </div>
    <ul class="dot">
        <li></li>
        <li></li>
        <li>&#xe605;</li>
        <li></li>
        <li></li>
    </ul>

    <div class="line1">
        <div class="left-line1"></div>
        <div class="right-line1"></div>
    </div>
    <div class="colour colour-green">
        <span class="ys">数·量</span>
    </div>
    <div class="number">
        <div class="add">&#xe61f;</div>
        <div class="num">1</div>
        <div class="sub">&#xe620;</div>
    </div>
    <div class="line1">
        <div class="left-line1"></div>
        <div class="right-line1"></div>
    </div>
    <ul class="round">
        <li>
            <span class="round-text">68</span>
            <span class="round-info">SHOUYI</span>
            <div class="heng-line"></div>
        </li>
        <li>
            <span class="round-text">68</span>
            <span class="round-info">SHOUYI</span>
            <div class="heng-line"></div>
        </li>
        <li>
            <span class="round-text">68</span>
            <span class="round-info">SHOUYI</span>
            <div class="heng-line"></div>
        </li>
    </ul>
    <ul class="tj">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['res']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        <li>
            <input type="hidden" class="pid" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['posid'];?>
">
            <div class="left-dot"></div>
            <span class="rmtj">
                <?php echo $_smarty_tpl->tpl_vars['v']->value["posname"];?>

            </span>
            <div class="right-dot"></div>
        </li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </ul>
    <ul class="list">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['r1']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        <li>
            <a href="index.php?m=index&f=search&a=selectById&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['lid'];?>
">
            <div class="left">
                <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['img'];?>
" alt="">
            </div>
            <div class="right">
                <div class="right-top">
                    <span class="piease"><?php echo $_smarty_tpl->tpl_vars['v']->value["title"];?>
</span>
                    <div class="new">NEW</div>
                </div>
                <span class="dss"><?php echo $_smarty_tpl->tpl_vars['v']->value["info"];?>
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
                        <div class="left-star iconfont">&#xe602;</div>
                        <div class="left-num">1,263,709</div>
                    </li>
                </ul>
            </div>
            </a>
        </li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </ul>

    <ul class="list"  style="display:none">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['r2']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        <li>
            <a href="index.php?m=index&f=search&a=selectById&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['lid'];?>
">
            <div class="left">
                <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['img'];?>
" alt="">
            </div>
            <div class="right">
                <div class="right-top">
                    <span class="piease"><?php echo $_smarty_tpl->tpl_vars['v']->value["title"];?>
</span>
                    <div class="new">NEW</div>
                </div>
                <span class="dss"><?php echo $_smarty_tpl->tpl_vars['v']->value["info"];?>
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
                        <div class="left-star iconfont">&#xe602;</div>
                        <div class="left-num">1,342,696</div>
                    </li>
                </ul>
            </div>
            </a>
        </li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </ul>

    <div class="line1" style="margin-top: 0.52rem;"></div>

    <div class="price-total">
        <div class="left">
            <div class="left-price"><?php echo $_smarty_tpl->tpl_vars['v']->value["price"];?>
</div>
            <div class="left-cheng">X</div>
            <div class="left-number">1</div>
        </div>
        <div class="right">
            <div class="right-dot1"></div>
            <div class="right-total"><?php echo $_smarty_tpl->tpl_vars['v']->value["price"];?>
</div>
        </div>
    </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    <div class="shoucang-xiadan">
        <div class="shoucang">
            <span class="text">收藏</span>
            <span class="info1">SHOUCANG</span>
        </div>
        <div class="xiadan">
            <span class="text">下单</span>
            <span class="info1">XIADAN</span>
        </div>
    </div>

</div>
</body>
<?php echo '<script'; ?>
>
    $(".tj li:nth-child(1)").addClass("active");
    $(".tj li").each(function (i, v) {
        $(v).click(function () {
            $(this).addClass("active").siblings().removeClass("active");
            $(".list").eq(i).css("display","block").siblings(".list").css("display","none");
        })
    })


    $(".xiadan").click(function(){
        $total=$(".right-total").html();
        console.log($total);
        location.href='index.php?m=index&f=yinhangka&a=zhifu';
    })
<?php echo '</script'; ?>
>
</html><?php }
}
