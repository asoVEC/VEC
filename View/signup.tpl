{extends file='View/layout.tpl'}
{block title}{/block}

{block main}
 <center>
 <div style="padding: 10px; margin-bottom: 10px; border: 1px solid #333333; border-radius: 10px; width: 1200px;">
      <font size="6" face="�l�r ����,��������">����o�^</font> <br><br>
�@�@�@�@<font size="4" face="�l�r �S�V�b�N">�A�J�E���g�쐬�̂��߂ɕK�v�ȏ�����͂��Ă�������</font> <br>
�@�@�@ 
          
          
             <table width="600" border="0">
                 <form action="account.html" method="post">
                      <tr>
                          <th>���O:</th>
                          <td>
                              <input type="text" name="name" value="" size="24">
                          </td>
                      </tr>

                      <tr>
                          <th>�t���K�i:</th>
                          <td>
                              <input type="text" name="furigana" value="" size="24">
                         </td>
                      </tr>

                      <tr>
                          <th>���[���A�h���X:</th>
                          <td>
                              <input type="text" name="mail1" value="" size="24">
                         </td>
                      </tr>

                      <tr>
                          <th>������x���͂��Ă�������:</th>
                          <td>
                              <input type="text" name="mail2" value="" size="24">
                         </td>
                      </tr>

�@�@�@�@�@�@�@�@�@�@�@<tr>
                          <th>�d�b�ԍ�:</th>
                          <td>
                              <input type="text" name="tell" value="" size="24"><br>
                         </td>
                      </tr> 
                 <br>
                      <tr><td>
                         <h4>�p�X���[�h:<br>
                         <p><u>�������œ��͂����p�X���[�h�����p�p�X���[�h�ɂȂ�܂�<u><p><h4>
                              
                          </td>
		
                          <td>
                              <input type="password" name="pass" value="" size="24">
                         </td>
                       </tr>
                      
                      <tr>
                          <th>
                            �@�p�X���[�h��<br>
                             ������x���͂��Ă�������:
                          </th>
                          <td>
                              <input type="password" name="pass2" value="" size="24">
                         </td>
                      </tr>

                      <tr>
                          <td colspan="2">
                              <input type="submit" value="�A�J�E���g�̍쐬">
                          </td>
                      </tr>
                  </form>
              </table>
         </div>
         <body style="background-image: url(./img/back22.gif);">
      </center>
{/block}