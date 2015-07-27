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
                単価
            </div>
            <div class="col-lg-2">
                個数
            </div>
            <div class="col-lg-2">
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
                <div class="col-lg-3" style="position:relative;top:50px;">
                    <a href="/VEC/product/productdetails/{$data['product_no']}">{$data['productName']}</a>
                </div>
                <div class="col-lg-2" style="position:relative;top:50px;">
                    ¥{$data['price']}
                </div>
                <div class="col-lg-2" style="position:relative;top:50px;">
                    {$data['number']}個
                </div>
                <div class="col-lg-2" style="position:relative;top:50px;">
                    ¥{$data['price']*$data['number']}
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