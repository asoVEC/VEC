<?php
/*
* To change this license header, choose License Headers in Project Properties.
* To change this template file, choose Tools | Templates
* and open the template in the editor.
*/
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ホームページ</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="../css/css.css" rel="stylesheet" media="screen">
    </head>
    <body>
        <a href="#" rel="tooltip" data-toggle="tooltip" data-placement="bottom" title="this is tooltip">tooltip</a>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-header">

                <!--ブランド名 ロゴ名の表示-->
                <a class="navbar-brand" href="#">VEC</a>




                <!--                トグルボタンの設置
                                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="nav-content">
                                                    <span class="icon-bar">ユーザ</span>
                                                    <span class="icon-bar">買い物カゴ</span>
                                                    <span class="icon-bar">検索</span>
                                                </button>-->
            </div>
            <div id="nav-content" class="collapse navbar-collapse">

                <!--                    リンクのリスト メニューリスト
                -->                    <ul class="nav navbar-nav">
                    <li><a href="">長野さん、ようこそ</a></li>
                    <li><a href="">買い物カゴ <span class="badge">12</span></a></li>
                    <!--<li><a href="">Link3</a></li>-->
                </ul>


                <!--検索フォーム-->
                <form class="navbar-form navbar-static-top" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="商品検索">
                    </div>
                    <button type="submit" class="btn btn-default">検索</button>
                </form>
            </div>
        </nav>
        <header class="jumbotron col-lg-10 col-lg-offset-1"></header>

        <form class="navbar-form navbar-static-top hidden-lg hidden-md hidden-sm" role="search">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="商品検索">
            </div>
            <button type="submit" class="btn btn-default">検索</button>
        </form>

        <div class="container main-content">
            <div class="row">
                <div class="container main-content">
                    <div class="row">


                        <div class="col-md-3 col-lg-3">
                            <ul class="nav nav-pills nav-stacked">
                                <li class="active"><a href="#">カテゴリ一覧</a></li>
                                <div class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">肉 <b class="caret"></b></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><div class="frame" style="background: url(/VEC/img/fdjyagaimo.jpg) center center no-repeat;"></div></li>
                                        <li><a href="#">松阪牛</a></li>
                                        <li><a href="#">なんとか牛</a></li>
                                        <li><a href="#">豚</a></li>
                                    </ul>
                                </div>
                                <div id='cssmenu'>
                                    <li class='has-sub'><a href='#'><span>肉・卵</span></a>
                                        <ul>
                                            <li><div class="frame" style="background: url(/VEC/img/fd_ninjin.jpg) center center no-repeat;"></div></li>
                                            <li><div class="frame" style="background: url(/VEC/img/fdjyagaimo.jpg) center center no-repeat;"></div></li>
                                        </ul>
                                </div>
                                <li><a href="#">肉・卵</a></li>
                                <li><a href="#">魚介</a></li>
                                <li><a href="#">野菜</a></li>
                                <li><a href="#">果物</a></li>
                                <li><a href="#">穀物</a></li>
                                <li><a href="#">調味料</a></li>
                                <li><a href="#">加工食品</a></li>
                                <li><a href="#">菓子</a></li>
                            </ul>
                        </div>


                        <body>
                            <div class="col-sm-12">　</div>
                            <div class="col-sm-12">　</div>
                            <div class="col-sm-12">　</div>
                            <div class="col-sm-12">　</div>
                            <div class="col-sm-12">　</div>
                            <div class="col-sm-12">　</div>
                            <div class="col-sm-12">　</div>
                            <div class="col-sm-12">　</div>
                            <div class="row">
                                <div class="panel panel-default col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 ">
                                    <div class="panel-body">
                                        <div class="container">
                                            <div class="col-xs-12 col-sm-8 col-md-8 col-md-offset-2 col-sm-offset-3 col-xs-8 h1">ログインしてください</div>
                                            <div class="col-sm-12">　</div>
                                            <div class="col-sm-12">　</div>
                                            <div class="col-sm-12">　</div>
                                            <div class="row">

                                                <form action="#" class="form-horizontal">
                                                    <div class="form-group">

                                                        <label for="input-mail" class="col-sm-3 control-label">メールアドレス</label>
                                                        <div class="col-sm-6">
                                                            <input type="email" class="form-control" id="input-mail" placeholder="メールアドレス" required="required">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="input-passward" class="col-sm-3 control-label">パスワード</label>
                                                        <div class="col-sm-6">
                                                            <input type="email" class="form-control" id="input-passward" placeholder="パスワード" required="required">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-offset-7 col-sm-10">
                                                            <button type="submit" class="btn btn-default ">ログイン</button>
                                                        </div>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <script src="//code.jquery.com/jquery.js"></script>
                            <script src="../js/bootstrap.min.js"></script>
                        </body>
                    </div>
                </div>
                <?php include './fotter.html'; ?>
                </body>
                </html>
