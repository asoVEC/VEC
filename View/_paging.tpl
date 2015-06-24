{section name=cnt loop=$SA.max_page}
	{if $smarty.section.cnt.first and $smarty.get.page!=1}
	<a href='?page={$smarty.get.page-1}'>←前の{$SA.pager}件へ</a>
	{/if}
	{if $smarty.section.cnt.iteration==$smarty.get.page}
	<em>{$smarty.section.cnt.iteration}</em>
	{else}
	<a href="?page={$smarty.section.cnt.iteration}">{$smarty.section.cnt.iteration}</a>
	{/if}
	{if $smarty.section.cnt.last and $smarty.get.page!=$smarty.section.cnt.iteration}
	<a href='?page={$smarty.get.page+1}'>→次の{if $SA.pager*$smarty.get.page.page<$SA.row}{$SA.pager}{else}{$SA.row-$SA.pager*$smarty.get.page}{/if}件へ</a>
	{/if}
{/section}