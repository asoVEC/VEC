{extends file='View/base.tpl'}
{block title}検索結果{/block}
{block content}
    現在のページは{$smarty.post.page}
    <br />
    {$array.start + 1}個目から{$array.start + $array.display_quanity}個目のデータを表示しています。

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
        <div class="panel panel-info">
            <div class="panel-heading"><a href="/VEC/product/productdetails/{$deta['product_no']}">{$deta['product_name']}</a></div>
            <div class="panel-body">
                写真
            </div>
        </div>
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