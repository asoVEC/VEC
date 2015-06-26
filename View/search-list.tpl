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

{*{if isset($smarty.get.page) && $smarty.get.page != 1}
<a href="?page={$smarty.get.page-1}"><<- 前</a>  
{else}
<<- 前  
{/if}


{$smarty.get.page} / {$tpage}


{if isset($smarty.get.page) && $smarty.get.page < $total_page}
  <a href="?page={$smarty.get.page+1}">次 ->></a>
{else}
  次 ->>
{/if}*}
{*{include file="View/_paging.tpl" paging_data=$paging_data pager_type="a" add_link_to_edge="1"}*}

{*{if $_GET['page'] <> ""}
    {assign $array.current_page = $_GET['page'] }
    {/if}*}
{*//↓すでにこのページにいたら・・・
if($_GET['page'] <> ""){
	$genzai_page = $_GET['page'];//$_GETでもらった数字が現在のページ
//↑サンプルコードでは $_GET['page']をエスケープ処理してませんが本番ではして下さい
	$start = ($genzai_page-1)*$hyouji_kazu;//表示スタート数（何個目から表示するか？）
}*}

現在のページは{$array.current_page}
<br />
{$array.start + 1}個目から{$array.start + $array.display_quanity}個目のデータを表示しています。
{$array.display_quanity}

{*//↓現在のページと何個のデータを表示しているのか表示する部分
$pageing_mes = '<p>現在のページは「'.$genzai_page.'」です。</p>'.
'<p>'.($start+1).'個目から'.(($start)+$hyouji_kazu).'個目のデータを表示しています</p>';*}

{*//↓これをつけないと 場合によっては １ページ目とか最後のページで表示件数がおかしくなる
if($genzai_page == $max_page){
$pageing_mes = '<p>現在のページは「'.$genzai_page.'」です。</p>'.
'<p>'.($start+1).'個目から'.$cnt.'個目のデータを表示しています</p>';
}*}
{*//↓データがない場合の処理（本番では必要です）
if($cnt == 0){
	$pageing_mes = '現在登録されているデータはありません';
}*}

{*echo $pageing_mes;*}


{*//↓データ内容を表示する部分*}
{foreach $array.deta as $deta}
    {$deta}
    {/foreach}
{*//↑内容を表示する部分終り*}


<nav>
<ul class="pager">
{if $array.current_page != 1}
    <li><a href="pageing.php?page='.($genzai_page-1).'"><< 前のページへ</a></li>
    {/if}
    {if $array.current_page != $array.max_page}
    <li><a href='?page={$smarty.get.page+1}'>次のページへ >></a></li>
        {/if}
        </ul>
</nav>
    {*検索条件にあてはまるものがあるかぎり繰り返す*}
{*    {foreach}
    {/foreach}*}
{/block}