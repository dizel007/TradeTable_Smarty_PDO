<!-- Корректировка данных о Компании -->
{if ($typeQuery == 200)}

  <div class="dm-overlay" id="win8">
      <div class="dm-table">
          <div class="dm-cell">
              <div class="dm-modal">
                  <a href="#close" class="close"></a>
      <form  action="changedb/update_inn_company.php?id={$id}&typeQuery=200" method="post">
 <table class="modal_tabel" width="100%" cellspacing="0" cellpadding="5">

       <tr> 
          <td width="200" valign="top">ИНН КОМПАНИИ</td>
          <td valign="top">{$company_arr[0]['inn']}</td>
          <td> 
             <input type="hidden" name="inn" value="{$company_arr[0]['inn']}">
          </td>
      </tr>
      <tr> 
          <td> 
              <input type="hidden" name="id" value="{$id}"></p>
        </td>
      </tr>
      <tr> 
          <td width="200" valign="top">КРАТКОЕ Наименование КОМПАНИИ</td>
          <td valign="top">{$company_arr[0]['name']}</td>
      </tr>
      <tr> 
          <td width="200" valign="top">Полное Наименование КОМПАНИИ</td>
          <td valign="top">{$company_arr[0]['fullName']}</td>
      </tr>
  
      <tr> 
          <td width="200" valign="top">Контактное Лицо</td>
         <td valign="top">{$company_arr[0]['contactFace']}</td>
         <td>   
              <p>    
                <textarea name="contactFace" rows="3" cols="50">{$company_arr[0]['contactFace']}</textarea>
              </p>
         </td>
        </tr>
        <tr> 
          <td width="200" valign="top">Юрид. Адрес</td>
          <td valign="top">{$company_arr[0]['adress']}</td>
      </tr>
      <tr> 
          <td width="200" valign="top">Коментарий</td>
          <td valign="top">{$company_arr[0]['comment']}</td>
          <td>   
              <p>    
                <textarea name="comment" rows="3" cols="50">{$company_arr[0]['comment']}</textarea>
              </p>
         </td>
      </tr>
               
</table>
                                    
       <p><input type="submit" value="Отправить"></p>
      </form>
     </div>
    </div>
   </div>
  </div>
  
{/if}
<!--    Добавление НОВОГО НОМЕРА телефона -->

 {if ($typeQuery == 309) }

  <div class="dm-overlay" id="win309">
      <div class="dm-table-phone">
          <div class="dm-cell-phone">
              <div class="dm-modal-phone">
                  <a href="#close" class="close"></a>
      
      <div class ="center">ДОБАВЛЕНИЕ НОВОГО ТЕЛЕФОННОГО НОМЕРА<br><br></div>
                  <form  action="changedb/insert_telephone.php" method="get">
 <table class="modal_tabel" width="100%" cellspacing="0" cellpadding="5">
 <caption>Наименование КОМПАНИИ: {$company_arr[0]['name']}</caption>

       <tr> 
          <td width="100" valign="top">ИНН</td>
           <td><input type="hidden" name="inn" value="{$company_arr[0]['inn']}">{$company_arr[0]['inn']}</td>
      </tr>
      <tr> 
        <td> 
          <!-- передаем id  чтобы знать куда вернуться -->
             <input type="hidden" name="id" value="{$id}">   
        </td>
      </tr>
      
      <tr> 
          <td valign="top">Телефон</td>
           <td>   
         <input type="text" class="form-control" id="phone2" name="telefon" placeholder="+7 (999) 999-99-99" autocomplete="off">
	   
          </td>
      </tr>
      <tr>           
        <td valign="top">WhatsApp</td>
           <td> 
                <select size="1" name="whatsapp">
                      <option value="1">есть</option>
                      <option selected value="0">нет</option>
                 </select>
            
          </td>
    </tr>
    
     <tr>           
        <td valign="top">Актуальность номера</td>
              <td> 
            
                  <select id="js-phone-num" size="1" name="actual_phone">
                      <option value="Актуальный">Актуальный</option>
                      <option value="Неактуальный">Неактуальный</option>
                      <option value="Не звонить">Не звонить</option>
                      <option selected value="Новый">Новый</option>
                      <option value=""></option>
                </select>
            
          </td>
    </tr>
      <tr> 
          <td width="200" valign="top">Контактное Лицо</td>
         <td>   
            <textarea name="contactName" rows="1" cols="30"></textarea>
         </td>
        </tr>
      <tr> 
          <td width="200" valign="top">Коментарий</td>
          <td>   
                 <textarea name="commentPhone" rows="3" cols="30"></textarea>
          </td>
      </tr>
           </table>
                              
       <p><input type="submit" value="Отправить"></p>
      </form>
     </div>
    </div>
   </div>
  </div>

{/if}


<!--  *******************   ******** Корректировка телефонного номера -->
{if ($typeQuery == 300) }
{foreach $telephons_company as $tel_value}
{if $tel_value['id'] == $id_phone}
  <div class="dm-overlay" id="win300">
      <div class="dm-table">
          <div class="dm-cell">
              <div class="dm-modal">
                  <a href="#close" class="close"></a>
      
      <div class ="center">ИЗМЕНЕНИЕ ДАННЫХ ТЕЛЕФОННОГО НОМЕРА<br><br></div>
                  <form  action="changedb/update_telephone.php?id={$id_phone}" method="post">
 <table class="modal_tabel" width="100%" cellspacing="0" cellpadding="5">
 <caption>Наименование КОМПАНИИ: {$company_arr[0]['name']}</caption>
 <caption><b>Телефон: {$tel_value['telephone']}</b></caption>

      <tr> 
        <td> 
             <input type="hidden" name="id_phone_cor" value="{$id_phone}">
        </td>
        <td> 
          <!-- передаем id  чтобы знать куда вернуться -->
             <input type="hidden" name="id" value="{$id}">   
        </td>
      </tr>
      
      <tr>           
        <td valign="top">WhatsApp</td>
        <td valign="top">{$tel_value['whatsapp']}</td>
        <td> 
                  <select size="1" name="whatsapp">
                      <option selected value = "{$tel_value['whatsapp']}">{$tel_value['whatsapp']}</option>
                      <option value="1">есть</option>
                      <option value="0">нет</option>
                  </select>
            
          </td>
    </tr>

    <tr >           
        <td valign="top">Актуальность номера</td>



        <td valign="top">{$tel_value['actual']}</td>
         <td> 
            
                  <select id="js-phone-num" size="1" name="actual_phone">
                      <option id="js-new-modal-" selected value = "{$tel_value['actual']}">{$tel_value['actual']}</option>
                      <option value="Актуальный">Актуальный</option>
                      <option value="Неактуальный">Неактуальный</option>
                      <option value="Не звонить">Не звонить</option>
                      <option value="Новый">Новый</option>
                      <option value=""></option>
                </select>
            
          </td>
    </tr>

     <tr> 
          <td width="200" valign="top">Контактное Лицо</td>
          <td valign="top">{$tel_value['name']}</td>
          <td>   
              <textarea name="contactName" rows="1" cols="30">{$tel_value['name']}</textarea>
         </td>
     </tr>
  
     <tr> 
          <td width="200" valign="top">Коментарий</td>
          <td valign="top">{$tel_value['comment']}</td>
          <td>   
              <p>    
                <textarea name="commentPhone" rows="3" cols="30">{$tel_value['comment']}</textarea>
              </p>
         </td>
      </tr>


                           
 
           </table>
                                    
       <p><input type="submit" value="Отправить"></p>
      </form>
     </div>
       </div>
   </div>
  </div>
{/if}
{/foreach}
 {/if}
<!-- *********************************// корректировка EMAIL /////////************************* -->
 {if $typeQuery == 400}

{foreach $emails_company as $email_value}
 {if $email_value['id'] == $id_email}
  <div class="dm-overlay" id="win400">
      <div class="dm-table">
          <div class="dm-cell">
              <div class="dm-modal">
                  <a href="#close" class="close"></a>
      
      <div class ="center">ИЗМЕНЕНИЕ ДАННЫХ EMAIL<br><br></div>
                  <form  action="changedb/update_email.php?id={$id}" method="post">
 <table class="modal_tabel" width="100%" cellspacing="0" cellpadding="5">
 <caption>Наименование КОМПАНИИ: {$company_arr[0]['name']}</caption>
 
 <caption><b>Email: {$email_value['email']}</b></caption>

      <tr> 
        <td> 
             <input type="hidden" name="id_email_cor" value="{$id_email}">
        </td>
        <td> 
          <!-- передаем id  чтобы знать куда вернуться -->
             <input type="hidden" name="id" value="{$id}">   
        </td>
      </tr>
      <tr>           
      </tr>

      <tr>           
        <td valign="top">Актуальность email</td>
        <td valign="top">{$email_value['actual']}</td>
         <td> 
            
                  <select id="js-actual_email" size="1" name="actual_email">
                      <option id="js-new-modal-" selected value = "{$email_value['actual']}">{$email_value['actual']}</option>
                      <option value="Актуальная">Актуальная</option>
                      <option value="Неактуальная">Неактуальная</option>
                      <option value="Новая">Новая</option>
                      <option value=""></option>
                </select>
            
          </td>
    </tr>

      <tr> 
          <td width="200" valign="top">Коментарий</td>
          <td valign="top">{$email_value['comment']}</td>
          <td>   
              <p>    
                <textarea name="commentEmail" rows="3" cols="30">{$email_value['comment']}</textarea>
              </p>
         </td>
      </tr>

             
 
   </table>
                                    
       <p><input type="submit" value="Отправить"></p>
      </form>
     </div>
    </div>
   </div>
  </div>
{/if}
{/foreach}
{/if}

<!-- ***********************************// Добавление НОВОГО EMAIL  ///////// -->
{if ($typeQuery == 409)}
  
  <div class="dm-overlay" id="win409">
      <div class="dm-table-phone">
          <div class="dm-cell-phone">
              <div class="dm-modal-phone">
                  <a href="#close" class="close"></a>
      
      <div class ="center">ДОБАВЛЕНИЕ НОВОЙ ЭЛЕКТРОННОЙ ПОЧТЫ<br><br></div>

<form  action="changedb/insert_email.php" method="get">
  <table class="modal_tabel" width="100%" cellspacing="0" cellpadding="5">
    <caption>Наименование КОМПАНИИ: {$company_arr[0]['name']}</caption>

       <tr> 
          <td width="100" valign="top">ИНН</td>
           <td>
              <input type="hidden" name="inn" value="{$company_arr[0]['inn']}">
              {$company_arr[0]['inn']}  
           </td>
      </tr>
      <tr> 
        <td> 
          <!-- передаем id  чтобы знать куда вернуться -->
             <input type="hidden" name="id" value="{$id}">   
        </td>
      </tr>
      
      <tr> 
          <td valign="top">email</td>
           <td>   
              <input type="email"  name="new_email" value="">
	         </td>
      </tr>
      <tr>           
        <td valign="top">Актуальность почты</td>
              <td> 
            
                  <select size="1" name="actual_email">
                      <option value="Актуальная">Актуальная</option>
                      <option value="Неактуальная">Неактуальная</option>
                      <option selected value="Новая">Новая</option>
                      <option value=""></option>
                </select>
            
          </td>
    </tr>
      <tr> 
          <td width="200" valign="top">Коментарий</td>
          <td>   
                 <textarea name="commentEmail" rows="3" cols="30"></textarea>
          </td>
      </tr>
</table>
         <p><input type="submit" value="Отправить"></p>
      </form>
     </div>
    </div>
   </div>
  </div>

{/if}
