<?php
/* Smarty version 3.1.30, created on 2017-02-18 15:31:50
  from "/var/www/html/Ramesh2012/shop/templates/confirm.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58a7ea56f06e93_04964166',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c37954f7bab909008d235828e10bc098de79748' => 
    array (
      0 => '/var/www/html/Ramesh2012/shop/templates/confirm.tpl',
      1 => 1485226502,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a7ea56f06e93_04964166 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Shoping Cart</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>

        <div class="header">ClothesNepal</div>
        <div class="base">

            <div class="leftarea">
                <ul>
                    <li><a href="index.php" style="color:#e72678">ALL CATEGORIES</a></li>
                    <li><a href="index.php?category=1" style="color:#e72678">Jackets</a></li>
                    <li><a href="index.php?category=2" style="color:#e72678">Shirts</a></li>
                    <li><a href="index.php?category=3" style="color:#e72678">Pants</a></li>
                </ul>
                <p class="cartview"><a href="cart.php" style="color:#e72678">View Cart</a></p>
            </div>

            <div class="rightarea">
                
                <h3>Confirmation Selected Items</h3>

                <h4>Purchased Items</h4>
               <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['goods']->value, 'rec');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['rec']->value) {
?>
                    <div class="goods">
			
                        <div class="cartinfo">
                            <h3><?php echo $_smarty_tpl->tpl_vars['rec']->value['goodsname'];?>
</h3>
                            <p>Color：<?php echo $_smarty_tpl->tpl_vars['rec']->value['colors'];?>
</p>
                            <p>Size：<?php echo $_smarty_tpl->tpl_vars['rec']->value['size'];?>
</p>
                            <p class="price"><?php echo $_smarty_tpl->tpl_vars['rec']->value['price'];?>
円</p>
                        </div>
                    </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				
                <h4>Price</h4>
				<p>Total：<?php echo $_smarty_tpl->tpl_vars['goukei']->value;?>
</p>
				<p>Tax：<?php echo $_smarty_tpl->tpl_vars['zei']->value;?>
</p>
				<p>Total Price with Tax：<?php echo $_smarty_tpl->tpl_vars['zeikomi']->value;?>
</p>

				
                <h4>Shipping Address</h4>
                <p>Full Name：<?php echo htmlspecialchars($_SESSION['name'], ENT_QUOTES, 'UTF-8', true);?>
</p>
                <p>Postal Code：<?php echo htmlspecialchars($_SESSION['zipcode1'], ENT_QUOTES, 'UTF-8', true);?>
-<?php echo htmlspecialchars($_SESSION['zipcode2'], ENT_QUOTES, 'UTF-8', true);?>
</p>
                <p>Prefecture：<?php echo $_smarty_tpl->tpl_vars['pref']->value;?>

                <p>Address：<?php echo htmlspecialchars($_SESSION['address'], ENT_QUOTES, 'UTF-8', true);?>
</p>
                <p>Telephone：<?php echo htmlspecialchars($_SESSION['tel'], ENT_QUOTES, 'UTF-8', true);?>
</p>
                <p>Email：<?php echo htmlspecialchars($_SESSION['mail'], ENT_QUOTES, 'UTF-8', true);?>
</p>
                
				<form method="POST">
                <p ><input type="button" value="Back" onClick="document.location='delivery.php';" style="float: left;">
                <input type="submit" value="Confirm Order" style="float: right;"></p>
                </form>
				<div class="error" style="float:right;"><?php echo $_smarty_tpl->tpl_vars['error_db']->value;?>
</div>
				
                
            </div>
        </div>
    </body>
</html>

<?php }
}
