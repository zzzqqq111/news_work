<?php
/* Smarty version 3.1.30, created on 2017-08-12 11:41:17
  from "F:\wamp\wamp\www\ershouApp\template\index\sousuo.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_598ecd3d54de06_87592135',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '545e28de45f23276be751940ea2ae0485ad47dbc' => 
    array (
      0 => 'F:\\wamp\\wamp\\www\\ershouApp\\template\\index\\sousuo.html',
      1 => 1502530876,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_598ecd3d54de06_87592135 (Smarty_Internal_Template $_smarty_tpl) {
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
        <input type="submit" class="iconfont paizhao" value="搜索">
    </form>
</header>
<main>
    <div class="main-con">
        <div class="fenlei">
            <div class="fenlei-ss"></div>
            <ul class="lunbo">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
        <ul class="shebei">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['res']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
            <li>
                <a href="">
                    <div class="iconfont shebei-left">&#xe612;</div>
                    <div class="rifht">
                        <div>MOBILE DEVICE</div>
                        <div class="sbname"><?php ob_start();
echo $_smarty_tpl->tpl_vars['v']->value["cname"];
$_prefixVariable1=ob_get_clean();
echo $_prefixVariable1;?>
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
        <div class="fenge"></div>
        <div class="fenlei">
            <div class="fenlei-ss ss1"></div>
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
                    迷你
                </a>
            </li>
        </ul>
        <div class="fenge" style="margin-top: 0.77rem;margin-bottom: 0.23rem"></div>
        <div class="fenlei">
            <div class="fenlei-ss ss2"></div>
        </div>
        <div class="hot-con-product">
            <ul>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['r']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                <li>
                    <a href="index.php?m=index&f=search&a=selectById&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['lid'];?>
">
                        <div class="host-ss">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['img'];?>
" alt="">
                            <div class="mohu"></div>
                            <div class="hanzi">
                                <div>FEILEIPAIHANG</div>
                                <span></span><span style="float: right;font-size: 0.18rem">5.0vol</span>
                            </div>
                        </div>

                        <div class="product-info">
                            <div class="pinfo-left"></div>
                            <div class="pinfo-right">
                                <div class="name"><?php echo $_smarty_tpl->tpl_vars['v']->value["uname"];?>
</div>
                                <div class="xihuan">122</div>
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

    </div>


</main>
</body>
<?php echo '<script'; ?>
>
    var back = document.querySelector(".return");
    back.onclick = function () {
        history.go(-1);
    }
    $(".shebei").on("touchstart", function(e) {
        e.preventDefault();
        startX = e.originalEvent.changedTouches[0].pageX,
        startY = e.originalEvent.changedTouches[0].pageY;
    });
    $(".shebei").on("touchmove", function(e) {
        e.preventDefault();
        var moveEndX = e.originalEvent.changedTouches[0].pageX;
        var moveEndY = e.originalEvent.changedTouches[0].pageY;
        var X = moveEndX - startX;
        var Y = moveEndY - startY;

        if ( X > 0 ) {
            $(".shebei").css("marginLeft",X+"px")
        }
        else if ( X < 0 ) {
            $(".shebei").css("marginLeft",X+"px")
        }
        else{
            alert("just touch");
        }
    });
<?php echo '</script'; ?>
>
</html><?php }
}
