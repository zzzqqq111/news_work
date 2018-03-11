<?php
/* Smarty version 3.1.30, created on 2017-08-12 09:02:20
  from "F:\wamp\wamp\www\ershouApp\template\index\xzk.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_598ea7fc0ef5a5_27880732',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1351841f15eec12d6b2a864a5cc9399ccc5b9cec' => 
    array (
      0 => 'F:\\wamp\\wamp\\www\\ershouApp\\template\\index\\xzk.html',
      1 => 1502521324,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_598ea7fc0ef5a5_27880732 (Smarty_Internal_Template $_smarty_tpl) {
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
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/xzk.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/yidong.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.js"><?php echo '</script'; ?>
>
</head>
<style>
    html,body{
        width: 100%;
        height: 100%;
        background: #f7f7f7;
    }
    .return{
        float: left;
        color: #ffffff;
        font-size: 0.4rem;
        text-align: center;
        font-family: 'iconfont';
        margin-left: 0.3rem;
        margin-top: 0.3rem;
    }
    .center{
        padding-top: 0.3rem;
    }
    .add{
        float: right;
    }
</style>
<body>
<div class="header">
    <span class="return">&#xe658;</span>
    <div class="center">
        <p class="c-top">选择银行卡</p>
        <p class="c-bottom">XUANZEYINHANGKA</p>
        <div class="ybd">
            <div class="left">
                <span>已绑定银行卡数量</span>
                <span>BANGBINGSHULIANG</span>
            </div>
            <div class="right">
                02
            </div>
        </div>
    </div>
    <a href="index.php?m=index&f=zhifu&a=addyinhangka" class="add">添加</a>
</div>
<div class="yhk">
    <a href="javascript:;">
        <div class="top">
            <img src="<?php echo IMG_PATH;?>
/01.png" alt="">
            <p>CHINA ZHONGGUOBANK</p>
        </div>
        <div class="bottom">6217 **** **** **** ****549</div>
    </a>
</div>
<div class="yhk">
    <div class="top">
        <img src="<?php echo IMG_PATH;?>
/01.png" alt="">
        <p>CHINA ZHONGGUOBANK</p>
    </div>
    <div class="bottom">6217 **** **** **** ****549</div>
</div>

<div class="mask" style="display: none;">
    <div class="querendingdan">
        <div class="mask-top"></div>
        <div class="money">
            <p><span style="font-size: 0.32rem">RMB.</span><span style="font-size: 0.64rem">999.00</span></p>
            <p>您本次需要支付的金额</p>
            <p style="margin-top: 0.37rem;">6245 **** **** **** 3308</p>
            <a href="index.php?m=index&f=yinhangka&a=zhifu">
                <div class="btn-sure">
                    确认订单<br>querendingdan
                </div>
            </a>
        </div>
    </div>
</div>
</body>
<?php echo '<script'; ?>
>
    var cards=document.querySelectorAll(".yhk");
    var mask=document.querySelector(".mask");
    Array.from(cards).forEach(function(ele,index){
        ele.onclick=function(){
            mask.style.display="block";
        }
    })
    $(".return").click(function () {
        history.go(-1);
    })
<?php echo '</script'; ?>
>
</html><?php }
}
