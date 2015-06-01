<!-- <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>
//<?php
//$user = 'root';
//$password = 'root';
//$db = 'vec';
//$host = 'localhost';
//$port = 8889;
//
//$link = mysql_connect(
//   "$host:$port",
//   $user,
//   $password
//);
//if (!$link) {
//    die('接続失敗です。'.mysql_error());
//}
//$db_selected = mysql_select_db($db, $link);
//if (!$db_selected){
//    die('データベース選択失敗です。'.mysql_error());
//}
//$result = mysql_query('SELECT * FROM user');
//if (!$result) {
//    die('クエリーが失敗しました。'.mysql_error());
//}
 ?> -->
 <!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>ログイン</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">

    <!– IE8以前でもHTML5要素とメディアクエリをサポートするために、HTML5 shimとRespond.jsを読み込む –>
    <!–[if lt IE 9]>
     <script src="../js/html5shiv.js"></script>
     <script src="../js/respond.min.js"></script>
   <![endif]–>
  </head>
  <body>
      <div class="container">
  <div class="col-xs-12 col-sm-8 col-md-8 col-md-offset-4 col-sm-offset-4 h1">ログインしてください</div>
  <br />
  <br />
  <br />
<!--  <table class="table-hover col-md-4 col-md-offset-4">
      <tr ><td class="active h4 text-center">ID:</td>
          <td><input type="text"></td>
          <tr ><td class="active text-center h4">パスワード:</td>
              <td><input type="password"></td>
      </tr>
  </table>-->
  <div class="row">
        <div class="col-sm-9">
          <form action="#" class="form-horizontal">
      <div class="form-group">
              <label for="input-name" class="col-sm-2 control-label">メールアドレス</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="input-name" placeholder="メールアドレス" required="required">
              </div>
            </div>
                          <div class="form-group">
              <label for="input-mail" class="col-sm-2 control-label">メールアドレス</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="input-mail" placeholder="メールアドレス" required="required">
              </div>
            </div>
  <div class="form-group">
    <label for="exampleInputPassword1">パスワード</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="パスワード">
  </div>
  <button type="submit" class="btn btn-default">ログイン</button>
</form>
  
  </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">ご用件</label>
              <div class="col-sm-10">
                <select class="form-control">
                  <option value="">選択してください</option>
                  <option value="ご質問・お問い合わせ">ご質問・お問い合わせ</option>
                  <option value="ご意見・ご感想">ご意見・ご感想</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">お問い合わせ内容</label>
              <div class="col-sm-10">
                <textarea class="form-control" rows="5" required="required"></textarea>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">送信</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
      </div>


    <!– jQuery (BootstrapのJavaScriptプラグインのために必要) –>
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>