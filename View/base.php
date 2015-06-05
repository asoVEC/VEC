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
        <title>ログイン</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">

        <style>
            footer {
  text-align: center;
  padding: 10px;
  background: #101010;
}
            
            .main-content .content-area {
  padding: 20px 15px;
}

    header.jumbotron {
      background: url("../img/heddar_vec.jpg");
      background-position: center;
      background-size: cover;
      color: #f1b;
    }
    
    header .container {
      margin-top: 10%;
    }
    
    header .midashi-btn {
      border: 1px solid #fff;
      color: #fff;
      border-radius: 0;
    }
    
    header .midashi-btn:hover {
      color: #0089ff;
      border-color: #0089ff;
    }
    
    .navbar-form {
      padding-right: 30px;
    }
    </style>
        
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-header">
    
    <!--ブランド名 ロゴ名の表示-->
    <a class="navbar-brand" href="#">VEC</a>
    
    <!--トグルボタンの設置-->
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav-content">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
  </div>
  <div id="nav-content" class="collapse navbar-collapse">
    
<!--    リンクのリスト メニューリスト
    <ul class="nav navbar-nav">
      <li><a href="">Link1</a></li>
      <li><a href="">Link2</a></li>
      <li><a href="">Link3</a></li>-->
      
<!--      ドロップダウン化するliタグ
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" href="">Drop  <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">Link1</a></li>
          <li><a href="#">Link2</a></li>
          <li><a href="#">Link3</a></li>
          <li class="divider"></li>
          <li><a href="#">Link A</a></li>
          <li class="divider"></li>
          <li><a href="#">LInk B</a></li>
        </ul>
      </li>
    </ul>-->
    
    
    <!--検索フォーム-->
    <form class="navbar-form navbar-right" role="search">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
  </div>
</nav>
         <header class="jumbotron col-lg-offset-2 col-lg-8">
      <div class="container">
<!--        <h2>ようこそVECへ</h2>
        <p>ようこそ！</p>-->
      </div>
      
             
    </header>
        
            <div class="container main-content">
  <div class="row">
         <div class="col-md-3 sidebar">
             カテゴリ一覧
    </div><!--/.sidebar-->
    <div class="col-md-9 content-area">
        <h2>ピックアップ</h2>
    </div><!--/.content-area-->
 
  </div>
</div><!--/.main-content-->
    </body>
    


<footer class="container-fluid">
  <small><a href="/">Copyright (C) 2013-2014 9ineBB All Rights Reserved.</a></small>
</footer>
</html>

