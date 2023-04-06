function paymentsUser(select_server_id , char_name , select_service_payment , sum){
    // console.log(button_name)
     hideAlertCreateAccount();
     showButtonLoadingCreateAccount();
     var json = getData(select_server_id , char_name , select_service_payment , sum);
     console.log(json);
     sendJsonDataServer(json);
 }

 function sendJsonDataServer(json){
     $.ajax({
         url: '/addPayments',
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


 function getData(select_server_id , char_name , select_service_payment , sum){
    return { 'select_server_id': select_server_id, 'char_name':char_name , 'select_service_payment':select_service_payment, 'sum': parseInt(sum)};
}