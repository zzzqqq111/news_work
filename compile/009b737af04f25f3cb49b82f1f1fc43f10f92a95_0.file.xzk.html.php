<?php
/* Smarty version 3.1.30, created on 2017-07-22 13:20:08
  from "F:\wamp\www\ershouApp\template\index\xzk.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_597334e8bc1db7_80039137',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '009b737af04f25f3cb49b82f1f1fc43f10f92a95' => 
    array (
      0 => 'F:\\wamp\\www\\ershouApp\\template\\index\\xzk.html',
      1 => 1500722406,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597334e8bc1db7_80039137 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>选择银行卡</title>
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
</style>
<body>
<div class="header">
    <p class="fanhuijiantou"> < </p>
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
    <div class="add"><a href="index.php?m=index&f=zhifu&a=addyinhangka"> + </a> </div>
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
<?php echo '</script'; ?>
>
</html><?php }
}
