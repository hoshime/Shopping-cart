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
                
                <h3>Confirmation Selected Items</h3>

                <h4>Purchased Items</h4>
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
				
                <h4>Price</h4>
				<p>Total：{$goukei}</p>
				<p>Tax：{$zei}</p>
				<p>Total Price with Tax：{$zeikomi}</p>

				
                <h4>Shipping Address</h4>
                <p>Full Name：{$smarty.session.name|escape}</p>
                <p>Postal Code：{$smarty.session.zipcode1|escape}-{$smarty.session.zipcode2|escape}</p>
                <p>Prefecture：{$pref}
                <p>Address：{$smarty.session.address|escape}</p>
                <p>Telephone：{$smarty.session.tel|escape}</p>
                <p>Email：{$smarty.session.mail|escape}</p>
                
				<form method="POST">
                <p ><input type="button" value="Back" onClick="document.location='delivery.php';" style="float: left;">
                <input type="submit" value="Confirm Order" style="float: right;"></p>
                </form>
				<div class="error" style="float:right;">{$error_db}</div>
				
                
            </div>
        </div>
    </body>
</html>

