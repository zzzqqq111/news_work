<?php
/* Smarty version 3.1.30, created on 2017-08-12 09:11:59
  from "F:\wamp\wamp\www\ershouApp\template\index\addka.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_598eaa3fe37c94_85274083',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70e10ae7ba7f14a3e56fc8a03876a87b07f413cb' => 
    array (
      0 => 'F:\\wamp\\wamp\\www\\ershouApp\\template\\index\\addka.html',
      1 => 1502521918,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_598eaa3fe37c94_85274083 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,
    	maximum-scale=1,user-scalable=no">
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>
/base.css">
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>
/style1.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/rem.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.js"><?php echo '</script'; ?>
>
</head>
<body>
   <div class="beijing" style="position: relative">
       <span class="return">&#xe658;</span>
       <div class="zhucebeijing">
           <div class="zz">
               <img src="<?php echo IMG_PATH;?>
/add8.png" class="font-tou f1">
               <img src="<?php echo IMG_PATH;?>
/add9.png" class="font-tou f2">
               <img src="<?php echo IMG_PATH;?>
/add7.png" class="font-tou f3">
               <img src="<?php echo IMG_PATH;?>
/add11.png" class="font-tou f4">
               <input type="text" placeholder="卡片用户名" class="yonghuming">
               <input type="text" placeholder="银行卡片账号" class="yonghuming y1">
               <input type="text" placeholder="身份证号码" class="yonghuming y2">
               <input type="text" placeholder="预留手机号" class="yonghuming y3">
           </div>
        </div>
       <div class="tuichu">
           <h3>提交结果</h3>
           <p>TIJIAOJIEGUO</p>
       </div>
   </div>
</body>
<?php echo '<script'; ?>
>
    $(".return").click(function(){
        history.go(-1);
    })
<?php echo '</script'; ?>
>
</html><?php }
}
