<?php
/* Smarty version 3.1.30, created on 2017-02-18 15:30:39
  from "/var/www/html/Ramesh2012/shop/templates/cart.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58a7ea0fa0af60_47627879',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76d54ff35f6b81d9d636790fce5131fb96da58a3' => 
    array (
      0 => '/var/www/html/Ramesh2012/shop/templates/cart.tpl',
      1 => 1485226010,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a7ea0fa0af60_47627879 (Smarty_Internal_Template $_smarty_tpl) {
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
                <h3>CART LIST</h3>
                <?php if (count($_SESSION['cart']) < 1) {?>
                <p>Your Shopping Cart is Empty.</p>
                <?php } else { ?>
                <form method="POST"><input type="submit" value="Clear Items" class="cartclear"></form>
                <?php }?>
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

                <?php if (count($_SESSION['cart']) >= 1) {?>
                <p><input type="button" value="Proceed To Member Registration" onClick="document.location='memberinput.php';"></p>
                <?php }?>
            </div>
        </div>
    </body>
</html>

<?php }
}
