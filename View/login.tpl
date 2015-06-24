{extends file='View/layout.tpl'}
{block title}
    ログイン
    {/block}
{block main}
<html>
    <head>
        <meta charset="UTF-8">
        <title>ホームページ</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="/VEC/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="/VEC/css/css.css" rel="stylesheet" media="screen">
    </head>
    <body>

        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-header">

                <!--ブランド名 ロゴ名の表示-->
                <a class="navbar-brand" href="#">VEC</a>
            </div>
            <div id="nav-content" class="collapse navbar-collapse">
                <!--                    リンクのリスト メニューリスト-->
                <div class="navbar-right">

                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <!-- ここが表示されるボタン <a>タグでもOK -->
                            <a href="" class="dropdown-toggle navbar-right navbar-collapse" id="dropdownMenu1" data-toggle="dropdown"></a>
                            アカウントサービス
                            <span class="caret"></span>
                            </button>
                            <!-- ボタンここまで -->

                            <!-- ここはボタンを押すと表示されるリスト -->
                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
                                <li role="presentation" class="divider"></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
                            </ul>
                            <!-- リストここまで -->
                        </li>
                        <li><a href="">買い物カゴ <span class="badge">12</span></a></li>
                    </ul>
                </div>

                <!--検索フォーム-->
                <form class="navbar-form navbar-static-top" role="search">
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
        <div class="container main-content">
            <div class="row">
                <div class="panel panel-default col-sm-6  col-md-6">
                    <div class="panel-body">
                        <div class="container">
                            <div class="col-xs-12 col-sm-8 col-md-8 col-md-offset-2 col-sm-offset-3 col-xs-8 h1">ログインしてください</div>
                            <div class="col-sm-12">　</div>
                            <div class="col-sm-12">　</div>
                            <div class="col-sm-12">　</div>
                            <div class="row">
                                <form action="/VEC/Controller/home/login" class="form-horizontal" method="post">

                                    <div class="form-group">

                                        <label for="input-mail" class="col-sm-3 control-label">メールアドレス</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="mail" id="input-mail" placeholder="メールアドレス" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="input-passward" class="col-sm-3 control-label">パスワード</label>
                                        <div class="col-sm-6">
                                            <input type="password" class="form-control" name="password" id="input-passward" placeholder="パスワード" required="required">
                                        </div>
                                    </div>
                                    <span style='color:red'>{$login_message}</span>
                                    <div class="form-group">
                                        <div class="col-sm-offset-7 col-sm-10">
                                            <button type="submit" class="btn btn-default ">ログイン</button>
                                        </div>
                                    </div>
                                </form>
                            </div>{*row*}
                        </div>{*container*}
                        {/block}
