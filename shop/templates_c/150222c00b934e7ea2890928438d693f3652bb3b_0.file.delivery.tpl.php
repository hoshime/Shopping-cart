<?php
/* Smarty version 3.1.30, created on 2017-02-18 15:31:42
  from "/var/www/html/Ramesh2012/shop/templates/delivery.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58a7ea4e8f20b1_09404843',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '150222c00b934e7ea2890928438d693f3652bb3b' => 
    array (
      0 => '/var/www/html/Ramesh2012/shop/templates/delivery.tpl',
      1 => 1485226510,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a7ea4e8f20b1_09404843 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once '/var/www/html/Ramesh2012/shop/libs/plugins/function.html_options.php';
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
                <form method="POST">
                <h3>Input Shipping Address</h3>

                <p>Full Name：<input type="text" name="name" value="<?php echo htmlspecialchars($_SESSION['name'], ENT_QUOTES, 'UTF-8', true);?>
"><span class="error"><?php echo $_smarty_tpl->tpl_vars['error_name']->value;?>
</span></p>
                <p>Post Code：<input type="text" name="zipcode1" value="<?php echo htmlspecialchars($_SESSION['zipcode1'], ENT_QUOTES, 'UTF-8', true);?>
" style="width:50px">-<input type="text" name="zipcode2" value="<?php echo htmlspecialchars($_SESSION['zipcode2'], ENT_QUOTES, 'UTF-8', true);?>
"  style="width:50px"></p>
                <p>Prefectures：<?php echo smarty_function_html_options(array('name'=>'prefecture','options'=>$_smarty_tpl->tpl_vars['prefecture_data']->value,'selected'=>$_SESSION['prefecture']),$_smarty_tpl);?>

                <p>Address：<input type="text" name="address" value="<?php echo htmlspecialchars($_SESSION['address'], ENT_QUOTES, 'UTF-8', true);?>
"></p>
                <p>Telphone Number：<input type="text" name="tel" value="<?php echo htmlspecialchars($_SESSION['tel'], ENT_QUOTES, 'UTF-8', true);?>
"></p>
                <p>Email Address：<input type="text" name="mail" value="<?php echo htmlspecialchars($_SESSION['mail'], ENT_QUOTES, 'UTF-8', true);?>
"></p>
                
                <p><input type="submit" value="Proceed To Confirm"></p>
                </form>
                
            </div>
        </div>
    </body>
</html>

<?php }
}
