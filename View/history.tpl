{extends file='View/settings.tpl'}
{block content} 
	<div class="row">
		<div class ="col-lg-offset-1 col-lg-3" ><h1>購入履歴</h1></div>
	</div>
	<div class="row">
		<div class="col-lg-3 col-lg-offset-3">
			商品名
		</div>
		<div class="col-lg-2">
			購入日
		</div>
		<div class="col-lg-1">
			単価
		</div>
		<div class="col-lg-1">
			個数
		</div>
		<div class="col-lg-2">
			合計
		</div>
	</div>
	{if $orders == null}
		<p style="padding-top:50px">{$message}</p>
	{/if}
	{foreach $orders as $item}
		{foreach $item->getDetails() as $items}
			<div class="row">
				<div class="col-lg-3 " >
					<a href="/VEC/product/productdetails/{$items['productNo']}">
						<div class="frame" style="height:100px; background: url(/VEC/img/{$items['image']}) center center no-repeat;"></div>
					</a>
				</div>
				<div class="col-lg-3" style="position:relative;top:50px;">
					<a href="/VEC/product/productdetails/{$items['productNo']}">{$items['productName']}</a>
				</div>
				<div class="col-lg-2" style="position:relative;top:50px;">
					{$item->getOrderDate()}
				</div>
				<div class="col-lg-1" style="position:relative;top:50px;">
					¥{$items['price']}
				</div>
				<div class="col-lg-1" style="position:relative;top:50px;">
					{$items['number']}個
				</div>
				<div class="col-lg-1" style="position:relative;top:50px;">
					¥{$items['price'] * $items['number']}
				</div>
			</div>
		{/foreach}

	{/foreach}
{/block}