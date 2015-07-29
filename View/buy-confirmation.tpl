{extends file='View/layout.tpl'}
{block header}
{/block}
{block main}


    <div class="row">
        <div class="col-lg-6">
            <h2>注文内容の確認・変更</h2>
            <form class="form-horizontal">

                <h3>お届け先情報</h3>
                <div class="form-group">
                    <label for="name" class="col col-xs-12 col-sm-4 col-md-3 control-label">お名前：</label>
                    <div class="col-xs-offset-2 col-sm-offset-2 col-md-offset-3">{$name}</div>
                </div>

                <div class="form-group">
                    <label for="zipcode" class="col col-xs-12 col-sm-4 col-md-3 control-label">郵便番号：</label>
                    <div class="col-xs-offset-2 col-sm-offset-2 col-md-offset-3">{$zip}</div>
                </div>

                <div class="form-group">
                    <label for="town,building" class="col col-xs-12 col-sm-4 col-md-3 control-label">住所：</label>
                    <div class="col-xs-offset-2 col-sm-offset-2 col-md-offset-3">{$address}</div>
                </div>

                <div class="form-group">
                    <label for="tel" class="col col-xs-12 col-sm-4 col-md-3 control-label">電話番号：</label>
                    <div class="col-xs-offset-2 col-sm-offset-2 col-md-offset-3">{$phone}</div>
                </div>

            </form>


        </div>


        <div class="col-lg-6">
            <form class="form-horizontal" action="/VEC/buy/process" method="post">
                <div class="form-group" style="position:relative;top:160px;">
                    <div class="col-lg-6 control-label">合計：</div>
                    <div class="col-lg-6" style="font-size:2em;">¥{$total}-¥{$usePoint}</div>
                    <input type="submit" class="col-md-offset-8 btn btn-warning"  value="注文を確定する"> </input>
                </div>


                <input type="hidden" name="address" value="{$address}">
                <input type="hidden" name="usePoint" value="{$usePoint}">

            </form>
        </div>
    </div>
    ご注文商品
    {foreach $carts as $data}
        <div class="row">
            <div class="col-lg-10"><hr /></div>
            <div class="col-lg-2 col-lg-offset-1" >
                <div class="frame" style="height:100px; background: url(/VEC/img/{$data->getProduct()->getImage()}) center center no-repeat;"></div>
            </div>
            <div class="col-lg-3" style="position:relative;top:50px;">
                {$data->getProduct()->getProductName()}
            </div>
            <div class="col-lg-2" style="position:relative;top:50px;">
                {$data->getQuantity()}個
            </div>
        </div>
    {/foreach}

{/block}