<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="image.css" type="text/css">
<link rel="stylesheet" href="./css.css" media="screen">
	<title>VEC</title>
	<script>

     var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-23019901-1']);
      _gaq.push(['_setDomainName', "bootswatch.com"]);
        _gaq.push(['_setAllowLinker', true]);
      _gaq.push(['_trackPageview']);

     (function() {
       var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
       ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
       var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
     })();

    </script>
</head>
<body>

<img src="img/ロゴ.png" height="180" width="180" alt="">
<!-- Navbar
      ================================================== -->
      <div class="bs-docs-section clearfix">
        <div class="row">
          <div class="col-lg-12">

            <div class="bs-component">
              <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">カテゴリ</a>
                  </div>

                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                    <ul class="nav navbar-nav">
                      <li class="active"><a href="#">検索 <span class="sr-only">(current)</span></a></li>

                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Action</a></li>
                          <li><a href="#">Another action</a></li>
                          <li><a href="#">Something else here</a></li>
                          <li class="divider"></li>
                          <li><a href="#">Separated link</a></li>
                          <li class="divider"></li>
                          <li><a href="#">One more separated link</a></li>
                        </ul>
                      </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                      <li><a href="#">Link</a></li>
                    </ul>
                  </div>
                </div>
              </nav>
            </div><!-- /example -->
          </div>
        </div>
      </div>
<div class="circle-box-yoko"><img alt="" src="img/kome.jpg" width="360" height="242" /></div>

</body>
</html>
<?php
$user = 'root';
$password = 'root';
$db = 'vec';
$host = 'localhost';
$port = 8889;

$link = mysql_connect("$host:$port", $user, $password);
if (!$link) {
    die('接続失敗です。'.mysql_error());
}

$db_selected = mysql_select_db($db,$link);
if (!$db_selected){
    die('データベース選択失敗です。'.mysql_error());
}else{
  print "成功";
}
 ?>
=======
$result = mysql_query('SELECT * FROM user');
if (!$result) {
    die('クエリーが失敗しました。'.mysql_error());
}
 ?>
>>>>>>> origin/master
