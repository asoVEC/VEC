{extends file='View/layout.tpl'}
{block title}{/block}

{block main}
    
     <div class="container main-content">
        <div class="row">
            <div class="panel panel-default col-sm-6 col-sm-offset-3 col-md-6">
                <div class="panel-body">
                    <div class="container">
                        <div class="col-xs-12 col-sm-10 col-md-10 col-md-offset-4 col-sm-offset-2 col-xs-8 h1">会員登録</div>
                        <div class="col-xs-12 col-sm-10 col-md-10 col-md-offset-3 col-sm-offset-2 col-xs-8 h1"><br /></div>
                        <div class="col-xs-12 col-sm-10 col-md-10 col-md-offset-1 col-xs-8 h4">必要情報を記入してください。</div>
                        <div class="col-xs-12 col-sm-10 col-md-10 col-md-offset-3 col-sm-offset-2 col-xs-8 h1"><br /></div>
                        <div class="row">
                            <form action="#" class="form-horizontal" method="post">
                                <div class="form-group">
                                    <label for="input-mail" class="col-sm-3 control-label">氏名</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="name" id="input-mail" placeholder="氏名" required="required">
                                    </div>
                                </div>
                                <div class="form-group">

                                    <label for="input-mail" class="col-sm-3 control-label">メールアドレス</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="mail" id="input-mail" placeholder="メールアドレス" required="required">
                                    </div>
                                </div>
                                <div class="form-group">

                                    <label for="input-mail" class="col-sm-3 control-label">電話番号</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="phone" id="input-mail" placeholder="電話番号" required="required">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="input-passward" class="col-sm-3 control-label">パスワード</label>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control" name="password" id="input-passward" placeholder="パスワード" required="required">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="input-passward" class="col-sm-3 control-label">パスワード確認</label>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control" name="password" id="input-passward" placeholder="パスワード確認" required="required">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-6 col-sm-3">
                                        <button type="submit" class="btn btn-default ">アカウントの作成</button>
                                    </div>
                                </div>
                            </form>
                        </div>{*row*}
                    </div>{*container*}
                </div>
            </div>
        </div>
    </div>
{/block}