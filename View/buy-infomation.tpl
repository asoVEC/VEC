{extends file='View/layout.tpl'}
{block header}
{/block}
{block main}
{*割り当て済み('user', $user);	*}
    <div class="row">
        <div class="col-lg-6">
            <h2>お届け先住所の選択</h2>
            <form class="form-horizontal">
				<div class="row">
					<div class="form-group">
						<span for="name" class="col-lg-3 control-span">お名前</span>
						<span id="sei" class=" col-lg-4 control-span">{$user->getUserName()}</span>
					</div>

					<div class="form-group">
						<span for="zipcode" class="col-lg-3 control-span">郵便番号</span>
						<span id="zip" class="col-lg-3 control-span">{$user->getAddress1()}</span>
					</div>
					<div class="form-group">
						<span for="town" class="col-lg-3 control-span">県市区町村</span>
						<span id="to" class="col-lg-3 control-span">{$user->getAddress2()}</span>
					</div>

					<div class="form-group">
						<span for="building" class="col-lg-3 control-span">番地/マンション名</span>
						<span id="bu"  class="col-lg-3 control-span">{$user->getAddress3()}</span>
					</div>
					<div class="form-group">
						<span for="tel" class="col-lg-3 control-span">電話番号</span>
						<span id="te"  class="col-lg-3 control-span">{$user->getPhone()}</span>

					</div>
					<div class="form-group">
						<span for="email" class="col col-xs-12 col-sm-4 col-md-3 control-span">メールアドレス</span>
						<span id="em"  class="col-lg-3 control-span">{$user->getMail()}</span>
					</div>
				</div>
			</form>
			<input onclick="window.location.href = '#div-modal'" type="button" data-toggle="modal" data-target="#div-modal" type="button" class="btn btn-default" id="loading-pas" value="別住所に配送したい場合はこちら">
		</div>
		<div id="div-modal" class="modal fade">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">配送先住所設定</h4>
					</div>
					<div class="modal-body">
						<form class="form-horizontal">
							<div class="alert alert-danger" id = "alert">
								<span id="alert2"></span>
							</div>
							<div class="form-group">
								<label for="name" class="col col-xs-12 col-sm-4 col-md-3 control-label">お名前</label>
								<div class="col col-xs-5 col-sm-3 col-md-3">
									<input type="text" name="name1" id="name1" class="form-control" placeholder="{$user->getUserName()}">
								</div>
							</div>

							<div class="form-group">
								<label for="zipcode" class="col col-xs-12 col-sm-4 col-md-3 control-label">郵便番号</label>
								<div class="col col-xs-7 col-sm-4 col-md-4">
									<div class="input-group">
										<span class="input-group-addon">〒</span>
										<input type="text" name="zipcode" id="zipcode" class="form-control" placeholder="{$user->getAddress1()}">
									</div>
								</div>
								<div class="col-xs-offset-5 col-sm-offset-4 col-md-offset-5"></div>
							</div>
							<div class="form-group">
								<label for="town" class="col-sm-2 control-label">県市区町村</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" name="town" id="town" x-autocompletetype="street-address" placeholder="{$user->getAddress2()}" required>
									<span class="help-block">例：福岡県柳川市三橋町</span>
								</div>
							</div>

							<div class="form-group">
								<label for="building" class="col-sm-2 control-label">番地/マンション名</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" name="building" id="building"placeholder="{$user->getAddress3()}">
									<span class="help-block">例：123-4 / 新宿中央ビルディング 13階</span>
								</div>
							</div>
							<div class="form-group">
								<label for="tel" class="col col-xs-12 col-sm-4 col-md-3 control-label">電話番号</label>
								<div class="col-xs-12 colcol-xs-10 col-sm-6 col-md-7">
									<div class="input-group">
										<input type="tel" name="tell" id="tel1" class="form-control" placeholder="{$user->getPhone()}">
									</div>
								</div>
								<div class="col-xs-offset-2 col-sm-offset-2 col-md-offset-2"></div>
							</div>
							<div class="form-group">
								<label for="email" class="col col-xs-12 col-sm-4 col-md-3 control-label">メールアドレス</label>
								<div class="col col-xs-12 col-sm-6 col-md-7">
									<input type="email" name="email" id="email" class="form-control" placeholder="{$user->getMail()}">
								</div>
							</div>

						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">閉じる</button>
						<button type="button" class="btn btn-primary" id="modal-add" data-dismiss="modal">変更</button>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div>

		<div id="demo" class="col-lg-6">

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
		<div class="col-lg-6">
			<div class="form-group">
				<div class="col col-xs-9 col-xs-offset-3 col-sm-8 col-sm-offset-4 col-md-9 col-md-offset-3">
                                    <form action="/VEC/buy/conf" class="form-horizontal" method="post">
                                    <button type="submit" class="btn btn-success btn-lg">　次へ進む　</button>
                                    </form>
				</div>
			</div>
		</div>
		{/block}
		<script>
			$('#alert2').val("");
			{*        $('#alert').val("none");*}
			document.getElementById("alert").style.display = "none";
			{*document.getElementById("alert2").style.display="none";*}
			$(document).ready(function () {

				$("#modal-add").click(function (event) {

					$('#sei').html(document.getElementById("name1").value);
					$('#mei').html(document.getElementById("name2").value);
					$('#zip').html(document.getElementById("zipcode").value);
					$('#to').html(document.getElementById("town").value);
					$('#bu').html(document.getElementById("building").value);
					$('#te').html(document.getElementById("tel1").value);
					$('#em').html(document.getElementById("email").value);
				});
			});
		</script>
	</html>


