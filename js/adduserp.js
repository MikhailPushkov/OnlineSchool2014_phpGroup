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
                            familia: $("#familia").val(),
                            imya: $("#imya").val(),
                            otchestvo: $("#otchestvo").val(),
                            email: $("#email").val(),
                            phone: $("#phone").val(),
                            tiprodstv: $("#tiprodstv").val()
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
        $("#familia").val("");
        $("#imya").val("");
        $("#otchestvo").val("");
        $("#email").val("");
        $("#phone").val("");
        $("#tiprodstv").val("");
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
                $current.remove('tr');
            },
            error: function(jqXHR, textStatus, errorThrown){
                alert("Произошла ошибка: " + errorThrown);
            }
        });
    });
    $("#BtnPred").on("click", function(){ // Обработчик события нажатия на кнопку "Добавить родственника"
        $("#myModalPred").dialog({ // Открываем модальную форму
            autoOpen: true, // Автоматически открывать форму
            closeOnEscape: true, // Закрывать при нажатии клавиши Esc
            draggable: true, // Разрешить перетаскивание формы
            modal: true, // Отображать модально
            dialogClass: "", // Название дополнительного для формы класса
            show: { effect: "blind", duration: 500 }, // Плавное открытие формы
            hide: { effect: "blind", duration: 500 }, // Плавное закрытие формы
            title: "Предмет", // Заголовок окна
            buttons: [{ // Генерируемые кнопки
                text: "Выбрать", // Подпись первой кнопки
                click: function() { // Логика поведения первой кнопки
                    $(this).dialog("close"); // Закрываем форму
                    $.ajax({ // Формируем Ajax запрос к серверу
                        url: "addpredmet",
                        type: "POST",
                        async: false,
                        dataType: "json",
                        data: {
                            article: $("#article").val()
                        },
                        success: function(data, textStatus, jqXHR){
                            $("#predmet").append("<tr><td>"+data["article"]+"</td><td hidden=\"true\" class=\"id\">"+data["id"]+"</td><td><button class=\"btnDelete\" name=\"delete\">X</button></td></tr>");

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
        $("#article").val("");
        return false; // Предотвращаем срабатывание ссылки
    });

    $("#predmet").on("click", ".btnDelete", function(){
        var $current = $(this).closest("tr");
        $.ajax({ // Формируем Ajax запрос к серверу
            url: "delpredmet",
            type: "POST",
            async: false,
            dataType: "json",
            data: {
                "id": $current.find(".id").text()
            },
            success: function(data, textStatus, jqXHR){
                $current.remove('tr');
            },
            error: function(jqXHR, textStatus, errorThrown){
                alert("Произошла ошибка: " + errorThrown);
            }
        });
    });

})