{extends file='View/layout.tpl'}

{block main}
    <div class="panel">
    <div class="col-md-10 col-lg-10">
        <div class="col-lg-10"><h2>ショッピングカート</h2></div>
{*        {foreach $item.deta as $deta}*}
        <div class="col-lg-10"><hr /></div>
        <div class="col-lg-3">
            画像
        </div>
        <div class="col-lg-4">
            説明<br />説明<br />説明<br />説明<br />説明<br />
        </div>
        <div class="col-lg-2">
            価格
        </div>
        <div class="col-lg-1">
            数量
        </div>
{*        {/foreach}*}
    </div>
    <div class="col-md-2 col-lg-2">
        <input type="button" value="レジに進む" class="btn">
    </div>
{/block}