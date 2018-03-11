<?php
/* Smarty version 3.1.30, created on 2017-07-22 13:05:34
  from "F:\wamp\www\ershouApp\template\index\mmzf.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5973317ede1263_45310809',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9530a513c8b54fe1eff858b0bf176206c841d5e3' => 
    array (
      0 => 'F:\\wamp\\www\\ershouApp\\template\\index\\mmzf.html',
      1 => 1500721531,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5973317ede1263_45310809 (Smarty_Internal_Template $_smarty_tpl) {
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

    }
    table tr td input{
        width: 100%;
    }
</style>
<body>
<div class="header">
    <p class="fanhuijiantou"> < </p>
    <div class="center">
        <p class="c-top">密码支付</p>
        <p class="c-bottom">MIMAZHIFU</p>
    </div>

</div>

<div class="main">
    <div class="showka">
        <div class="yh"></div>
        <div class="yfxx"></div>
    </div>   <form action="">
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
<?php echo '</script'; ?>
>
</html><?php }
}
