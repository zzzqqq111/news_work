<?php
/* Smarty version 3.1.30, created on 2017-08-12 08:46:19
  from "F:\wamp\wamp\www\ershouApp\template\index\choose.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_598ea43bb70d80_73183183',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '299f07361bce9eefb66a3ce8e85021bfef03ea28' => 
    array (
      0 => 'F:\\wamp\\wamp\\www\\ershouApp\\template\\index\\choose.html',
      1 => 1502520378,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_598ea43bb70d80_73183183 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
    *{
        margin: 0;
        padding: 0;
    }
    html,body{
        width: 100%;
        height: 100%;
    }
    main{
        width: 100%;
        height: 100%;
        background: #205ED3;
        float: left;
    }
    .main-con{
        width: 6.58rem;
        height: 10.07rem;
        background: #F7F7F7;;
        margin: 0 auto;
        margin-top: 0.82rem;
        border-radius: 0.1rem;
        position: relative;
    }
    header {
        width: 100%;
        position: relative;
        text-align: center;
        color: #ffffff;
        font-size: 0.25rem;
    }
    .title {
        display: inline-block;
        margin-top: 0.42rem;
    }
    .return{
        float: left;
        color: #ffffff;
        font-size: 0.4rem;
        text-align: center;
        font-family: 'iconfont';
        margin-top: 0.57rem;
        margin-left: 0.36rem;
    }
    .line{
        width: 100%;
        height: 0.06rem;
        background: #21EEFF;
        position: absolute;
    }
    .line1{
        top: 0;
        left: 0;
    }
    .line2{
        bottom: 0;
        left: 0;
    }
    .con{
        padding: 0 0.22rem;
    }
    .con p{
        font-size: 0.24rem;
        text-align: center;
        padding-top: 1.22rem;
        color: #3a414a;
        margin-bottom: 0.4rem;
    }
    .zhifu-list{
        overflow: hidden;
    }
    .zhifu-list li{
        width: 100%;
        height: 0.93rem;
        background: #FFFFFF;
        position: relative;
        padding-top: 0.2rem;
        margin-bottom: 0.1rem;
        box-shadow: 0px 0px 1px 0px #737373;
    }
    .zhifu-list li a{
        width: 100%;
        height: 100%;
    }
    .left{
        color: #1BA3F1;
        height: 0.93rem;
        line-height: 0.93rem;
        font-family: 'iconfont';
        float: left;
        font-size: 0.56rem;
    }
    .center{
        font-size: 0.23rem;
        margin-left: 0.62rem;
        float: left;
    }
    .right{
        width: 0.06rem;
        height: 0.64rem;
        background: #7B9BFE;
        float: right;
    }
</style>
<body>
<main>
    <header>
        <span class="title">付款方式选择<br>payment choice </span>
        <span class="return">&#xe658;</span>
    </header>
    <div class="main-con">
        <div class="line1 line"></div>
        <div class="line2 line"></div>
        <div class="con">
            <p>支付平台筛选</p>
            <ul class="zhifu-list">
                <li>
                    <a href="javascript:;">
                        <span class="left iconfont">&#xe67c;</span>
                        <span class="center">
                                选择支付宝完成支付
                                <br><span>ZHIFUBAOWANCHENGZHIFU</span>
                            </span>
                        <span class="right"></span>
                    </a>
                </li>
                <li>
                    <a href="javascript:;">
                        <span class="left iconfont">&#xe623;</span>
                        <span class="center">
                                选择微信完成支付
                                <br><span>ZHIFUBAOWANCHENGZHIFU</span>
                            </span>
                        <span class="right"></span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="con">
            <p>其他支付筛选</p>
            <ul class="zhifu-list">
                <li>
                    <a href="index.php?m=index&f=zhifu&a=yinhangka">
                        <span class="left iconfont">&#xe627;</span>
                        <span class="center">
                                选择银行卡完成支付
                                <br><span>ZHIFUBAOWANCHENGZHIFU</span>
                            </span>
                        <span class="right"></span>
                    </a>
                </li>
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
