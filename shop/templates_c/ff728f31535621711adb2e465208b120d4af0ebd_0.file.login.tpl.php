<?php
/* Smarty version 3.1.30, created on 2017-01-24 03:48:34
  from "c:\xampp\htdocs\shop\templates\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5886c082f0edd9_46159539',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff728f31535621711adb2e465208b120d4af0ebd' => 
    array (
      0 => 'c:\\xampp\\htdocs\\shop\\templates\\login.tpl',
      1 => 1485225629,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5886c082f0edd9_46159539 (Smarty_Internal_Template $_smarty_tpl) {
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
                <h3>Login</h3>

                <p>Login ID：<input type="text" name="login_id" value="<?php echo htmlspecialchars($_SESSION['login_id'], ENT_QUOTES, 'UTF-8', true);?>
"><span class="error"><?php echo $_smarty_tpl->tpl_vars['error_login_id']->value;?>
</span></p>
                <p>Password：<input type="password" name="password" value="<?php echo htmlspecialchars($_SESSION['password'], ENT_QUOTES, 'UTF-8', true);?>
" style="width:50px"></p>
                
                <p><input type="submit" value="Sign In"></p>
                </form>
                
				<p class="error"><?php echo $_smarty_tpl->tpl_vars['error_db']->value;?>
</p>
            </div>
				
        </div>
    </body>
</html>

<?php }
}
