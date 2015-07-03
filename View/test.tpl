{extends file='View/base.tpl'}
{block title}おためし{/block}
{block content}
    <a href="javascript:void(0);" data-toggle="popover" data-html="true" data-placement="bottom" data-title="Aipo.comのSプランに登録します。" data-content="このプランでは期間やユーザー数など無制限に、完全無料でご利用いただけます。">この登録により何ができますか？</a>
<script>
$('.tooltip-tool').tooltip({
            selector: "a[data-toggle=tooltip]"
        })
$("a[data-toggle=popover]").popover()()

</script>    
{/block}