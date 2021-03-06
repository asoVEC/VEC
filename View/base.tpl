{extends file='View/layout.tpl'}
{block main}
    
    {if $purchased != null}
    <div class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title">購入が完了しました。</h4>
                </div>
                <div class="modal-body">
                    <p>またのご利用お待ちしております！！</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- ここでscript -->
    <script>
        jQuery(document).ready(function () {
            jQuery('.modal').modal('show');
        });
    </script>
    {/if}


    <div class="row">
        <div class="col-lg-2">
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
        <div class="col-lg-9 col-lg-offset-1 content-area">
            {block content}
                <div class="row">
                    {section name=cnt start=0 loop=5}
                        <span class="col-lg-4">
                            <nobr>
                                <a href="/VEC/product/productdetails/{$products[$smarty.section.cnt.index]->getProductNo()}">
                                    <div class="frame" style="background: url(/VEC/img/{$products[$smarty.section.cnt.index]->getImage()}) center no-repeat;" ></div>
                                    <div class="label">{$products[$smarty.section.cnt.index]->getProductName()}</div>
                                    {*									<div class="label-price">¥{$products[$smarty.section.cnt.index]->getPrice()}</div>*}
                                </a>
                            </nobr>
                        </span>
                    {/section}
                </div>
            {/block}
        </div>
    </div>
{/block}

