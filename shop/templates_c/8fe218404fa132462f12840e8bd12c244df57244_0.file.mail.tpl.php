<?php
/* Smarty version 3.1.30, created on 2017-02-18 15:32:01
  from "/var/www/html/Ramesh2012/shop/templates/mail.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58a7ea616ee982_59887348',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8fe218404fa132462f12840e8bd12c244df57244' => 
    array (
      0 => '/var/www/html/Ramesh2012/shop/templates/mail.tpl',
      1 => 1485226564,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a7ea616ee982_59887348 (Smarty_Internal_Template $_smarty_tpl) {
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
