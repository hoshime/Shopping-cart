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
                <h3>Input Shipping Address</h3>

                <p>Full Name：<input type="text" name="name" value="{$smarty.session.name|escape}"><span class="error">{$error_name}</span></p>
                <p>Post Code：<input type="text" name="zipcode1" value="{$smarty.session.zipcode1|escape}" style="width:50px">-<input type="text" name="zipcode2" value="{$smarty.session.zipcode2|escape}"  style="width:50px"></p>
                <p>Prefectures：{html_options name='prefecture' options=$prefecture_data selected=$smarty.session.prefecture}
                <p>Address：<input type="text" name="address" value="{$smarty.session.address|escape}"></p>
                <p>Telphone Number：<input type="text" name="tel" value="{$smarty.session.tel|escape}"></p>
                <p>Email Address：<input type="text" name="mail" value="{$smarty.session.mail|escape}"></p>
                
                <p><input type="submit" value="Proceed To Confirm"></p>
                </form>
                
            </div>
        </div>
    </body>
</html>

