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
                <h3>CART LIST</h3>
                {if count($smarty.session.cart) < 1}
                <p>Your Shopping Cart is Empty.</p>
                {else}
                <form method="POST"><input type="submit" value="Clear Items" class="cartclear"></form>
                {/if}
               {foreach from=$goods item=rec}
                    <div class="goods">
                        
                        <div class="cartinfo">
                            <h3>{$rec.goodsname}</h3>
                            <p>Color：{$rec.colors}</p>
                            <p>Size：{$rec.size}</p>
                            <p class="price">{$rec.price}円</p>
                        </div>
                    </div>
                {/foreach}
                {if count($smarty.session.cart) >= 1}
                <p><input type="button" value="Proceed To Member Registration" onClick="document.location='memberinput.php';"></p>
                {/if}
            </div>
        </div>
    </body>
</html>

