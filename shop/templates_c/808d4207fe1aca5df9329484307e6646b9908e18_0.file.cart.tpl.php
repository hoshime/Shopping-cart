<?php
/* Smarty version 3.1.30, created on 2017-01-24 03:46:56
  from "c:\xampp\htdocs\shop\templates\cart.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5886c020b37f97_04238760',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '808d4207fe1aca5df9329484307e6646b9908e18' => 
    array (
      0 => 'c:\\xampp\\htdocs\\shop\\templates\\cart.tpl',
      1 => 1485226008,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5886c020b37f97_04238760 (Smarty_Internal_Template $_smarty_tpl) {
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
