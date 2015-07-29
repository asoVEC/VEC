{extends file='View/base.tpl'}
{block side}
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#">ユーザ設定</a></li>
        <li><a href="/VEC/user/settings">ユーザ情報登録・変更</a></li>
        <li><a href="/VEC/user/point">ポイント管理</a></li>
        <li><a href="/VEC/user/history">購入履歴</a></li>
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
    <div class="alert alert-danger" id = "alert3">
        <span id="alert4"></span>
    </div>
    {if $userinfo.address==null}
        {$userinfo.address['address']}
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
                <div class="row">
					<label class="control-label  col-lg-3">現住所</label>
					<label for="input-address" class="col-lg-9  control-label" id="nowaddress">{$userinfo.address}</label>
				</div>
				<div class="form-horizontal">
					<div class="row"><span class="control-label col-lg-offset-1 col-lg-4"><h4>変更住所</h4></span></div>
					<div class="form-group">
						<label class="col-lg-3" for="address1">郵便番号</label>
						<div class="col-lg-4"><input type="text" class="form-control " name="address1" id="input-address1" placeholder="0000000" required="required"></div>
					</div>
					<div class="form-group">
						<label class="col-lg-3" for="address2">県・市町村</label>
						<div class="col-lg-4"><input type="text" class="form-control " name="address2" id="input-address2" placeholder="福岡県福岡市" required="required"></div>
					</div>						
					<div class="form-group">
						<label class="col-lg-3" for="address3">番地・マンション名</label>
						<div class="col-lg-4"><input type="text" class="form-control " name="address3" id="input-address3" placeholder="博多区〜" required="required"></div>
					</div>
					<br />
					<input type="button" class="btn btn-primary col-lg-offset-8 col-lg-2" id="loading-address" data-loading-text="変更中" value="住所変更">
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
				<label for="input-pass" class="col-sm-3 control-label">現在のパスワードを入力してください</label>
				<div class="col-sm-6">
					<input type="password" class="form-control" name="password" id="input-pass" placeholder="パスワード" required="required">
				</div>
				<div class="col-sm-offset-6 col-sm-3">
					<input onclick="window.location.href = '#div-modal'" type="button" data-toggle="modal" data-target="#div-modal" type="button" class="btn btn-default" id="loading-pas" value="パスワード変更">
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
			<label for="input-address" class="col-sm-9  control-label" id="nowmail">{$userinfo.mail}</label>
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
			<label for="input-address" class="col-sm-9  control-label" id="nowname">{$userinfo.name}</label>
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
{if $userinfo.credit_no==null}
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
					<label for="input-address" class="col-sm-9  control-label" id="nowcredit">{$userinfo.credit_no}</label>
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

<!-- モーダルウィンドウの本体 -->

<div id="div-modal" class="modal fade"> 
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">パスワード設定</h4>
			</div>
			<div class="modal-body">
				<div class="alert alert-danger" id = "alert5">
					<span id="alert6"></span>
				</div>
				確認しました。新たなパスワードを入力してください。
				<input type="password" class="form-control" name="pass" id="input-newpass" placeholder="パスワード" required="required">
				<input type="password" class="form-control" name="pass" id="input-newpassconf" placeholder="確認用" required="required">
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">閉じる</button>
				<button type="button" class="btn btn-primary" id="modal-pass" data-dismiss="modal">変更</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
	<script>
		//ツールチップ表示　おためし
		$('#panel-address').tooltip();

		var password = "{$userinfo.password}";
		//フラッシュメッセージ
		var elem1 = document.getElementById("alert2");
		var elem2 = document.getElementById("alert3");
		var elem3 = document.getElementById("alert5");
		elem1.style.display = "none";
		elem2.style.display = "none";
		elem3.style.display = "none";

		$(document).ready(function () {

			//住所追加
			$("#loading-newaddress").click(function (event) {
				if ($("#input-newaddress").val() != "") {

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
					$('#input-newaddress').val("");
					elem1.style.display = "";
				} else {
					elem1.style.display = "none";
					$('#alert4').html("入力されていません");
					elem2.style.display = "";
				}

			});
			//住所変更
			$("#loading-address").click(function (event) {
				if ($("#input-address1").val() != "" && $("#input-address2").val() != "" && $("#input-address3").val() != "") {
					$.post(
							"/VEC/user/settingspost",
							{
								type: "address1",
								value: document.getElementById("input-address1").value
							},
					function (data) {
					}
					);
					$.post(
							"/VEC/user/settingspost",
							{
								type: "address2",
								value: document.getElementById("input-address2").value
							},
					function (data) {
					}
					);
					$.post(
							"/VEC/user/settingspost",
							{
								type: "address3",
								value: document.getElementById("input-address3").value
							},
					function (data) {
						$('#alert').html("住所を変更しました");
						data = document.getElementById("input-address1").value +document.getElementById("input-address2").value +document.getElementById("input-address3").value;
						$('#nowaddress').html(data);
					}
					);
					$('#input-address1').val("");
					$('#input-address2').val("");
					$('#input-address3').val("");
					elem1.style.display = "";
					elem2.style.display = "none";
				} else {
					elem1.style.display = "none";
					$('#alert4').html("入力されていません");
					elem2.style.display = "";
				}
			});
			//メールアドレス変更
			$("#loading-mail").click(function (event) {
				if ($("#input-mail").val() != "") {
					$.post(
							"/VEC/user/settingspost",
							{
								type: "mail_address",
								value: document.getElementById("input-mail").value,
							},
							function (data) {
								$('#alert').html("メールアドレスを" + data + "に変更しました");
								$('#nowmail').html(data);
							}
					);
					$('#input-mail').val("");
					elem1.style.display = "";
					elem2.style.display = "none";
				} else {
					elem1.style.display = "none";
					$('#alert4').html("入力されていません");
					elem2.style.display = "";
				}
			});
			//氏名変更
			$("#loading-name").click(function (event) {
				if ($("#input-name").val() != "") {
					$.post(
							"/VEC/user/settingspost",
							{
								type: "name",
								value: document.getElementById("input-name").value,
							},
							function (data) {
								$('#alert').html("氏名を" + data + "に変更しました");
								$('#nowname').html(data);
                                                                $('#sessionName').html(data);
							}
					);
					$('#input-name').val("");
					elem1.style.display = "";
					elem2.style.display = "none";
				} else {
					elem1.style.display = "none";
					$('#alert4').html("入力されていません");
					elem2.style.display = "";
				}
			});
			//新規クレジット
			$("#loading-newcredit").click(function (event) {
				if ($("#input-newcredit").val() != "") {
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
					$('#input-newcredit').val("");
					elem1.style.display = "";
					elem2.style.display = "none";
				} else {
					elem1.style.display = "none";
					$('#alert4').html("入力されていません");
					elem2.style.display = "";
				}
			});
			//クレジット変更
			$("#loading-credit").click(function (event) {
				if ($("#input-credit").val() != "") {
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
					$('#input-credit').val("");
					elem1.style.display = "";
					elem2.style.display = "none";
				} else {
					elem1.style.display = "none";
					$('#alert4').html("入力されていません");
					elem2.style.display = "";
				}
			});
			//ローディングボタン
			$("input:button").click(function () {
				var btn = $(this);
				btn.button('loading');
				setTimeout(function () {
					btn.button('reset');
				}, 400)


			});
			//パスワード
			var passtext = $("#input-pass").val();
			$('#div-modal').on('show.bs.modal', function (event) {
				if ($("#input-pass").val() != "") {
					if ($('#input-pass').val() != password) {
						elem1.style.display = "none";
						$('#alert4').html("パスワードが違います。認証に失敗しました。");
						elem2.style.display = "";
						$("#input-pass").val("");
						return false;
					} else {
						elem2.style.display = "none";
						$("#input-pass").val("");
						elem3.style.display = "none";
					}
				}
				else {
					elem1.style.display = "none";
					$('#alert4').html("入力されていません");
					elem2.style.display = "";
					return false;
				}

			});

			//パスワードモーダル
			$("#modal-pass").click(function (event) {
				if ($("#input-newpass").val() != "" && $("#input-newpassconf").val() != "") {
					if ($("#input-newpass").val() == $("#input-newpassconf").val()) {
						$.post(
								"/VEC/user/settingspost",
								{
									type: "password",
									value: document.getElementById("input-newpass").value,
								},
								function (data) {
									$('#alert').html("パスワードを変更しました。");

								}
						);
						$('#input-name').val();
						elem1.style.display = "";
						elem2.style.display = "none";
						password = document.getElementById("input-newpass").value;
						$("#input-newpass").val("");
						$("#input-newpassconf").val("");
					} else {
						elem1.style.display = "none";
						$('#alert6').html("一致していませんでした。");
						elem3.style.display = "";
						$("#input-newpass").val("");
						$("#input-newpassconf").val("");
						return false;
					}
				} else {
					elem1.style.display = "none";
					$('#alert6').html("入力されていません");
					elem3.style.display = "";
					return false;
				}
			});

		});
	</script>
{/block}
