
{* ДОБАВИТЬ НОВУЮ КОМПАНИЮ ПО ИНН *}
{include file="header.tpl" title=foo}

<div class="zagolovok"> Добавить Новую компанию по ИНН</div>
 {*    ********************** ИНН Заказчика   ********************} 

<form enctype="multipart/form-data" action="pdo_connect_db/insert_new_comp_in_bd.php" method="post">


{*    ********************** Прячем тут ИНН если он был введен  ***************}  
<div class="block green_bgc">  
 <p class="pad5px width15 zhir"> ИНН Заказчика :
{if isset({$input_inn})}
    <input required type="number" name="InnCustomer" value="{$input_inn}">  
{else} 
    <input required type="number" name="InnCustomer" value="">  
{/if}
</p>



 {*    ********************** Наименование Заказчика   ********************} 

 <p class="pad5px width15 zhir">Наименование Заказчика : <input required type="text" name="NameCustomer" value ="" size="70"></p>

 {*    ********************** Телефон Заказчика   ********************} 
<p class="pad5px width15 zhir">Телефон Заказчика : <input name="TelCustomer" size="70" data-phone-pattern></p>
        
        


 {*    ********************** Почта Заказчика   ********************} 
 <p class="pad5px width15 zhir">Эл. Почта Заказчика : <input type="email" name="EmailCustomer" value ="" size="70"></p>

 {*    ********************** Контактное лицо Заказчика   ********************} 
   <p class="pad5px width15 zhir">Контактное лицо   : <input type="text" name="ContactCustomer" value ="" size="70"></p>

 {*    ********************** Адрес Заказчика   ********************} 
   <p class="pad5px width15 zhir">Адрес Заказчика   : <input type="text" name="Adress" value ="" size="70"></p>



 {*  ********************************** Кнопка Создать ***************}
 
 <p><input type="submit" value="Создать"></p>


 </div>
 </form>
            
{include file="footer.tpl"}
              
