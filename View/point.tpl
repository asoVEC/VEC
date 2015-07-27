{extends file='View/settings.tpl'}
{block content}
    <div class="accordion" id="accordion2">
        <div class="accordion-group"><div class="panel panel-success"><div class="panel-heading">
                    <div class="accordion-heading">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                            <font size="3" color="DarkOrange">ポイントを確認する</font>
                        </a>
                    </div></div>
                <div id="collapseOne" class="accordion-body collapse in">
                    <div class="accordion-inner"><div class="panel-body">
                            現在のポイントは　<font size="4" color="purple">{$point}　ポイント</font>です。
                        </div></div>
                </div>
            </div>

            <div class="accordion-group"><div class="panel panel-success"><div class="panel-heading">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                                <font size="3" color="DarkOrange">ポイントの履歴</font>
                            </a>
                        </div></div>
                    <div id="collapseTwo" class="accordion-body collapse in">
                        <div class="accordion-inner"><div class="panel-body">
								{foreach $orders as $item}
									{if $item->getUsePoint() != 0}
										・{$item->getOrderDate()}　{$item->getUsePoint()}ポイント使用しました。<br>
									{/if}
									{if $item->getAcquiredPoint() != 0}
									・{$item->getOrderDate()}　{$item->getAcquiredPoint()}ポイント獲得しました。<br>
									{/if}
								{/foreach}
                            </div></div>
                    </div>
                </div>



            </div>
        </div>
    </div>
    <script>
		$(function () {
			$(".collapse").collapse
		});
    </script>
{/block}
