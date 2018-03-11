<?php
/* Smarty version 3.1.30, created on 2017-07-22 09:06:05
  from "F:\wamp\www\ershouApp\template\index\updateMessage.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5972f95db86206_12058191',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5702382de34f5d7822dc9b07f29f64addabf3d2' => 
    array (
      0 => 'F:\\wamp\\www\\ershouApp\\template\\index\\updateMessage.html',
      1 => 1500707163,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5972f95db86206_12058191 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/rem.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/upload.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/base.css">
</head>
<style>
    form{
        width: 100%;
        overflow: hidden;
    }
    .top{
        width: 100%;
        line-height: 0.5rem;
        background: #264CB7;
        font-size: 0.3rem;
        text-align: center;
        color: #FFFFFF;
    }
    table{
        width: 90%;
        overflow: hidden;
    }
    table tr{
        height: 0.5rem;
        text-align: left;
        font-size: 0.3rem;
    }
</style>
<body>
    <p class="top">设置</p>
        <table class="table" mid="<?php echo $_smarty_tpl->tpl_vars['mid']->value;?>
">
                <tr>
                    <td>头像</td>
                    <td>
                        <div class="photo"><img src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
" alt=""></div>
                    </td>
                </tr>
                <tr class="updateimg">
                    <td colspan="2">
                        <div class="img">
                            <input type="hidden" name="imgUrl">
                            <div class="uploadimg">
                                <div class="uploadbox"></div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>昵称</td>
                    <td>
                        <input type="text" class="nicheng" attr="nicheng" value="111111">
                    </td>
                </tr>
                <tr>
                    <td>用户名</td>
                    <td>
                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['mname']->value;?>
" name="mname" class="mname">
                    </td>
                </tr>
                <tr>
                    <td>修改密码</td>
                    <td>
                        <input type="text" class="glyphicon glyphicon-pencil" value="" name="password">
                    </td>
                </tr>
                <tr>
                    <td>电话号码</td>
                    <td>
                        <input type="text" class="telphone" attr="email" value="<?php echo $_smarty_tpl->tpl_vars['mphone']->value;?>
">
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><a href="lavascript:;" class="update">修改</a></td>
                </tr>
            </table>
</body>
<?php echo '<script'; ?>
>
    var photo=document.querySelector(".photo");
    var updateimg=document.querySelector(".updateimg");
    var img=document.querySelector(".uploadimg");
    photo.onclick= function () {
        updateimg.style.display="block";
    }
    var obj = new upload();
    obj.createView({
        parent: document.querySelector(".uploadbox")
    })
    obj.up("index.php?m=index&f=upload&a=move", function (data) {
        document.querySelector("input[name='imgUrl']").value = data;
        img.style.display="none";
    });



<?php echo '</script'; ?>
>
</html><?php }
}
