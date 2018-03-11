<?php
/* Smarty version 3.1.30, created on 2017-08-12 10:50:23
  from "F:\wamp\wamp\www\ershouApp\template\index\sousuo-success.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_598ec14f0f1ff0_69694974',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3f1bd296867af4cf8c5b78df1948ae169fc532a' => 
    array (
      0 => 'F:\\wamp\\wamp\\www\\ershouApp\\template\\index\\sousuo-success.html',
      1 => 1502527702,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_598ec14f0f1ff0_69694974 (Smarty_Internal_Template $_smarty_tpl) {
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
    <style>
        .results{
            width: 100%;
        }
        .resultset{
            width: 100%;
            height: 1.12rem;
            background: #3E6CEF;
            font-size: 0.22rem;
            color: #FFFFFF;
            padding-left: 0.26rem;
            line-height: 0.4rem;
        }
        .shuliang{
            padding: 0 0.11rem;
            height: 0.27rem;
            border: 2px solid #FFFFFF;
            border-radius: 0.2rem;
            text-align: center;
            line-height: 0.27rem;
            color: #FFFFFF;
            font-size: 0.15rem;
        }
        .success-result{
            width: 7rem;
            margin: 0 auto;
        }
        .index-product{
            width: 300%;
            margin-top: 1.02rem;

        }
        .index-product li{
            width: 6.11rem;
            background: #fff;
            float: left;
            position: relative;
            margin-bottom: 0.42rem;
        }
        .index-product li a{
            display: block;
        }
        .gradient{
            width: 100%;
            height: 0.09rem;
            background: linear-gradient(45deg,#4D6CFC,#48BFFB);
        }
        .tui img{
            width:232px;
            height:57px;
        }
        .p1{
            width: 3.89rem;
            height: 2.89rem;
            position: absolute;
            top: -1.43rem;
            left: 0;
            right: 0;
            margin: auto;
        }
        .index-img{
            width: 100%;
            height: 100%;
        }
        .jianjie{
            width: 5.48rem;
            height: auto;
            margin: 1.31rem auto 0.46rem;
        }
        .j-left{
            float: left;
            font-size: 0.12rem;
            line-height: 0.3rem;
        }
        .english{
            color: #373d44;
            font-size: 0.21rem;
        }
        .through{
            display: block;
            width: 0.18rem;
            height: 0.03rem;
            background: #373d44;
            margin: 0.06rem 0;
        }
        .rmb{
            font-size: 0.13rem;
            color: #326afa;
        }
        .money{
            color: #326afa;
            font-size: 0.23rem;
        }
        .time{
            float: left;
        }
        .time li{
            width:0.83rem;
            height: 100%;
            float: left;
            font-size: 0.26rem;
            line-height: 0.91rem;
            text-align: center;
            color: #666666;
            margin-right: 0.09rem;
            margin-left: 0.3rem;
        }
        .time-ku{
            width: 100%;
            height: 0.91rem;
            border: 1px solid ;
            background: #fcfcfc;
        }
        .dian{
            width: 5.48rem;
            margin: 0 auto;
        }
        .different{
            float: left;
        }
        .different li{
            margin-right: 0.14rem;
            float: left;
            width: 0.36rem;
            height: 0.1rem;
            background: #4C7DFB;
            border-radius: 20px;
        }
        .different li:nth-child(2){
            background: #26D792;
        }
        .different li:nth-child(3){
            background: #54B414;
        }
        .different li:nth-child(4){
            background: #F3B216;
        }
        .learn-more{
            float: right;
            margin-bottom: 0.35rem;
        }
        .learn-more li{
            width: 0.11rem;
            height: 0.11rem;
            background: #4767FD;
            border-radius: 100%;
            margin-right: 0.05rem;
        }
    </style>
</head>
<body style="background: #F5F5F5;">
<header>
    <span class="title">搜索与查找<br>SEARCH AND FIND </span>
    <span class="return">&#xe658;</span>
    <span class="return jingque">&#xe61d;</span>
    <form action="index.php?m=index&f=search&a=selectByKey" method="post" class="ss" >
        <div class="ss-title">
            <span>Title</span>
            <span class="dash"></span>
            <input type="text" placeholder="搜索成功"  name="keywords" style="color: #54B414">
        </div>
        <input type="submit" class="iconfont paizhao" vaule="搜索">
    </form>
</header>
<main>
    <!--搜索成功-->
    <div class="results">
        <div class="success-result">
            <div class="fenlei">
                <div class="fenlei-ss"></div>
            </div>
            <ul class="index-product">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['resu']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                <li>
                    <a href="index.php?m=index&f=search&a=selectById&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['lid'];?>
">
                        <div class="gradient"></div>
                        <div class="p1">
                            <img src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['v']->value['img'];
$_prefixVariable1=ob_get_clean();
echo $_prefixVariable1;?>
" alt="" class="index-img">
                        </div>
                        <div class="jianjie">
                            <div class="j-left">
                                <span style="color: #8f8f8f">FLINKER GO</span><br>
                                <span class="english">BEAUTIFCHRIST</span><br>
                                <span class="through"></span>
                                <span class="rmb">RMB</span><br>
                                <span class="money"><?php ob_start();
echo $_smarty_tpl->tpl_vars['v']->value["price"];
$_prefixVariable2=ob_get_clean();
echo $_prefixVariable2;?>
</span>
                            </div>
                            <ul class="time">
                                <li>
                                    <div class="time-ku">03</div>
                                    <div>GONG</div>
                                </li>
                                <li>
                                    <div class="time-ku">83</div>
                                    <div>DIAN</div>
                                </li>
                                <li>
                                    <div class="time-ku">90</div>
                                    <div>TIME</div>
                                </li>
                            </ul>
                        </div>
                        <div class="dian">
                            <ul class="different">
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                            <ul class="learn-more">
                                <li></li>
                                <li></li>
                                <li></li>
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
            <div class="fenlei">
                <div class="fenlei-ss qita"></div>
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
