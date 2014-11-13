<html>
 <head>
 <title>Raspisanie</title>
 <style type="text/css">
td {
    text-align: center; /* Выравниваем текст по центру ячейки */
   }
table {
border: 1;
}
input {
size: 3;
}
</style>
 </head>

 <body id="bod">
 <center>
 <div class="modal fade " id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                          <div  class="modal-dialog ">
                                <div class="modal-content">

                                      <form  role="form" method="post" action="index" name="form">

                                          <div id="confrasp">

                                              <div class="header">
                                                  <h2>Расписание для класса N успешно сохранено
                                                  </h2>
                                              </div>
                                              <div class="buttonconf">

                                                  <input type="submit" name="confbtn" class="btn-large" value="Ок">

                                              </div>
                                          </div>
                                      </form>
                                </div>
                          </div>
                    </div> 
<table class="table-bordered">
<tbody id = "mainTb">
    <tr>
        <td colspan="13" /*Обьединяем 13 ячеек по горизонтали*/>Период дейсвия расписания дд.мм.гггг - дд.мм.гггг</td>
    </tr>
    <tr>
		<td rowspan="2"/*Обьединяем 2 ячейки по вертикали*/>Время урока</td>
		<td colspan="2">Пн, дд.мм.гггг</td>
        <td colspan="2">Вт, дд.мм.гггг</td>
        <td colspan="2">Ср, дд.мм.гггг</td>
        <td colspan="2">Чт, дд.мм.гггг</td>
        <td colspan="2">Пт, дд.мм.гггг</td>
        <td colspan="2">Сб, дд.мм.гггг</td>
        
    </tr>
    <tr id = "thirdTr">
	<script>
	var thirdTr = document.getElementById("thirdTr");/*Получаем обьект 3ей строки и добавляем в него хтмл*/
	for(var i = 0; i !=6; i++)
	{
		thirdTr.innerHTML += "<td>Предмет</td><td>Учитель</td>";
	}
	var arr = ["08:00 - 08:45","09:30 - 11:25","09:30 - 11:15","11:40 - 13:15","13:30 - 15:05","15:20 - 16:55","17:10 - 18:45"];
	var mainTb = document.getElementById("mainTb")/*Получаем обьект таблицы*/
	/*Цикл на добавление строк с парами*/
	for(var i = 0; i !=7; i++)
	{
		mainTb.innerHTML += '<tr id ="tr'+ i +'"><td>' +arr[i]+ '</td></tr>';
		var tr;
		tr = document.getElementById("tr" + i);
		for(var count = 0;count != 12; count++)
		{
			console.log('второй = '+ count)
            tr.innerHTML += '<td><input type="text" id="cell"/></td>';
		}	
	}

	</script>
            </tr>
			
</tbody>	
</table>
<a href="#myModal2" data-toggle="modal"><input type = "button" name="Sav" class="btn-large" id="btnL" value = "Сохранить"/></a>
<form action="index"><input type = "submit" class="btn-large" id="btnR" value = "Отмена"/></form>
</center>
 </body>
 </html>
