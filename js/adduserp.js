$(document).ready(function(){ 

	$("#myModalBtn").on("click", function(){ // Обработчик события нажатия на кнопку "Добавить родственника" 
		$("#myModal").dialog({ // Открываем модальную форму
			autoOpen: true, // Автоматически открывать форму
			closeOnEscape: true, // Закрывать при нажатии клавиши Esc
			draggable: true, // Разрешить перетаскивание формы
			modal: true, // Отображать модально
			dialogClass: "", // Название дополнительного для формы класса
			show: { effect: "blind", duration: 500 }, // Плавное открытие формы
			hide: { effect: "blind", duration: 500 }, // Плавное закрытие формы
			title: "Родственник", // Заголовок окна
			buttons: [{ // Генерируемые кнопки
					text: "Выбрать", // Подпись первой кнопки
					click: function() { // Логика поведения первой кнопки
						$(this).dialog("close"); // Закрываем форму
				        $.ajax({ // Формируем Ajax запрос к серверу
				            url: "addrealitv",
				            type: "POST",
				            async: false,
				            dataType: "json",
				            data: {
				                f: $("#f").val(),
				                i: $("#i").val(),
				                o: $("#o").val(),
				                mail: $("#email").val(),
				                phone: $("#phone").val(),
				                typereal: $("#typereal").val()
				            },
				            success: function(data, textStatus, jqXHR){
				                $("#rodstv").append("<tr><td>"+data["fio"]+"</td><td hidden=\"true\" class=\"id\">"+data["id"]+"</td><td><button class=\"btnDelete\" name=\"delete\">X</button></td></tr>");
				
				            },
				            error: function(jqXHR, textStatus, errorThrown){
				            	alert("Произошла ошибка: " + errorThrown);
				            }
				        });
						
						
					}
				},{
					text: "Закрыть", // Подпись второй кнопки
					click: function() { // Логика поведения второй кнопки
						$( this ).dialog("close");
				}
			}]
		});
    	$("#f").val("");
        $("#i").val("");
        $("#o").val("");
        $("#email").val("");
        $("#phone").val("");
        $("#typereal").val("");
		return false; // Предотвращаем срабатывание ссылки
	});
	
	$("#rodstv").on("click", ".btnDelete", function(){
		var $current = $(this).closest("tr");
        $.ajax({ // Формируем Ajax запрос к серверу
            url: "deleterealitv",
            type: "POST",
            async: false,
            dataType: "json",
            data: {
                "id": $current.find(".id").text()
            },
            success: function(data, textStatus, jqXHR){
        		$current.remove();
            },
            error: function(jqXHR, textStatus, errorThrown){
            	alert("Произошла ошибка: " + errorThrown);
            }
        });
	});
	
})