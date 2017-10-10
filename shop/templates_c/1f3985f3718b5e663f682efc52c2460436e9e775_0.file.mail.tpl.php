<?php
/* Smarty version 3.1.30, created on 2017-02-01 09:05:20
  from "c:\xampp\htdocs\shop\templates\mail.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_589196c099c017_47940211',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f3985f3718b5e663f682efc52c2460436e9e775' => 
    array (
      0 => 'c:\\xampp\\htdocs\\shop\\templates\\mail.tpl',
      1 => 1485226564,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_589196c099c017_47940211 (Smarty_Internal_Template $_smarty_tpl) {
echo $_SESSION['name'];?>
 

Thank you for shoping with us.

【Purchased item】
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['goods']->value, 'rec');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['rec']->value) {
echo $_smarty_tpl->tpl_vars['rec']->value['goodsname'];?>
 Color：<?php echo $_smarty_tpl->tpl_vars['rec']->value['colors'];?>
 Size：<?php echo $_smarty_tpl->tpl_vars['rec']->value['size'];?>
 <?php echo $_smarty_tpl->tpl_vars['rec']->value['price'];?>
円
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				
【Total Price】
Total：<?php echo $_smarty_tpl->tpl_vars['goukei']->value;?>

Tax：<?php echo $_smarty_tpl->tpl_vars['zei']->value;?>

total Price with Tax：<?php echo $_smarty_tpl->tpl_vars['zeikomi']->value;?>

			
【Shipping Address】
Full Name：<?php echo $_SESSION['name'];?>

Postal Code：<?php echo $_SESSION['zipcode1'];?>
-<?php echo $_SESSION['zipcode2'];?>

Prefecture：<?php echo $_smarty_tpl->tpl_vars['pref']->value;?>

：<?php echo $_SESSION['address'];?>

Telephone：<?php echo $_SESSION['tel'];?>

Email：<?php echo $_SESSION['mail'];?>


-----------------------
ClothsNepal



<?php }
}
