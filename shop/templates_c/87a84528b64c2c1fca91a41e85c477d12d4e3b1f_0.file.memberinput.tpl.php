<?php
/* Smarty version 3.1.30, created on 2017-02-18 15:30:43
  from "/var/www/html/Ramesh2012/shop/templates/memberinput.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58a7ea13f086a1_94365726',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '87a84528b64c2c1fca91a41e85c477d12d4e3b1f' => 
    array (
      0 => '/var/www/html/Ramesh2012/shop/templates/memberinput.tpl',
      1 => 1485226538,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a7ea13f086a1_94365726 (Smarty_Internal_Template $_smarty_tpl) {
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
                <h3>Already have an account?</h3>
				<p><input type="button" value="Sign In" onClick="document.location='login.php';"></p>
				
                <form method="POST">
                <h3>Create Account</h3>
                <p>Login ID：<input type="text" name="login_id" value="<?php echo htmlspecialchars($_SESSION['login_id'], ENT_QUOTES, 'UTF-8', true);?>
"><span class="error"><?php echo $_smarty_tpl->tpl_vars['error_login_id']->value;?>
</span></p>
                <p>Password：<input type="password" name="password" value="<?php echo htmlspecialchars($_SESSION['password'], ENT_QUOTES, 'UTF-8', true);?>
"><span class="error"><?php echo $_smarty_tpl->tpl_vars['error_password']->value;?>
</span></p>
                <p>Full Name：<input type="text" name="name" value="<?php echo htmlspecialchars($_SESSION['name'], ENT_QUOTES, 'UTF-8', true);?>
"><span class="error"><?php echo $_smarty_tpl->tpl_vars['error_name']->value;?>
</span></p>
                <p>Postal Code：<input type="text" name="zipcode1" value="<?php echo htmlspecialchars($_SESSION['zipcode1'], ENT_QUOTES, 'UTF-8', true);?>
" style="width:50px">-<input type="text" name="zipcode2" value="<?php echo htmlspecialchars($_SESSION['zipcode2'], ENT_QUOTES, 'UTF-8', true);?>
"  style="width:50px"></p>
                <p>Prefecture：<?php echo smarty_function_html_options(array('name'=>'prefecture','options'=>$_smarty_tpl->tpl_vars['prefecture_data']->value,'selected'=>$_SESSION['prefecture']),$_smarty_tpl);?>

                <p>Address：<input type="text" name="address" value="<?php echo htmlspecialchars($_SESSION['address'], ENT_QUOTES, 'UTF-8', true);?>
"></p>
                <p>Telephone：<input type="text" name="tel" value="<?php echo htmlspecialchars($_SESSION['tel'], ENT_QUOTES, 'UTF-8', true);?>
"></p>
                <p>Email Address：<input type="text" name="mail" value="<?php echo htmlspecialchars($_SESSION['mail'], ENT_QUOTES, 'UTF-8', true);?>
"></p>
                <p><input type="submit" value="Proceed To Order"></p>
                </form>
				<p class="error"><?php echo $_smarty_tpl->tpl_vars['error_db']->value;?>
</p>
                
            </div>
        </div>
    </body>
</html>

<?php }
}
