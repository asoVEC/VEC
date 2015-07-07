
{extends file='View/base.tpl'}
{block content}
    {$smarty.session.currentUser}
	{$message}
{/block}