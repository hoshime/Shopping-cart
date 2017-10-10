{$smarty.session.name} 

Thank you for shoping with us.

【Purchased item】
{foreach from=$goods item=rec}
{$rec.goodsname} Color：{$rec.colors} Size：{$rec.size} {$rec.price}円
{/foreach}
				
【Total Price】
Total：{$goukei}
Tax：{$zei}
total Price with Tax：{$zeikomi}
			
【Shipping Address】
Full Name：{$smarty.session.name}
Postal Code：{$smarty.session.zipcode1}-{$smarty.session.zipcode2}
Prefecture：{$pref}
：{$smarty.session.address}
Telephone：{$smarty.session.tel}
Email：{$smarty.session.mail}

-----------------------
ClothsNepal



