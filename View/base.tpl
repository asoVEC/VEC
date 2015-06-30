{extends file='View/layout.tpl'}
{block main}
{block side}
       <div class="container main-content">
            <div class="row">
                <div class="col-md-3 col-lg-3">
                    <ul class="nav nav-pills nav-stacked">
                        <li class="active"><a href="#">カテゴリ一覧</a></li>
                        <li><a href="/VEC/Controller/product/searchlist/1">肉・卵</a></li>
                        <li><a href="#">魚介</a></li>
                        <li><a href="#">野菜</a></li>
                        <li><a href="#">果物</a></li>
                        <li><a href="#">穀物</a></li>
                        <li><a href="#">調味料</a></li>
                        <li><a href="#">加工食品</a></li>
                        <li><a href="#">菓子</a></li>
                    </ul>
                </div>
                {/block}
                {block content}
                <div class="col-md-9 content-area">
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
                </div>
            </div>
        </div>
                    {/block}
{/block}

