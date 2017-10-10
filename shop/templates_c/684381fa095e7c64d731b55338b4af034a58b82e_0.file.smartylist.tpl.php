<?php
/* Smarty version 3.1.30, created on 2016-10-25 04:33:08
  from "c:\xampp\htdocs\shop\templates\smartylist.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_580ec464bed361_74269630',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '684381fa095e7c64d731b55338b4af034a58b82e' => 
    array (
      0 => 'c:\\xampp\\htdocs\\shop\\templates\\smartylist.tpl',
      1 => 1477362349,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_580ec464bed361_74269630 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Smarty List</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="templates/style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        
        <table border="1">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['anketo']->value, 'foo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->value) {
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['foo']->value['code'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['foo']->value['nickname'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['foo']->value['email'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['foo']->value['goiken'];?>
</td>
                </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </table>
    </body>
</html>
<?php }
}
