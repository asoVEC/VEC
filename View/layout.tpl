<html>
    <head>
        <meta charset="UTF-8">

        <title>{block title}ホームページ{/block}</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="/VEC/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="/VEC/css/css.css" rel="stylesheet" media="screen">
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-header">

                <!--ブランド名 ロゴ名の表示-->
                <a class="navbar-brand" href="/VEC/">VEC</a>
            </div>
            <div id="nav-content" class="collapse navbar-collapse">
                <!--                    リンクのリスト メニューリスト-->
                <ul class="navbar-right nav navbar-nav">
                    <li class="dropdown">
                        <!-- ここが表示されるボタン <a>タグでもOK -->
                        <div class="dropdown-toggle" ></a>
                            アカウントサービス<span class="caret"></span>
                            <br />
                            {if $smarty.session.userName == null}
                                <a href="/VEC/Controller/user/login">ログインする</a>
                            {else}
                                ようこそ、{$smarty.session.userName}さん
                            {/if}
                        </div>
                        <!-- ボタンここまで -->
                        <!-- ここはボタンを押すと表示されるリスト -->
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                            {if $smarty.session.userName != null}{*ログインしてる場合のみ表示*}
                                <li  role="presenetation"><a role="menuitem" tabindex="-1" href="#">会員情報変更</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="/VEC/Controller/user/logout">ログアウト</a></li>
                            {else} 
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="/VEC/Controller/user/signup">会員登録</a></li>
                            {/if}
                        </ul>
                            <!-- リストここまで -->
                    </li>
                        <li class="divider"><a href="">買い物カゴ <span class="badge">{$amount_cart}</span></a></li>
                    </ul>
                    {*                    {include file='/VEC/base.tpl'}*}
                    <!--検索フォーム-->
                    <form class="navbar-form navbar-static-top" role="search" method="post" action="/VEC/Controller/product/searchlist/1">
                        <div class="form-group col-md-offset-1">
                            <input type="text" class="form-control" placeholder="商品検索" size="60pix">
                        </div>
                        <button type="submit" class="btn btn-default">検索</button>
                    </form>
                </div>
            </nav>
            <header class="jumbotron col-lg-10 col-lg-offset-1"></header>
                {*        すまほばー*}
            <form class="navbar-form navbar-static-top hidden-lg hidden-md hidden-sm" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="商品検索">
                </div>
                <button type="submit" class="btn btn-default">検索</button>
            </form>
            {block main}
            {/block}
        </div>
    </div>
</div>
</div>
<footer class="container-fluid ">
    <small><a href="/">Copyright (C) 2015-2015 vec.aso All Rights Reserved.</a></small>
</footer>
</body>
</html>