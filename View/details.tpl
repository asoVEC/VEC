{extends file='View/layout.tpl'}
{block title}{/block}

{block main}
    <body>


        <div class="container main-content">
            {* <div class="row">*}
            <div class="row">
                <div class="col-lg-offset-4 col-lg-8" style="padding-bottom:30px;"><h2>{$item['product_name']}</h2></div>
            </div>


			<div class="row">
				<div class="col-lg-offset-2 col-lg-2 frame" style="background: url(/VEC/img/{$item['image']}) center center no-repeat;" ></div>
				<div class="col-lg-4" style="padding: 10px; margin-bottom: 10px; border: 1px solid #333333; border-radius: 10px;">

					<form method="post" action="/vec/user/addCart">
						<input type="hidden" name="productNo" value="{$item['product_no']}">
						価格 : {$item['price']}<br>
						数量 : 
						<select name="quantity">
							<option value="1" selected="true">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
						</select>
						<div class="col-lg-offset-8 col-lg-4">
							<input type="submit" class="btn btn-warning" value="カートに追加">
						</div>
					</form>
				</div>
				<div class="cof-lg-4"></div>
			</div>{*div.row*}
			<div class="row">
				<div class="col-lg-offset-4 col-lg-8">
					<p style="color:#ed9c28;">商品の特徴</p>
					{$item['product_detail']}
				</div>
			</div>{*div.row*}

		</div>
	</div>


</div>
<body style="background-image: url(./img/back22.gif);"></body>

</body>

{/block}