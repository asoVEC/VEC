<html>
    <head>
        <meta charset="UTF-8">
        <title>ホームページ</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="../css/css.css" rel="stylesheet" media="screen">
        <script>
            jQuery(function ($) {
                $('a[rel=tooltip]').tooltip();
            });
        </script>
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
                <div class="col-md-3 col-lg-3">
                    <ul class="nav nav-pills nav-stacked">
                        <li class="active"><a href="#">カテゴリ一覧</a></li>
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">肉 <b class="caret"></b></a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><div class="frame" style="background: url(../img/fdjyagaimo.jpg) center center no-repeat;"></div></li>
                                <li><a href="#">松阪牛</a></li>
                                <li><a href="#">なんとか牛</a></li>
                                <li><a href="#">豚</a></li>
                            </ul>
                        </div>
                        <div id='cssmenu'>
                            <li class='has-sub'><a href='#'><span>肉・卵</span></a>
                                <ul>
                                    <li><div class="frame" style="background: url(../img/fd_ninjin.jpg) center center no-repeat;"></div></li>
                                    <li><div class="frame" style="background: url(../img/fdjyagaimo.jpg) center center no-repeat;"></div></li>
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
                <div class="col-md-9 content-area">
                    <div class="frame" style="background: url(../img/fdjyagaimo.jpg) center center no-repeat;"></div>
                    <div class="frame2" style="background: url(../img/fdputitomato.jpg) center center no-repeat;"></div>
                    <div class="frame3" style="background: url(../img/fdpapurika.jpg) center center no-repeat;"></div>
                    <div class="frame4" style="background: url(../img/fd_kabotya.jpg) center center no-repeat;"></div>
                    <div class="frame5" style="background: url(../img/fd_ninjin.jpg) center center no-repeat;"></div>
                </div>
            </div>
        </div>

        {*{php} include './header.html'; {/php}*}
        {*<div class="container main-content">
        <div class="row">
        {php} include './side.html'; {/php}
        {php} include './Content/main.html'; {/php}
        </div>
        </div>
        {php} include './fotter.html'; {/php}*}
    </body>
</html>

