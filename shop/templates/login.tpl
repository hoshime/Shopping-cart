<!DOCTYPE html>
<html>
    <head>
        <title>Shoping Cart</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
{*ヘッダ部分*}
        <div class="header">ClothesNepal</div>
        <div class="base">
{*左のエリア*}
            <div class="leftarea">
                <ul>
                    <li><a href="index.php" style="color:#e72678">ALL CATEGORIES</a></li>
                    <li><a href="index.php?category=1" style="color:#e72678">Jackets</a></li>
                    <li><a href="index.php?category=2" style="color:#e72678">Shirts</a></li>
                    <li><a href="index.php?category=3" style="color:#e72678">Pants</a></li>
                </ul>
                <p class="cartview"><a href="cart.php" style="color:#e72678">View Cart</a></p>
            </div>
{*右のエリア*}
            <div class="rightarea">
                <form method="POST">
                <h3>Login</h3>

                <p>Login ID：<input type="text" name="login_id" value="{$smarty.session.login_id|escape}"><span class="error">{$error_login_id}</span></p>
                <p>Password：<input type="password" name="password" value="{$smarty.session.password|escape}" style="width:50px"></p>
                
                <p><input type="submit" value="Sign In"></p>
                </form>
                
				<p class="error">{$error_db}</p>
            </div>
				
        </div>
    </body>
</html>

