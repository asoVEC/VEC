{extends file='View/layout.tpl'}
{block main}
	<div class="row">
		<div class="col-md-3 col-lg-3">
			{block side}
				<ul class="nav nav-pills nav-stacked">
					<li class="active"><a href="#">カテゴリ一覧</a></li>
					<li><a href="/VEC/product/meetlist/1">肉・卵</a></li>
					<li><a href="/VEC/product/fishlist/1">魚介</a></li>
					<li><a href="/VEC/product/vegelist/1">野菜</a></li>
					<li><a href="/VEC/product/fruitslist/1">果物</a></li>
					<li><a href="/VEC/product/cereallist/1">穀物</a></li>
					<li><a href="/VEC/product/spiceslist/1">調味料</a></li>
					<li><a href="/VEC/product/processinglist/1">加工食品</a></li>
					<li><a href="/VEC/product/pastrylist/1">菓子</a></li>
				</ul>
			{/block}
		</div>
		<div class="col-md-9 content-area">
			{block content}
				{section name=cnt start=0 loop=5}
					<nobr>
{*						<div style="padding-bottom:10px">*}
							<a href="/VEC/product/productdetails/{$products[$smarty.section.cnt.index]->getProductNo()}">
								<div class="frame" style="background: url(/VEC/img/{$products[$smarty.section.cnt.index]->getImage()}) center center no-repeat;"></div>
							</a>
							<a href="/VEC/product/productdetails/{$products[$smarty.section.cnt.index]->getProductNo()}">
								<div class="label">{$products[$smarty.section.cnt.index]->getProductName()}</div>
							</a>
							<span class="label-price">¥{$products[$smarty.section.cnt.index]->getPrice()}</span>
{*						</div>*}
					</nobr>


				{/section}
			{/block}
		</div>
	</div>
{/block}

