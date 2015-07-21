{extends file='View/layout.tpl'}
{block title}{/block}

{block main}
    <body>


        <div class="container main-content">
            {* <div class="row">*}
            {*                <div class="panel panel-default col-sm-6 col-sm-offset-3 col-md-6">*}
            {*    <div class="panel-body">
            <div class="container">*}
            {*                        <div class="col-xs-12 col-sm-10 col-md-10 col-md-offset-4 col-sm-offset-2 col-xs-8 "><h2>商品詳細</h2><div>*}
            {*                        <div class="col-xs-12 col-sm-10 col-md-10 col-md-offset-3 col-sm-offset-2 col-xs-8 h1"><br /></div>*}

            <div class="row">
                <div class="col-xs-6 col-md-4"></div>
                <div class="col-xs-6 col-md-4"><h2>商品詳細</h2></div>
                <div class="col-xs-6 col-md-4"></div>
            </div>


			<div class="row">
				<div class="col-md-offset-3 col-md-3 frame" style="background: url(/VEC/img/{$item['image']}) center center no-repeat;" ></div>
				<div class="col-md-6" style="padding: 10px; margin-bottom: 10px;
					 border: 1px solid #333333; border-radius: 10px;">
					価格:{$item['product_price']}<br>
					数量：
					<select name="quantity">
						<option value="1" selected="true">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
					</select>
					
					<button type="button" class="btn btn-warning">カートに追加</button> 
				</div>
			</div>
		</div>
	</div>





	<ul class="list-unstyled">
		<div class="row">
			<div class="col-md-6 col-lg-6"></div>
			<div class="col-md-3 col-lg-3"><h4>商品の特徴</h4></div>
			<div class="col-md-3 col-lg-3"></div>
		</div>

		<div class="row">
			<div class="col-md-6 col-lg-6"></div>
			<div class="col-md-3 col-lg-3"><h4>商品詳細情報</h4></div>
			<div class="col-md-3 col-lg-3"></div>
		</div>

	</ul>

</div>
<body style="background-image: url(./img/back22.gif);"></body>


{*    </div>
</div>
</div>
</div>
</div>
*}



</body>






{/block}