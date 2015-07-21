{extends file='View/layout.tpl'}
{block header}
{/block}	
{block main}
    <div class="panel">
		<div class="col-lg-10"><h2>ショッピングカート</h2></div>
	</div>
	<div class="row col-lg-10">


		<div class="row">
			<div class="col-lg-4 col-lg-offset-3">
				商品名
			</div>
			<div class="col-lg-1">
				単価
			</div>
			<div class="col-lg-1">
				個数
			</div>
			<div class="col-lg-2">
				小計
			</div>
		</div>
		{*        {foreach $item.deta as $deta}*}
		<div class="row">
			<div class="col-lg-10"><hr /></div>
			<div class="col-lg-2 col-lg-offset-1" >
				<div class="frame" style="height:100px; background: {$item[0]['imgPath']} center center no-repeat;"></div>
			</div>
			<div class="col-lg-4" style="position:relative;top:50px;">
				{$item[0]['productName']}<br />
				{$item[0]['explanation']}
			</div>
			<div class="col-lg-1" style="position:relative;top:50px;">
				¥{$item[0]['price']}
			</div>
			<div class="col-lg-1" style="position:relative;top:50px;">
				{$item[0]['number']}個
			</div>
			<div class="col-lg-2" style="position:relative;top:50px;">
				¥{$item[0]['price']*$item[0]['number']}
			</div>
		</div>
	</div>
	<div class="row col-lg-2" style="border: 1px solid #aaa;  left:10px">
		<p style="padding:10px">合計: ¥{$subtotal}</p>
		<br />
		<br />
		<div class="col-lg-offset-5">
			<input type="button" class="btn btn-warning" style="color : #222" value="レジに進む" class="btn">
		</div>
	</div>
	{*        {/foreach}*}
{/block}