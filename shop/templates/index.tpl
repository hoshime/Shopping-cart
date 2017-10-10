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
               {foreach from=$goods item=rec}
                    <div class="goods">
                        <form method="GET" action="cart.php">
                            <input type="hidden" name="id" value="{$rec.id}">
                            <img src="goodsimg/{$rec.imgfile}" />

                            <div class="goodsinfo">
                                <h2>{$rec.goodsname}</h2>
                                <p>{$rec.detail|escape}</p>
                                <p>{html_options name='colors' values=$rec.colors_data output=$rec.colors_data}</p>
                                <p>{html_radios name='size' values=$rec.size_data output=$rec.size_data}</p>
                                <p class="price">{$rec.price}円</p>
                                <p class="cartlink"><input type="submit" value="Add to Cart"></p>
                            </div>
                        </form>
                    </div>
                {/foreach}
            </div>
        </div>
    </body>
</html>
