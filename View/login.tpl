{extends file='View/layout.tpl'}
{block title}
    ログイン
{/block}
{block main}
            <div class="panel panel-default col-sm-6 col-sm-offset-3 col-md-6">
                <div class="panel-body">
                    <div class="container">
                        <div class="col-xs-12 col-sm-10 col-md-10 col-md-offset-2 col-sm-offset-2 col-xs-8 h1">ログインしてください</div>
                        <div class="row">
                            <form action="/VEC/user/login" class="form-horizontal" method="post">
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
                                    <div class="col-sm-offset-6 col-sm-3">
                                        <button type="submit" class="btn btn-default ">ログイン</button>
                                    </div>
                                </div>
                                <div class="col-sm-offset-6">会員登録は
                                    <span style='color:blue'><a href="/VEC/user/signup">こちら</a></span>
                                </div>
                            </form>
                        </div>{*row*}
                    </div>{*container*}
                </div>
            </div>
                {/block}
