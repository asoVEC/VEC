{extends file='View/layout.tpl'}
{block header}
{/block}	
{block main} 
	<div class="row col-lg-10">


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
			<div class="col-lg-1">
				合計
			</div>
		</div>
		{if $orders == null}
			<p style="padding-top:50px">{$message}</p>
		{/if}
		{foreach $orders as $item}
			{foreach $item->getDetails() as $items}
				a
			{/foreach}
			{*<div class="row">
			<div class="col-lg-10"><hr /></div>
			<div class="col-lg-2 col-lg-offset-1" >
			<a href="/VEC/product/productdetails/{$item[$key]->getProductNo()}">
			<div class="frame" style="height:100px; background: url(/VEC/img/{$item[key]->getImage()}) center center no-repeat;"></div>
			</a>
			</div>
			<div class="col-lg-3" style="position:relative;top:50px;">
			<a href="/VEC/product/productdetails/{$item[$key]->getProductNo()}">{$item[$key]->getName()}</a>
			</div>
			<div class="col-lg-2" style="position:relative;top:50px;">
			¥{$data['price']}
			</div>
			<div class="col-lg-2" style="position:relative;top:50px;">
			{$data['number']}個
			</div>
			<div class="col-lg-2" style="position:relative;top:50px;">
			¥{}
			</div>
			</div>*}
		{/foreach}
	</div>
{/block}