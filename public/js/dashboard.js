
function regL2User(server_id ,login , pass , password_confirmed , id , button_name){
   // console.log(button_name)
    hideAlertCreateAccount();
    hideAlertSuccesCreateAccount();
    showButtonLoadingCreateAccount();
    var json = getData(server_id , login , pass , password_confirmed);
    sendJsonDataServer(json , id ,  button_name);
}
var  click_count = 0;
function sendJsonDataServer(json , id , button_name){
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
              // console.log(jQxhr.responseJSON.success);
               setTextSuccessAlertCreateAccount(jQxhr.responseJSON.success);
               addRowToTable(jQxhr.responseJSON.result , id + click_count++ , button_name);
               showAlertSuccesCreateAccount();
               hideButtonLoadingCreateAccount();
            }
        },
        error: function (data) {

            if(data.responseText != undefined){
                var dataErrors = $.parseJSON(data.responseText);
                if (!!dataErrors.message) {
                    if(dataErrors.errors == undefined){
                         setTextAlertCreateAccount(getTextError(dataErrors.message));
                         showAlertCreateAccount();
                         hideButtonLoadingCreateAccount();
                     }
                     else{
                        setTextAlertCreateAccount(getTextError(dataErrors.errors));
                        showAlertCreateAccount();
                        hideButtonLoadingCreateAccount();
                     }
                
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

function addRowToTable(data , id , button_name){
    if(data != undefined){

        var count = data.count_characters;
        var dateauth = data.dateauth;
        var username = data.username;
        var name_server = data.name_server;
        var server_id = data.server_id;

        addRows(id , dateauth , username , count , name_server , server_id , button_name);
    }
}

function addRows(id , dateauth , username , count ,name_server , server_id , button_name){
    var button = createButton(server_id , username , id , button_name );
    $("#table_accounts").find('tbody')
    .append($('<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">')
        .append($('<th class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">').text(id))
        .append($('<td class="px-6 py-4">').text(username))
        .append($('<td class="px-6 py-4">').text(dateauth))
        .append($('<td class="px-6 py-4">').text(count))
        .append($('<td class="px-6 py-4">').text(name_server))
        .append($('<td>').append(button))
    );
}

function createButton(server_id , username , id , button_name){
    let button = document.createElement("button");
    button.className = "px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800  text-white cursor-pointer rounded-md";
    button.textContent = button_name;
   // button.onclick = clickOpenDialog(server_id , "'"+username+"'");
    button.setAttribute("onclick","clickOpenDialog("+server_id+" , "+"'"+username+"'"+");");

    return button;
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
               // console.log(dataErrors.message);
                //console.log(data);

                if (!!dataErrors.message) {
                   // console.log(dataErrors.errors);
                    if(dataErrors.errors == undefined){
                       // console.log('Message undefined');
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





