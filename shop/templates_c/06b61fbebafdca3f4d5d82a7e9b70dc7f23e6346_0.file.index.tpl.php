<?php
/* Smarty version 3.1.30, created on 2017-02-18 15:30:09
  from "/var/www/html/Ramesh2012/shop/templates/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58a7e9f1e82715_96471547',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06b61fbebafdca3f4d5d82a7e9b70dc7f23e6346' => 
    array (
      0 => '/var/www/html/Ramesh2012/shop/templates/index.tpl',
      1 => 1485224164,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a7e9f1e82715_96471547 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once '/var/www/html/Ramesh2012/shop/libs/plugins/function.html_options.php';
if (!is_callable('smarty_function_html_radios')) require_once '/var/www/html/Ramesh2012/shop/libs/plugins/function.html_radios.php';
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
               <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['goods']->value, 'rec');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['rec']->value) {
?>
                    <div class="goods">
                        <form method="GET" action="cart.php">
                            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['rec']->value['id'];?>
">
                            <img src="goodsimg/<?php echo $_smarty_tpl->tpl_vars['rec']->value['imgfile'];?>
" />

                            <div class="goodsinfo">
                                <h2><?php echo $_smarty_tpl->tpl_vars['rec']->value['goodsname'];?>
</h2>
                                <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rec']->value['detail'], ENT_QUOTES, 'UTF-8', true);?>
</p>
                                <p><?php echo smarty_function_html_options(array('name'=>'colors','values'=>$_smarty_tpl->tpl_vars['rec']->value['colors_data'],'output'=>$_smarty_tpl->tpl_vars['rec']->value['colors_data']),$_smarty_tpl);?>
</p>
                                <p><?php echo smarty_function_html_radios(array('name'=>'size','values'=>$_smarty_tpl->tpl_vars['rec']->value['size_data'],'output'=>$_smarty_tpl->tpl_vars['rec']->value['size_data']),$_smarty_tpl);?>
</p>
                                <p class="price"><?php echo $_smarty_tpl->tpl_vars['rec']->value['price'];?>
円</p>
                                <p class="cartlink"><input type="submit" value="Add to Cart"></p>
                            </div>
                        </form>
                    </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </div>
        </div>
    </body>
</html>
<?php }
}
