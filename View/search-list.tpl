{extends file='View/base.tpl'}
{block title}検索結果{/block}
{block content}
    {$smarty.post.page}ページ目
    <br />
    {*//↓データ内容を表示する部分*}
    {foreach $array.deta as $deta}
        <div class="label">{$deta['product_name']}</div>
        <a href="/VEC/product/productdetails/{$deta['product_no']}">
                    <div class="frame" style="background: url(/VEC/img/{$deta['image']}) center center no-repeat;" ></div>
                    </a>
    {/foreach}


    {*    ページング*}
    <nav>
        <ul class="pager">
            {if $array.current_page != 1}
                <li><a href='/VEC/product/{$array.name}/{$smarty.post.page - 1}'>前のページへ</a></li>
                {/if}
                {if $array.current_page != $array.max_page}
                <li><a href='/VEC/product/{$array.name}/{$smarty.post.page + 1}'>次のページへ >></a></li>
                {/if}
        </ul>
    </nav>
    {*検索条件にあてはまるものがあるかぎり繰り返す*}
    {*    {foreach}
    {/foreach}*}
{/block}