{extends file='View/base.tpl'}
{block title}検索結果{/block}
{block content}
{*    とりあえず　残す*}
{*    <a onclick="fnNaviPage('1'); return false;" href="?category_id=0&pageno=1"><<前へ</a>
<a onclick="fnNaviPage('1'); return false;" href="?category_id=0&pageno=1">1</a>
<strong>2</strong>
<a onclick="fnNaviPage('3'); return false;" href="?category_id=0&pageno=3">3</a>
<a onclick="fnNaviPage('4'); return false;" href="?category_id=0&pageno=4">4</a>
<a onclick="fnNaviPage('5'); return false;" href="?category_id=0&pageno=5">5</a>
<a onclick="fnNaviPage('3'); return false;" href="?category_id=0&pageno=3">次へ>></a>

<ul class="pagination">
    <li class="prev">
        <a href="?category_id=0&amp;pageno=1" onclick="fnNaviPage(1);return false;">
            <img src="/shop/user_data/packages/riodepiedra/img/page_prev.gif" width="41" height="25" alt="PREV" />
        </a>
    </li>
    <li class="next">
        <a href="?category_id=0&amp;pageno=3" onclick="fnNaviPage(3);return false;">
            <img src="/shop/user_data/packages/riodepiedra/img/page_next.gif" width="41" height="25" alt="NEXT" />
        </a>
    </li>
</ul>*}

{if isset($smarty.get.page) && $smarty.get.page != 1}
<a href="?page={$smarty.get.page-1}"><<- 前</a>  
{else}
<<- 前  
{/if}


{$smarty.get.page} / {$tpage}


{if isset($smarty.get.page) && $smarty.get.page < $total_page}
  <a href="?page={$smarty.get.page+1}">次 ->></a>
{else}
  次 ->>
{/if}

    {*検索条件にあてはまるものがあるかぎり繰り返す*}
{*    {foreach}
    {/foreach}*}
{/block}