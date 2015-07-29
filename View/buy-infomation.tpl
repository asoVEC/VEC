{extends file='View/layout.tpl'}
{block header}
{/block}
{block main}
    <div class="alert alert-danger" id = "alert">
        <span id="alert2"></span>
    </div>
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

    <div id="div-modalcredit" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">クレジット設定設定</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal">
                        {*<div class="alert alert-danger" id = "alert3">
                            <span id="alert4"></span>
                        </div>*}
                        <div class="form-group">
                            <label for="name" class="col col-xs-12 col-sm-5 col-md-5 control-label">新規クレジット番号</label>
                            <div class="col col-xs-7 col-sm-7 col-md-7">
                                <input type="text" name="credit" id="credit" class="form-control" placeholder="クレジット番号">
                            </div>
                            <div class="col-xs-offset-2 col-sm-offset-2 col-md-offset-3"></div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">閉じる</button>
                    <button type="button" class="btn btn-primary" id="modal-addcredit" data-dismiss="modal">変更</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>

    <div id="demo" class="col-lg-6">

        <div class="col-lg-6">

            <h2>お支払い情報</h2>


            <div class="form-group">
                <span for="paymentMethod" class="col-sm-2 control-label">お支払い方法</span>
                <div class="col-sm-6 required" id="paymentMethod">
                    <div class="radio">
                        <input type="radio" name="paymentMethod" id="cre" value="0">
                        クレジットカード<br />
                        <div id="crej">
                            現在のクレジットカード番号　：<span id="crecre">111111111111</span>
                            <br />
                            <input onclick="window.location.href = '#div-modal'" type="button" data-toggle="modal" data-target="#div-modalcredit" type="button" class="btn btn-default" id="loading-pas" value="変更したい場合はこちら">
                        </div>
                        {*                        </div>*}
                        {*                        <div class="radio">*}
                        <input type="radio" name="paymentMethod" id="dai" value="1" checked="checked">
                        代金引換（別途手数料 ¥ 無償）
                    </div>
                    使用ポイント(使わない場合は0のままで)
                    (現在のポイントは{$user->getpoint()})
                    <input type="text" value="0" id="usePoint">
                </div>
            </div>


        </div>
    </div>
    <div class="col-lg-6"> </div>
    <div class="col-lg-6">
        <div class="form-group">
            <div class="col col-xs-9 col-xs-offset-3 col-sm-8 col-sm-offset-4 col-md-9 col-md-offset-3">
                {*                    <form action="/VEC/buy/conf" method="post">*}
                <input type="button" class="btn btn-success btn-lg" value="次へ進む" onclick="postDeta()"></input>
                {*                    </form>*}

            </div>
        </div>
    </div>
    <script>

        document.getElementById("alert").style.display = "none";

        $(document).ready(function () {
            console.log();
            $("#modal-add").click(function (event) {



                $('#sei').html(document.getElementById("name1").value);
                $('#zip').html(document.getElementById("zipcode").value);
                $('#to').html(document.getElementById("town").value);
                $('#bu').html(document.getElementById("building").value);
                $('#te').html(document.getElementById("tel1").value);
                $('#em').html(document.getElementById("email").value);
            });
            $("#modal-addcredit").click(function (event) {
                $('#crecre').html(document.getElementById("credit").value);
                console.log(document.getElementById("credit").value);
            });
        });
        function postDeta() {
            if ($('#usePoint').val() <={$user->getpoint()}) {
                console.log("bb");
                var form = document.createElement('form');
                document.body.appendChild(form);
                var input = document.createElement('input');
                input.setAttribute('type', 'hidden');
                input.setAttribute('name', 'name');
                input.setAttribute('value', $('#sei').text());

                var inputad1 = document.createElement('input');
                inputad1.setAttribute('type', 'hidden');
                inputad1.setAttribute('name', 'address1');
                inputad1.setAttribute('value', $('#zip').text());

                var inputad2 = document.createElement('input');
                inputad2.setAttribute('type', 'hidden');
                inputad2.setAttribute('name', 'address2');
                inputad2.setAttribute('value', $('#to').text());

                var inputad3 = document.createElement('input');
                inputad3.setAttribute('type', 'hidden');
                inputad3.setAttribute('name', 'address3');
                inputad3.setAttribute('value', $('#bu').text());


                var inputpoi = document.createElement('input');
                inputpoi.setAttribute('type', 'hidden');
                inputpoi.setAttribute('name', 'usePoint');
                inputpoi.setAttribute('value', $('#usePoint').val());

                var inputtel = document.createElement('input');
                inputtel.setAttribute('type', 'hidden');
                inputtel.setAttribute('name', 'phone');
                inputtel.setAttribute('value', $('#te').text());

                form.appendChild(input);
                form.appendChild(inputad1);
                form.appendChild(inputad2);
                form.appendChild(inputad3);
                form.appendChild(inputpoi);
                form.appendChild(inputtel);
                form.setAttribute('action', '/VEC/buy/conf');
                form.setAttribute('method', 'post');
                form.submit();
            } else {
                $('#alert').html("保持ポイントオーバーです");
                document.getElementById("alert").style.display = "";
            }
        }

        var elem1 = document.getElementById("crej");
        {*            var elem2 = document.getElementById("daij");*}
        elem1.style.display = "none";
        {*            elem2.style.display = "none";*}

        $('input[id=cre]').change(function () {
            // 表示・非表示切り替え
            elem1.style.display = "";
        {*                elem2.style.display = "none";*}
        });
        $('input[id=dai]').change(function () {
            // 表示・非表示切り替え
        {*                console.log("222");*}
        {*                elem2.style.display = "";*}
            elem1.style.display = "none";
        });
    </script>
{/block}

