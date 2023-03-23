
function regL2User(server_id ,login , pass , password_confirmed){
    hideAlertCreateAccount();
    hideAlertSuccesCreateAccount();
    showButtonLoadingCreateAccount();
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
               setTextSuccessAlertCreateAccount(jQxhr.responseJSON.success);
               showAlertSuccesCreateAccount();
               hideButtonLoadingCreateAccount();
            }
        },
        error: function (data) {

            if(data.responseText != undefined){
                var dataErrors = $.parseJSON(data.responseText);
                if (!!dataErrors.message) {
                    setTextAlertCreateAccount(getTextError(dataErrors.errors));
                    showAlertCreateAccount();
                    hideButtonLoadingCreateAccount();
                }
                else{
                    setTextAlertCreateAccount("Неизвестная ошибка");
                    showAlertCreateAccount();
                    hideButtonLoadingCreateAccount();
                }
            }
            else{
                setTextAlertCreateAccount("Нет подключения к серверу");
                showAlertCreateAccount();
                hideButtonLoadingCreateAccount();
            }
            

        }
    
    });

}

function changePassL2User(server_id ,login , old_password , password , password_confirmed){
    hideAlertChangePass();
    showButtonLoadingChangePass();
    hideAlertSuccessChangePass();

    var json = getDataChangePass(server_id ,login , old_password , password , password_confirmed)
    sendChagePassJsonDataServer(json);
}

function sendChagePassJsonDataServer(json){
    $.ajax({
        url: '/changePassL2User',
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
               showAlertSuccessChangePass();
               setTextAlertSuccessChangePass(jQxhr.responseJSON.success);
               hideButtonLoadingChangePass()
            }
        },
        error: function (data) {

            if(data.responseText != undefined){
                var dataErrors = $.parseJSON(data.responseText);
                console.log(dataErrors.message);
                console.log(data);

                if (!!dataErrors.message) {
                    console.log(dataErrors.errors);
                    if(dataErrors.errors == undefined){
                        console.log('Message undefined');
                        setTextAlertChangePass(getTextError(dataErrors.message));
                        showAlertChangePass();
                        hideButtonLoadingChangePass();
                    }
                    else{
                        setTextAlertChangePass(getTextError(dataErrors.errors));
                        showAlertChangePass();
                        hideButtonLoadingChangePass();
                    }
                    
                }
                else{
                    setTextAlertChangePass("Неизвестная ошибка");
                    showAlertChangePass();
                    hideButtonLoadingChangePass();
                }
            }
            else{
                setTextAlertChangePass("Нет подключения к серверу");
                showAlertChangePass();
                hideButtonLoadingChangePass();
            }
            

        }
    
    });

}
//структура errors -> password-> Array(1)-> 0 "Не верный пароль"
function getTextError(arrErrors){
    console.log(arrErrors);
    var textMessage = "";

    if(typeof arrErrors === 'string' || arrErrors instanceof String){
        textMessage = getParceStringError(arrErrors);
    }
    else
    {
        textMessage = getParceObjectError(arrErrors);
    }

    return textMessage;
}

function getParceStringError(arrErrors){
    if(arrErrors.length > 0){
           
        return  arrErrors;
    }
    else{
        return  "Неизвестная ошибка";
    }
}
function getParceObjectError(arrErrors){
    var textMessage = "";
    if(arrErrors != undefined){
        if(Object.keys(arrErrors).length > 0){
            Object.keys(arrErrors).forEach(key => {
                textMessage =  arrErrors[key][0];
              });
        }
    }else{ 
        textMessage = "Неизвестная ошибка";
    }

    return textMessage;
}
function getDataChangePass(server_id ,login , old_password , password , password_confirmed){
    return { server_id: server_id , login:login , old_password:old_password, password: password , password_confirmed: password_confirmed};
}


function getData(server_id , login , pass , password_confirmed){
    return { server_id: server_id, login:login , password:pass, password_confirmed: password_confirmed};
}





