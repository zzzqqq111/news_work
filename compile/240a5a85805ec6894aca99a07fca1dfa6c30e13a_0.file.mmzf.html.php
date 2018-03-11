<?php
/* Smarty version 3.1.30, created on 2017-08-12 09:05:31
  from "F:\wamp\wamp\www\ershouApp\template\index\mmzf.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_598ea8bbdec643_95300261',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '240a5a85805ec6894aca99a07fca1dfa6c30e13a' => 
    array (
      0 => 'F:\\wamp\\wamp\\www\\ershouApp\\template\\index\\mmzf.html',
      1 => 1502521530,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_598ea8bbdec643_95300261 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <title>密码支付</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/base.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/mmzf.css">
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
    table{
        width: 100%;
        margin: 0 auto;
        border-collapse: collapse;
    }
    table tr{
        height: 0.44rem;

    }
    table tr td{
        width: 16.67%;
        border: 1px solid #333
    }
    table tr td input{
        width: 100%;
        height: 100%;
        display: block;
        border: none;
        outline: none;
        text-align: center;
    }
    .yhk {
        /* width: 96%; */
        height: 1.9rem;
        margin: 0 auto;
        padding: 0.4rem 0.6rem;
        background: #1FA2E6;
        margin-top: 0.8rem;
    }
    a {
        width: 100%;
        height: 100%;
        display: block;
        color: #808080;
    }
    .top {
        width: 100%;
        height: 50%;
    }
    .top img {
        width: 0.8rem;
        height: 0.8rem;
        border-radius: 50%;
        float: left;
    }
    .top p {
        float: left;
        font-size: 0.3rem;
        color: #fff;
    }
    .bottom {
        width: 100%;
        height: 50%;
        font-size: 0.3rem;
        color: #fff;
    }
</style>
<body>
<div class="header">
    <p class="return"> &#xe658; </p>
    <div class="center">
        <p class="c-top">密码支付</p>
        <p class="c-bottom">MIMAZHIFU</p>
    </div>

</div>

<div class="main">
    <div class="yhk">
        <a href="javascript:;">
            <div class="top">
                <img src="HTTP://localhost/ershouApp/static/img/01.png" alt="">
                <p>CHINA ZHONGGUOBANK</p>
            </div>
            <div class="bottom">6217 **** **** **** ****549</div>
        </a>
    </div>
    <form action="">
        <div class="fkje">
            <div class="fk">
            </div>
            <p>本次需要支付的金额<br>999元</p>
        </div>
    </form>
</div>
<form action="">
<div class="mmlr" style="text-align: center;font-size: 0.15rem;line-height: 0.6rem">
    <table>
        <tr>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text" class="lastnumber"></td>
        </tr>
    </table>
</div>
</form>
<!--<div class="srmm">-->
    <!--<div class="jian">1</div>-->
    <!--<div class="jian">2</div>-->
    <!--<div class="jian">3</div>-->
    <!--<div class="jian">4</div>-->
    <!--<div class="jian">5</div>-->
    <!--<div class="jian">6</div>-->
    <!--<div class="jian">7</div>-->
    <!--<div class="jian">8</div>-->
    <!--<div class="jian">9</div>-->
    <!--<div class="jian">*</div>-->
    <!--<div class="jian">0</div>-->
    <!--<div class="jian">#</div>-->
<!--</div>-->


</body>
<?php echo '<script'; ?>
>
    $(".lastnumber").blur(function(){
        location.href='index.php?m=index&f=zhifu&a=success';
    })
    $(".return").click(function(){
        history.go(-1);
    })
<?php echo '</script'; ?>
>
</html><?php }
}
