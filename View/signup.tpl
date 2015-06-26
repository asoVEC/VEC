{extends file='View/layout.tpl'}
{block title}{/block}

{block main}
 <center>
 <div style="padding: 10px; margin-bottom: 10px; border: 1px solid #333333; border-radius: 10px; width: 1200px;">
      <font size="6" face="ＭＳ 明朝,平成明朝">会員登録</font> <br><br>
　　　　<font size="4" face="ＭＳ ゴシック">アカウント作成のために必要な情報を入力してください</font> <br>
　　　 
          
          
             <table width="600" border="0">
                 <form action="account.html" method="post">
                      <tr>
                          <th>名前:</th>
                          <td>
                              <input type="text" name="name" value="" size="24">
                          </td>
                      </tr>

                      <tr>
                          <th>フリガナ:</th>
                          <td>
                              <input type="text" name="furigana" value="" size="24">
                         </td>
                      </tr>

                      <tr>
                          <th>メールアドレス:</th>
                          <td>
                              <input type="text" name="mail1" value="" size="24">
                         </td>
                      </tr>

                      <tr>
                          <th>もう一度入力してください:</th>
                          <td>
                              <input type="text" name="mail2" value="" size="24">
                         </td>
                      </tr>

　　　　　　　　　　　<tr>
                          <th>電話番号:</th>
                          <td>
                              <input type="text" name="tell" value="" size="24"><br>
                         </td>
                      </tr> 
                 <br>
                      <tr><td>
                         <h4>パスワード:<br>
                         <p><u>※ここで入力したパスワードが利用パスワードになります<u><p><h4>
                              
                          </td>
		
                          <td>
                              <input type="password" name="pass" value="" size="24">
                         </td>
                       </tr>
                      
                      <tr>
                          <th>
                            　パスワードを<br>
                             もう一度入力してください:
                          </th>
                          <td>
                              <input type="password" name="pass2" value="" size="24">
                         </td>
                      </tr>

                      <tr>
                          <td colspan="2">
                              <input type="submit" value="アカウントの作成">
                          </td>
                      </tr>
                  </form>
              </table>
         </div>
         <body style="background-image: url(./img/back22.gif);">
      </center>
{/block}