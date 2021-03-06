<html>
    <head>
        <meta charset="UTF-8">

        <title>{block title}ホームページ{/block}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="/VEC/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="/VEC/css/css.css" rel="stylesheet" media="screen">
        <link href="/VEC/css/typeahead.css" rel="stylesheet" media="screen">
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script type="text/javascript" src="/VEC/js/bootstrap.js"></script>
        <script type="text/javascript" src="/VEC/js/typeahead.bundle.js"></script>
		<script type="text/javascript" src="/VEC/js/js.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-header">

                <!--ブランド名 ロゴ名の表示-->
                <a class="navbar-brand" href="/VEC/">VEC</a>
            </div>
            <div id="nav-content" class="collapse navbar-collapse navbar-inverse">
                <!--                    リンクのリスト メニューリスト-->
                <ul class="navbar-right nav navbar-nav">
                    <li class="dropdown">
                        <!-- ここが表示されるボタン <a>タグでもOK -->
						<div class="dropdown-toggle inverse" >
                            アカウントサービス<span class="caret"></span>
                            <br />
                            {if $smarty.session.userName == null}
                                <a href="/VEC/user/login">ログインする</a>
                            {else}
                                ようこそ、<span id="sessionName">{$smarty.session.userName}</span>さん
                            {/if}
                        </div>
                        
                        <!-- ボタンここまで -->
                        <!-- ここはボタンを押すと表示されるリスト -->
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                            {if $smarty.session.userName != null}{*ログインしてる場合のみ表示*}
                                    <li  role="presenetation"><a role="menuitem" tabindex="-1" href="/VEC/user/settings">会員情報変更</a></li>
                                    <li  role="presenetation"><a role="menuitem" tabindex="-1" href="/VEC/user/point">ポイント確認</a></li>
                                    <li  role="presenetation"><a role="menuitem" tabindex="-1" href="/VEC/user/history">購入履歴</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="/VEC/user/logout">ログアウト</a></li>
                                    {else} 
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="/VEC/user/signup">会員登録</a></li>
                                    {/if}
							</ul>
							<!-- リストここまで -->
						</li>
						<li class="divider"><a class="tl" href="/VEC/user/cart" data-placement="bottom" data-html="true"  
                                               data-toggle="tooltip" title="
											   {foreach $carts as $data}
												   {$data->getProduct()->getProductName()}<br /><img src='/VEC/img/{$data->getProduct()->getImage()}' width='80px' height='80px'><br />
											   {/foreach}
											   ">
                                買い物カゴ <span class="badge">{$amount_cart}</span></a></li>
						</li>
					</ul>

                    <!--検索フォーム-->
					<form class="navbar-form navbar-static-top" role="search" method="post" action="/VEC/product/searchlist/1">
						<div class="form-group col-md-offset-1">
							<input type="text" class="form-control typeahead focus" id ="search" placeholder="商品検索" size="60pix" name="search">
						</div>
						<button type="submit" id="search-bt" class="btn btn-default" required="required">検索</button>
					</form>
				</div>
			</nav>
			{block header}
				<header class="jumbotron col-lg-10 col-lg-offset-1" ></header>
				{/block}
                {*すまほばー*}
			<form class="navbar-form navbar-static-top hidden-lg hidden-md hidden-sm" role="search">
				<div class="form-group">
					<input type="text" class="form-control typeahead" placeholder="商品検索">
				</div>
				<button type="submit" class="btn btn-default">検索</button>
			</form>       
			<div class="container main-content">
				{block main}
				{/block}

			</div>
			<nav class="container-fluid navbar-fixed-bottom">
				<small><a href="/vec">Copyright (C) 2015-2015 vec.aso All Rights Reserved.</a></small>
			</nav>
		</body>

		<script>
			var value = document.getElementById("search").value;

			$(document).ready(function () {
				$("#search-bt").click(function () {
				});
			});


			var substringMatcher = function (strs) {
				return function findMatches(q, cb) {
					var matches, substringRegex;

					// an array that will be populated with substring matches
					matches = [];

					// regex used to determine if a string contains the substring `q`
					substrRegex = new RegExp(q, 'i');

					// iterate through the pool of strings and for any string that
					// contains the substring `q`, add it to the `matches` array
					$.each(strs, function (i, str) {
						if (substrRegex.test(str)) {
							matches.push(str);
						}
					});

					cb(matches);
				};
			};

			var states = [
			{foreach from=$item item=rec}
				'{$rec}',
			{/foreach}

			];


			$('.typeahead').typeahead({
				hint: true,
				highlight: true,
				minLength: 1
			},
			{
				name: 'states',
				source: substringMatcher(states)
			});

			$(function () {
				$('.tl').tooltip();
			});
		</script>
	</html>