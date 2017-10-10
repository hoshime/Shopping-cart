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
                <h3>Already have an account?</h3>
				<p><input type="button" value="Sign In" onClick="document.location='login.php';"></p>
				
                <form method="POST">
                <h3>Create Account</h3>
                <p>Login ID：<input type="text" name="login_id" value="{$smarty.session.login_id|escape}"><span class="error">{$error_login_id}</span></p>
                <p>Password：<input type="password" name="password" value="{$smarty.session.password|escape}"><span class="error">{$error_password}</span></p>
                <p>Full Name：<input type="text" name="name" value="{$smarty.session.name|escape}"><span class="error">{$error_name}</span></p>
                <p>Postal Code：<input type="text" name="zipcode1" value="{$smarty.session.zipcode1|escape}" style="width:50px">-<input type="text" name="zipcode2" value="{$smarty.session.zipcode2|escape}"  style="width:50px"></p>
                <p>Prefecture：{html_options name='prefecture' options=$prefecture_data selected=$smarty.session.prefecture}
                <p>Address：<input type="text" name="address" value="{$smarty.session.address|escape}"></p>
                <p>Telephone：<input type="text" name="tel" value="{$smarty.session.tel|escape}"></p>
                <p>Email Address：<input type="text" name="mail" value="{$smarty.session.mail|escape}"></p>
                <p><input type="submit" value="Proceed To Order"></p>
                </form>
				<p class="error">{$error_db}</p>
                
            </div>
        </div>
    </body>
</html>

