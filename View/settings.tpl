{extends file='View/base.tpl'}
{block side}
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#">ユーザ設定</a></li>
        <li><a href="/VEC/user/settings">ユーザ情報登録・変更</a></li>
        <li><a href="/VEC/user/point">ポイント管理</a></li>
    </ul>
{/block}
{block content}
    {* ユーザ情報変更
    住所登録or変更　登録していなければ登録。していれば現住所を記載そして変更できる
    パスワード変更
    メールアドレス変更
    氏名変更
    クレジット登録
    生年月日登録*}
    <div class="alert alert-success" id = "alert2">
        <span id="alert"></span>
    </div>

    {assign var="address" value="博多"}
    {assign var="cre" value="1301177"}
    {if $address==null}
        {*        新規住所*}
        <div class="panel panel-info">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#newaddress">住所登録</a>
                </h4>
            </div>
            <div id="newaddress" class="panel-collapse collapse">
                <div class="panel-body">
                    <div class="form-group">
                        <label for="input-newaddress" class="col-sm-3 control-label">住所</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="newaddress" id="input-newaddress" placeholder="住所" required="required">
                        </div>
                        <div class="col-sm-offset-6 col-sm-3">
                            <input type="button" class="btn btn-default" id ="loading-newaddress" value="住所の登録">
                        </div>
                    </div>
                </div>
            </div>
        </div>
{else}{*住所変更*}
    <div class="panel panel-info">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#add" data-toggle="tooltip" title="クリックしてね" id="panel-address">住所変更</a>
            </h4>
        </div>
        <div id="add" class="panel-collapse collapse">
            <div class="panel-body">
                <label for="input-address" class="col-sm-3 control-label" >住所</label>
                <label for="input-address" class="col-sm-9  control-label" id="nowaddress">{$address}</label>
                <div class="form-group">
                    <label for="input-address" class="col-sm-3 control-label">変更住所</label>
                    <form method="post"　id="form-address">
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="address" id="input-address" placeholder="住所" required="required">
                        </div>
                        <div class="col-sm-offset-6 col-sm-3">
                            <input type="button" class="btn btn-default" id="loading-address" data-loading-text="変更中" value="住所変更">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
{/if}
{*パスワード変更*}
<div class="panel panel-info">
    <div class="panel-heading">
        <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#pass">パスワード変更</a>
        </h4>
    </div>
    <div id="pass" class="panel-collapse collapse">
        <div class="panel-body"><div class="form-group">
                <label for="input-pass" class="col-sm-3 control-label">パスワード</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="password" id="input-pass" placeholder="パスワード" required="required">
                    <input type="text" class="form-control" name="password" id="input-pass2" placeholder="もう一度入力してください" required="required">
                </div>
                <div class="col-sm-offset-6 col-sm-3">
                    <input onclick="window.location.href='#div-modal'" type="button" data-toggle="modal" data-target="#div-modal" type="button" class="btn btn-default" id="loading-pas" value="パスワード変更">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="panel panel-info">
    <div class="panel-heading">
        <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#mail">メールアドレス変更</a>
        </h4>
    </div>
    <div id="mail" class="panel-collapse collapse">
        <div class="panel-body">
            <label for="input-address" class="col-sm-3 control-label" >メールアドレス</label>
            <label for="input-address" class="col-sm-9  control-label" id="nowaddress">{$address}</label>
            <div class="form-group">
                <label for="input-mail" class="col-sm-3 control-label">変更メールアドレス</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="mailaddress" id="input-mail" placeholder="メールアドレス" required="required">
                </div>
                <div class="col-sm-offset-6 col-sm-3">
                    <input type="button" class="btn btn-default" id="loading-mail" data-loading-text="変更中" value="メールアドレス変更">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="panel panel-info">
    <div class="panel-heading">
        <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#name">氏名変更</a>
        </h4>
    </div>
    <div id="name" class="panel-collapse collapse">
        <div class="panel-body">
            <label for="input-address" class="col-sm-3 control-label" >氏名</label>
            <label for="input-address" class="col-sm-9  control-label" id="nowname">{$address}</label>
            <div class="form-group">
                <label for="input-name" class="col-sm-3 control-label">変更氏名</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="name" id="input-name" placeholder="氏名" required="required">
                </div>
                <div class="col-sm-offset-6 col-sm-3">
                    <input type="button" class="btn btn-default" id="loading-name" data-loading-text="変更中" value="氏名変更">
                </div>
            </div>
        </div>
    </div>
</div>
{if $cre==null}
    <div class="panel panel-info">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#newcre">クレジット登録</a>
            </h4>
        </div>
        <div id="newcre" class="panel-collapse collapse">
            <div class="panel-body"><div class="form-group">
                    <label for="input-newcre" class="col-sm-3 control-label">クレジット</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="newcre" id="input-newcre" placeholder="クレジット" required="required">
                    </div>
                    <div class="col-sm-offset-6 col-sm-3">
                        <input type="button" class="btn btn-default" id="loading-newcredit" data-loading-text="変更中" value="クレジット登録">
                    </div>
                </div>
            </div>
        </div>
    </div>
{else}
    <div class="panel panel-info">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#cre">クレジット変更</a>
            </h4>
        </div>
        <div id="cre" class="panel-collapse collapse">
            <div class="panel-body"><div class="form-group">
                    <label for="input-address" class="col-sm-3 control-label">前クレジット</label>
                    <label for="input-address" class="col-sm-9  control-label" id="nowcredit">{$cre}</label>
                    <label for="input-cre" class="col-sm-3 control-label">クレジット</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="cre" id="input-credit" placeholder="クレジット" required="required">
                    </div>
                    <div class="col-sm-offset-6 col-sm-3">
                        <input type="button" class="btn btn-default" id="loading-credit" data-loading-text="変更中" value="クレジット変更">
                    </div>
                </div>
            </div>
        </div>
    </div>
{/if}

<div class="panel panel-info">
    <div class="panel-heading">
        <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#age">生年月日変更</a>
        </h4>
    </div>
    <div id="age" class="panel-collapse collapse">
        <div class="panel-body"><div class="form-group">
                <label for="input-age" class="col-sm-3 control-label">生年月日</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="age" id="input-age" placeholder="生年月日" required="required">
                </div>
                <div class="col-sm-offset-6 col-sm-3">
                    <input type="button" class="btn btn-default" id="loading-age" data-loading-text="変更中" value="生年月日変更">
                </div>
            </div>
        </div>
    </div>
</div>

<button class="btn" onclick="window.location.href='#div-modal'" type="button" data-toggle="modal" data-target="#div-modal">モーダルボタン</button>
<!-- モーダルウィンドウの本体 -->

<div id="div-modal" class="modal fade"> 

  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">タイトル</h4>
      </div>
      <div class="modal-body">
        <p>One fine body&hellip;</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">閉じる</button>
        <button type="button" class="btn btn-primary">保存</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
<script>
    //ツールチップ表示　おためし
    $('#panel-address').tooltip();

    //フラッシュメッセージ
    var elem1 = document.getElementById("alert2");
    elem1.style.display = "none";


    $(document).ready(function () {
        //住所追加
        $("#loading-newaddress").click(function (event) {
            $.post(
                    "/VEC/user/settingspost",
                    {
                        type: "address",
                        value: document.getElementById("input-newaddress").value
                    },
            function (data) {
                $('#alert').html("住所を<strong>" + data + "</strong>で登録");
            }
            );
            $('#input-newaddress').val();
            elem1.style.display = "";
        });

        //住所変更
        $("#loading-address").click(function (event) {
            $.post(
                    "/VEC/user/settingspost",
                    {
                        type: "address",
                        value: document.getElementById("input-address").value
                    },
            function (data) {
                $('#alert').html("住所を<strong>" + data + "</strong>に変更");
                $('#nowaddress').html(data);
            }
            );
            $('#input-address').val();
            elem1.style.display = "";
        });

        //パスワード変更
        $("#loading-pas").click(function (event) {
    {*            if(document.getElementById("input-pass").value==document.getElementById("input-pass2").value){*}
            $.post(
                    "/VEC/user/settingspost",
                    {
                        type: "password",
                        value: document.getElementById("input-pass").value,
                    },
                    function (data) {
                        $('#alert').html("パスワードを変更しました");
                    }
            );
            $('#input-pass').val();
            elem1.style.display = "";
    {*        }*}
        });
        //メールアドレス変更
        $("#loading-mail").click(function (event) {
    {*            if(document.getElementById("input-pass").value==document.getElementById("input-pass2").value){*}
            $.post(
                    "/VEC/user/settingspost",
                    {
                        type: "mail_address",
                        value: document.getElementById("input-mail").value,
                    },
                    function (data) {
                        $('#alert').html("メールアドレスを" + data + "に変更しました");

                    }
            );
            $('#input-mail').val();
            elem1.style.display = "";
    {*        }*}
        });

        //氏名変更
        $("#loading-name").click(function (event) {
    {*            if(document.getElementById("input-pass").value==document.getElementById("input-pass2").value){*}
            $.post(
                    "/VEC/user/settingspost",
                    {
                        type: "name",
                        value: document.getElementById("input-name").value,
                    },
                    function (data) {
                        $('#alert').html("氏名を" + data + "に変更しました");
                        $('#nowname').html(data);
                    }
            );
            $('#input-name').val();
            elem1.style.display = "";
    {*        }*}
        });

        //新規クレジット
        $("#loading-newcredit").click(function (event) {
    {*            if(document.getElementById("input-pass").value==document.getElementById("input-pass2").value){*}
            $.post(
                    "/VEC/user/settingspost",
                    {
                        type: "credit_no",
                        value: document.getElementById("input-newcredit").value,
                    },
                    function (data) {
                        $('#alert').html("クレジットを" + data + "で登録しました");
                    }
            );
            $('#input-newcredit').val();
            elem1.style.display = "";
    {*        }*}
        });

        //クレジット変更
        $("#loading-credit").click(function (event) {
    {*            if(document.getElementById("input-pass").value==document.getElementById("input-pass2").value){*}
            $.post(
                    "/VEC/user/settingspost",
                    {
                        type: "credit_no",
                        value: document.getElementById("input-credit").value,
                    },
                    function (data) {
                        $('#alert').html("クレジットを" + data + "変更しました");
                        $('#nowcredit').html(data);
                    }
            );
            $('#input-credit').val();
            elem1.style.display = "";
    {*        }*}
        });

        //生年月日変更 ここdbは年齢でしてるからのちのち変更

        $("#loading-age").click(function (event) {
    {*            if(document.getElementById("input-pass").value==document.getElementById("input-pass2").value){*}
            $.post(
                    "/VEC/user/settingspost",
                    {
                        type: "age",
                        value: document.getElementById("age").value,
                    },
                    function (data) {
                        $('#alert').html("生年月日を" + data + "に変更しました");
                    }
            );
            $('#input-age').val();
            elem1.style.display = "";
    {*        }*}
        });

        //ローディングボタン
        $("input:button").click(function () {
            var btn = $(this);
            btn.button('loading');
            setTimeout(function () {
                btn.button('reset');
            }, 400)
            
            
        });

    });
</script>
{/block}
