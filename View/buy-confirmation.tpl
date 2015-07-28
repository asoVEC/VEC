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
                    <div class="col-xs-offset-2 col-sm-offset-2 col-md-offset-3"></div>
                </div>

                <div class="form-group">
                    <label for="name" class="col col-xs-12 col-sm-4 col-md-3 control-label">住所：</label>
                    <div class="col-xs-offset-2 col-sm-offset-2 col-md-offset-3"></div>
                </div>

                <div class="form-group">
                    <label for="name" class="col col-xs-12 col-sm-4 col-md-3 control-label">電話番号：</label>
                    <div class="col-xs-offset-2 col-sm-offset-2 col-md-offset-3"></div>
                </div>

            </form>
            
            
        </div>

        <div class="col-lg-6">
            <form class="form-horizontal">

                <br>
                <br>

                <button type="button" class="btn btn-warning" > 注文を確定する </button>

                <h3>注文内容</h3>
                
                <div class="form-group">
                    <label for="name" class="col col-xs-12 col-sm-4 col-md-3 control-label">商品：</label>
                    <div class="col-xs-offset-2 col-sm-offset-2 col-md-offset-3"></div>
                </div>

                <div class="form-group">
                    <label for="name" class="col col-xs-12 col-sm-4 col-md-3 control-label">配送料・手数料：</label>
                    <div class="col-xs-offset-2 col-sm-offset-2 col-md-offset-3"></div>
                </div>

            </form>




        </div>

    </div>

{/block}