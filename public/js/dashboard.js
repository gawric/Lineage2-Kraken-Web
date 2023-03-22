
function regL2User(server_id ,login , pass , password_confirmed){
    hideAlertCreateAccount();
    var json = getData(server_id , login , pass , password_confirmed);

    sendJsonDataServer(json);
}

function sendJsonDataServer(json){
    $.ajax({
        url: '/addL2User',
        dataType: 'json',
        type: 'post',
        contentType: 'application/json; charset=utf-8',
        data: JSON.stringify(json),
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function( data, textStatus, jQxhr ){
            if(!!jQxhr.responseJSON.success){
               console.log(jQxhr.responseJSON.success);
            }
        },
        error: function (data) {

            if(data.responseText != undefined){
                var dataErrors = $.parseJSON(data.responseText);
                if (!!dataErrors.message) {
                    setTextAlertCreateAccount(getTextError(dataErrors.errors));
                    showAlertCreateAccount();
                }
                else{
                    setTextAlertCreateAccount("Неизвестная ошибка");
                    showAlertCreateAccount();
                }
            }
            else{
                setTextAlertCreateAccount("Нет подключения к серверу");
                showAlertCreateAccount();
            }
            

        }
    
    });

}
//структура errors -> password-> Array(1)-> 0 "Не верный пароль"
function getTextError(arrErrors){
    var textMessage = "";
    if(Object.keys(arrErrors).length > 0){
        Object.keys(arrErrors).forEach(key => {
            textMessage =  arrErrors[key][0];
          });
    }

    return textMessage;
}

function getData(server_id , login , pass , password_confirmed){
    return { server_id: server_id, login:login , password:pass, password_confirmed: password_confirmed};
}





