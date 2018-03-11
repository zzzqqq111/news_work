<?php
/* Smarty version 3.1.30, created on 2017-07-11 10:37:22
  from "E:\wamp\www\ershouApp\template\admin\addCon.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59648e42f34f73_01691534',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '625b7983b9bd245de15cda5c7b57524749da8987' => 
    array (
      0 => 'E:\\wamp\\www\\ershouApp\\template\\admin\\addCon.html',
      1 => 1499761387,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59648e42f34f73_01691534 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/base.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.min.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/upload.js"><?php echo '</script'; ?>
>
</head>
<body>

<form class="form-horizontal" action="index.php?m=admin&f=lists&a=addCon" method="post">
    <div class="form-group">
        <label class="col-sm-2 control-label" name="cid">所属分类</label>
        <div class="col-sm-10">
            <select name="pid" id="" class="form-control">
                <option value="0">
                    --一级分类--
                </option>
                <?php echo $_smarty_tpl->tpl_vars['str']->value;?>

            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">标题</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputEmail3" name="title">
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">介绍</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3" name="txt">
        </div>
    </div>
    <input type="hidden" value="" name="cid">
    <input type="hidden" name="imgUrl">
    <div class="uploadbox"></div>

    <div class="form-group">
        <label class="col-sm-2 control-label">价格</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="price">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">关键字</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="keywords">
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-2 control-label">推荐位</label>
        <div class="col-sm-10">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
            <input type="checkbox" name="posid[]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['posid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['posname'];?>

            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </div>
    </div>
    <button type="submit" class="btn btn-primary btn-lg">提交</button>
</form>
</body>

<?php echo '<script'; ?>
>
    var obj = new upload();
    obj.createView({
        parent: document.querySelector(".uploadbox")
    })
    obj.up("index.php?m=admin&f=upload&a=move", function (data) {
        document.querySelector("input[name='imgUrl']").value = data;
    });
<?php echo '</script'; ?>
>
</html><?php }
}
