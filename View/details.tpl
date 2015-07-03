{extends file='View/layout.tpl'}
{block title}{/block}

{block main}
    <body>

 <div class="container main-content">
        <div class="row">
            <div class="panel panel-default col-sm-6 col-sm-offset-3 col-md-6">
                <div class="panel-body">
                    <div class="container">
                        <div class="col-xs-12 col-sm-10 col-md-10 col-md-offset-4 col-sm-offset-2 col-xs-8 h1">商品詳細<div>
                        <div class="col-xs-12 col-sm-10 col-md-10 col-md-offset-3 col-sm-offset-2 col-xs-8 h1"><br /></div>
　　　　
             <table>
                      <tr>
                          <td rowspan="3"><img src="./img/51UJ5Do3hzL.jpg"　width="290" height="230"></td>
                          <td>{$item['product_name']}</td>
                      </tr>

                      <tr>

　　　　　　　　　　　　　<td><div style="padding: 10px; margin-bottom: 10px;
                               border: 1px solid #333333; border-radius: 10px;">商品購入<br>
                              <SELECT name="suuryo">
　　　　　　　　　　　　　　  <OPTION value="su1">1</OPTION>
 　　　　　　　　　　　　　　 <OPTION value="su2">2</OPTION>
 　　　　　　　　　　　　　　 <OPTION value="su3">3</OPTION>
                              <OPTION value="su4">4</OPTION>
                              <OPTION value="su5">5</OPTION>
 　　　　　　　　　　　　　　 <OPTION value="su6">6</OPTION>
 　　　　　　　　　　　　　　 <OPTION value="su7">7</OPTION>
                              <OPTION value="su8">8</OPTION>
                              <OPTION value="su9">9</O1PTION>
 　　　　　　　　　　　　　　 <OPTION value="su10">10</OPTION>
                              </SELECT><br><br>
                              <BUTTON type="submit">カートに入れる</BUTTON></div> </td>
                      </tr>

　　　　　　</table>
                        
                        
  ・{$item['price']}    <br>
  ・内容量  <br>
　・商品の特長  <br>
　・商品詳細情報    <br>
    
         </div>
         <body style="background-image: url(./img/back22.gif);">
      
             </div>
            </div>
           </div>
          </div>
         </div>
     
                   
             
             
     </body>

    
    
    
    
    
{/block}