{extends file='View/layout.tpl'}
{block main}
{block side}
       <div class="container main-content">
            <div class="row">
                <div class="col-md-3 col-lg-3">
                    <ul class="nav nav-pills nav-stacked">
                        <li class="active"><a href="#">カテゴリ一覧</a></li>
                        <li><a href="/VEC/Controller/product/meetlist/1">肉・卵</a></li>
                        <li><a href="/VEC/Controller/product/fishlist/1">魚介</a></li>
                        <li><a href="/VEC/Controller/product/vegelist/1">野菜</a></li>
                        <li><a href="/VEC/Controller/product/fruitslist/1">果物</a></li>
                        <li><a href="/VEC/Controller/product/cereallist/1">穀物</a></li>
                        <li><a href="/VEC/Controller/product/spiceslist/1">調味料</a></li>
                        <li><a href="/VEC/Controller/product/processinglist/1">加工食品</a></li>
                        <li><a href="/VEC/Controller/product/pastrylist/1">菓子</a></li>
                    </ul>
                </div>
                {/block}
                <div class="col-md-9 content-area">
                {block content}
                
                    <div class="label">{$name1}</div>
                    <div class="frame" style="background: {$food1} center center no-repeat;"></div>
                    <div class="label">{$name2}</div>
                    <div class="frame" style="background: {$food2} center center no-repeat;"></div>
                    <div class="label">{$name3}</div>
                    <div class="frame" style="background: {$food3} center center no-repeat;"></div>
                    <div class="label">{$name4}</div>
                    <div class="frame" style="background: {$food4} center center no-repeat;"></div>
                    <div class="label">{$name5}</div>
                    <div class="frame" style="background: {$food5} center center no-repeat;"></div>
                

                    {/block}
                    </div>
                    
                                </div>
        </div>
{/block}

