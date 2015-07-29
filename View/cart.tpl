{extends file='View/layout.tpl'}
{block header}
{/block}
{block main} 
	<a style="position: absolute;top:70px;left:30px" href="javascript:history.go(-2)"><img src="/vec/img/back.gif" width="70px" alt="back"></a>
    <div class="row col-lg-10">
		<h2><img style="position:relative;top:-20px;" src="/vec/img/cart.png" height="70px">カート</h2>
        <div class="row">
			<div class="col-lg-1">
				
			</div>
            <div class="col-lg-2 col-lg-offset-3">
                商品名
            </div>
            <div class="col-lg-2">
                単価
            </div>
            <div class="col-lg-1">
                個数
            </div>
            <div class="col-lg-1">
                小計
            </div>
        </div>
        {if $item == null}
            <p style="padding-top:50px">カートに商品はありません</p>
        {/if}
        {foreach $item as $data}

            <div class="row">
                <div class="col-lg-10"><hr /></div>
                <div class="col-lg-2 col-lg-offset-1" >
                    <a href="/VEC/product/productdetails/{$data['product_no']}">
                        <div class="frame" style="height:100px; background: url(/VEC/img/{$data['image']}) center center no-repeat;"></div>
                    </a>
                </div>
                <div class="col-lg-2 col-lg-offset-1" style="position:relative;top:50px;">
                    <a href="/VEC/product/productdetails/{$data['product_no']}">{$data['productName']}</a>
                </div>
                <div class="col-lg-2" style="position:relative;top:50px;">
                    ¥{$data['price']}
                </div>
                <div class="col-lg-1" style="position:relative;top:50px;">
                    {$data['number']}個
                </div>
                <div class="col-lg-1" style="position:relative;top:50px;">
                    ¥{$data['price']*$data['number']}
                </div>
				<div class="col-lg-2" style="position:relative;top:50px;">
                    <form action="/VEC/user/cart" method="post">
						<input type="hidden" name="delete" value="{$data['product_no']}"></input>
						<input type="submit" class=" btn-danger" value="削除"></input>
					</form>
                </div>

            </div>
        {/foreach}
    </div>
    {if $item != null}
        <div id="fixed_cart" class="col-lg-offset-10 col-lg-2" style="border: 1px solid #aaa;">{*class=row,colの使い方違うけどゆるして*}
            <p style="padding:10px">合計:</p>
            ¥<span style="color:blue; font-size: 30px">{$total}</span>
            <br />
            <br />
            <div class="col-lg-offset-5">
                <form action="/VEC/buy/info" class="form-horizontal" method="post">
                    <input type="submit" class="btn btn-warning" style="color : #222" value="レジに進む" class="btn">
                </form>
            </div>
        </div>
    {/if}

{/block}