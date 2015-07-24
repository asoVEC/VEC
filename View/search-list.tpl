{extends file='View/base.tpl'}
{block title}検索結果{/block}
{block content}
    {if $nul==NULL}
        {$smarty.post.page}ページ目
        <br />
        <div class="row">
        {foreach $array.deta as $deta}
            <span class="col-lg-3">
                
                <a href="/VEC/product/productdetails/{$deta['product_no']}">
                    <div class="frame" style="background: url(/VEC/img/{$deta['image']}) center center no-repeat;" ></div>
                    <div class="label">{$deta['product_name']}</div>
                </a>
            </span>
        {/foreach}
</div>


        {*    ページング*}
        <div class="row">
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
            </div>
    {else}
        {$nul}
    {/if}
    {*検索条件にあてはまるものがあるかぎり繰り返す*}
    {*    {foreach}
    {/foreach}*}
{/block}