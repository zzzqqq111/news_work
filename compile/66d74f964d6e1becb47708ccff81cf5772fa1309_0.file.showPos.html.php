<?php
/* Smarty version 3.1.30, created on 2017-07-11 12:53:54
  from "E:\wamp\www\ershouApp\template\admin\showPos.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5964ae427b5c42_76424049',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66d74f964d6e1becb47708ccff81cf5772fa1309' => 
    array (
      0 => 'E:\\wamp\\www\\ershouApp\\template\\admin\\showPos.html',
      1 => 1499770429,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5964ae427b5c42_76424049 (Smarty_Internal_Template $_smarty_tpl) {
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
            <th>id</th>
            <th>名称</th>
        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value["posid"];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value["posname"];?>
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
