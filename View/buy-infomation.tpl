{extends file='View/layout.tpl'}
{block header}
{/block}	
{block main}

    <html lang="ja">
        <head>
            <meta name="viewport" content="width=device-width,initial-scale=1.0">
            <title></title>
            <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        </head>
        <body>
            <div class="row">
                <div class="col-lg-6">

                    <h2>お届け先住所の選択</h2>
                    <form class="form-horizontal">

                        <div class="form-group">
                            <label for="name" class="col col-xs-12 col-sm-4 col-md-3 control-label">お名前</label>
                            <div class="col col-xs-5 col-sm-3 col-md-3">
                                <input type="text" name="name1" id="name1" class="form-control" placeholder="姓">
                            </div>
                            <div class="col col-xs-5 col-sm-3 col-md-3">
                                <input type="text" name="name2" id="name2" class="form-control" placeholder="名">
                            </div>
                            <div class="col-xs-offset-2 col-sm-offset-2 col-md-offset-3"></div>
                        </div>

                        <div class="form-group">
                            <label for="zipcode" class="col col-xs-12 col-sm-4 col-md-3 control-label">郵便番号</label>
                            <div class="col col-xs-7 col-sm-4 col-md-4">
                                <div class="input-group">
                                    <span class="input-group-addon">〒</span>
                                    <input type="text" name="zipcode" id="zipcode" class="form-control" placeholder="000-0000">
                                </div>
                            </div>
                            <div class="col-xs-offset-5 col-sm-offset-4 col-md-offset-5"></div>
                        </div>
                        <div class="form-group">
                            <label for="pref" class="col col-xs-12 col-sm-4 col-md-3 control-label">住所</label>

                        </div>
                        <div class="form-group">
                            <label for="town" class="col-sm-2 control-label">県市区町村</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="town" id="town" x-autocompletetype="street-address" required>
                                <span class="help-block">例：福岡県柳川市三橋町</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="building" class="col-sm-2 control-label">番地/マンション名</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="building" id="building">
                                <span class="help-block">例：123-4 / 新宿中央ビルディング 13階</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tel" class="col col-xs-12 col-sm-4 col-md-3 control-label">電話番号</label>
                            <div class="col-xs-12 colcol-xs-10 col-sm-6 col-md-7">
                                <div class="input-group">
                                    <input type="tel" name="tell" id="tel1" class="form-control" placeholder="080-0000-0000">
                                </div>
                            </div>
                            <div class="col-xs-offset-2 col-sm-offset-2 col-md-offset-2"></div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col col-xs-12 col-sm-4 col-md-3 control-label">メールアドレス</label>
                            <div class="col col-xs-12 col-sm-6 col-md-7">
                                <input type="email" name="email" id="email" class="form-control" placeholder="メールアドレスを入力してください">
                            </div>
                            <div class="col-xs-offset-0 col-sm-offset-2 col-md-offset-2"></div>
                        </div>
                        <div class="form-group">
                            <div class="col col-xs-9 col-xs-offset-3 col-sm-8 col-sm-offset-4 col-md-9 col-md-offset-3">
                                <button type="submit" class="btn btn-success btn-lg">　確　認　</button>
                            </div>
                        </div>
                    </form>
                </div>


                <div class="col-lg-6">

                    <h2>お支払い情報</h2>

                    <div class="form-group">
                        <label for="paymentMethod" class="col-sm-2 control-label">お支払い方法</label>
                        <div class="col-sm-6 required" id="paymentMethod">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="paymentMethod" value="option1">
                                    クレジットカード
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="paymentMethod" value="option2">
                                    代金引換（別途手数料 ¥ 50000）
                                </label>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </body>
    </html>

{/block}