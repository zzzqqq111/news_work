<?php
/* Smarty version 3.1.30, created on 2017-07-11 11:05:33
  from "E:\wamp\www\ershouApp\template\admin\listsAdd.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596494dd28e8c6_45202001',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '913fa2b22f10044214dff537b741127fe91ca293' => 
    array (
      0 => 'E:\\wamp\\www\\ershouApp\\template\\admin\\listsAdd.html',
      1 => 1499763929,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596494dd28e8c6_45202001 (Smarty_Internal_Template $_smarty_tpl) {
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
/bootstrap.min.css">
</head>
<body>
   <table class="table table-striped">
        <tr>
            <th>
                id
            </th>
            <th>
                所属分类
            </th>
            <th>
                标题
            </th>
            <th>
                操作
            </th>
        </tr>
       <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        <tr>
            <td>
                <?php echo $_smarty_tpl->tpl_vars['v']->value["lid"];?>

            </td>
            <td>
                <?php echo $_smarty_tpl->tpl_vars['v']->value["cname"];?>

            </td>
            <td>
                <?php echo $_smarty_tpl->tpl_vars['v']->value["title"];?>

            </td>
            <td>
                <a href="index.php?m=admin&f=lists&a=del&sid=<?php echo $_smarty_tpl->tpl_vars['v']->value['lid'];?>
">删除</a>

                <a href="index.php?m=admin&f=lists&a=edit&sid=<?php echo $_smarty_tpl->tpl_vars['v']->value['lid'];?>
">编辑</a>

                
            </td>
        </tr>
       <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

   </table>

</body>
</html><?php }
}
