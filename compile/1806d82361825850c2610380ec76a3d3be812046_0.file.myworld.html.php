<?php
/* Smarty version 3.1.30, created on 2017-07-23 15:16:22
  from "F:\wamp\wamp\www\ershouApp\template\index\myworld.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5974a1a64463c5_09709428',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1806d82361825850c2610380ec76a3d3be812046' => 
    array (
      0 => 'F:\\wamp\\wamp\\www\\ershouApp\\template\\index\\myworld.html',
      1 => 1500706060,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5974a1a64463c5_09709428 (Smarty_Internal_Template $_smarty_tpl) {
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
/mycenter.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/rem.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/upload.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.js"><?php echo '</script'; ?>
>
</head>
<style>
    .img{
        display: none;
    }
    .uploadimg{
        position: absolute;
        top: 5.5rem;
        left: 0.5rem;
        right: 0;
        margin: auto;
        font-size: 0.12rem;
    }
    .uploadimg div{
        width: 100%;
        height: 100%;
    }
</style>
<body mid="<?php echo $_smarty_tpl->tpl_vars['mid']->value;?>
">
<input type="hidden" mid="<?php echo $_smarty_tpl->tpl_vars['mid']->value;?>
">
<div class="beijing">
        <div class="ding"></div>
        <div class="tou">
              <div class="pinglun"></div>
              <div class="touxiang">
                <img src="<?php echo IMG_PATH;?>
/m4.png" style="position: absolute;left: 0;top: 0;">
                  <img src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
" style="width: 1.17rem;height:1.17rem;position: absolute;left: 20%;top:20%;" class="uploadphoto">
                  <!--头像-->
              </div>
              <div class="shezhi"></div>
          </div>

        <p class="wangy"><?php echo $_smarty_tpl->tpl_vars['mname']->value;?>
</p>
        <div style="width: 100%;"><h3>I like second-hand goods trading </h3></div>
        <div class="dian">.................</div>
        <div class="xing">
            <ul>
                <li><img src="<?php echo IMG_PATH;?>
/m8.png"></li>
                <li><img src="<?php echo IMG_PATH;?>
/m8.png"></li>
                <li><img src="<?php echo IMG_PATH;?>
/m8.png"></li>
                <li><img src="<?php echo IMG_PATH;?>
/m8.png"></li>
                <li><img src="<?php echo IMG_PATH;?>
/m8.png"></li>
            </ul>
        </div>
        <div class="xian"><img src="<?php echo IMG_PATH;?>
/m9.png"></div>
        <div class="beizi"><img src="<?php echo IMG_PATH;?>
/m10.png"></div>
        <span class="shuzi">·· 289,010</span>

        <ul class="liebiao">
            <li>
                <a href="index.php?m=index&f=order">
                    <div class="icon"><img src="<?php echo IMG_PATH;?>
/m11.png" style="width:0.54rem;height: 0.36rem;margin-left: 0.1rem;margin-top: 0.32rem;float: left;"> </div>
                    <div class="zi">
                        <h6>购物车</h6>
                        <p>查看您的购物车以及您想要支付的商品</p>
                    </div>
                </a>
               <div class="jiantou"><img src="<?php echo IMG_PATH;?>
/m12.png"></div>
            </li>
            <li>
                <div class="icon"><img src="<?php echo IMG_PATH;?>
/m13.png" style="width:0.35rem;height: 0.44rem;margin-left: 0.2rem;margin-top: 0.31rem;float: left;"> </div>
                <div class="zi">
                    <h6>订单管理</h6>
                    <p>查看您的本地订单以及订单详情</p>
                </div>
                <div class="jiantou"><img src="<?php echo IMG_PATH;?>
/m12.png"></div>
            </li>
            <li>
                <div class="icon"><img src="<?php echo IMG_PATH;?>
/m14.png" style="width:0.44rem;height: 0.44rem;margin-left: 0.12rem;margin-top: 0.31rem;float: left;"> </div>
                <div class="zi">
                    <h6>我的收藏</h6>
                    <p>产看您日常收藏的好的物品信息</p>
                </div>
                <div class="jiantou"><img src="<?php echo IMG_PATH;?>
/m12.png"></div>
            </li>
            <li>
                <div class="icon"><img src="<?php echo IMG_PATH;?>
/m15.png" style="width:0.37rem;height: 0.44rem;margin-left: 0.2rem;margin-top: 0.31rem;float: left;"> </div>
                <div class="zi">
                    <h6>账户安全</h6>
                    <p>管理您的帐号让帐号安全得到保障</p>
                </div>
                <div class="jiantou"><img src="<?php echo IMG_PATH;?>
/m8.png"></div>
            </li>
            <li>
                <div class="icon"><img src="<?php echo IMG_PATH;?>
/m16.png" style="width:0.39rem;height: 0.39rem;margin-left: 0.17rem;margin-top: 0.31rem;float: left;"> </div>
                <div class="zi">
                    <h6>售后服务</h6>
                    <p>管理您的帐号让帐号安全得到保障</p>
                </div>
                <div class="jiantou"><img src="<?php echo IMG_PATH;?>
/m12.png"></div>
            </li>
        </ul>
        <div class="tuichu">
            <h3>退出登录</h3>
            <p>TUICHUDENGLU</p>
        </div>
    </div>
</body>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/member.js"><?php echo '</script'; ?>
>
</html><?php }
}
