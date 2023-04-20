function paymentsUser(select_server_id , char_name , select_service_payment , sum){
    // console.log(button_name)
     hideAlertCreateAccount();
     hideButtonLoadingBuyPayment();
     showButtonLoadingCreateAccount();
     hideAlertSuccessChangePass();

     var json = getData(select_server_id , char_name , select_service_payment , sum);
    // console.log(json);
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
                showButtonLoadingBuyPayment();
                showAlertSuccessChangePass();
                autoRedirect(jQxhr.responseJSON.success);
                setTextAlertSuccessChangePass("");
                setTextAlertSuccessChangePass("Если ваc автоматически не перенаправило: \n");
                setTextAlertSuccessChangePassPrepand("<b><a href="+jQxhr.responseJSON.success+">Нажми для перехода </a></b>");
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
                          showButtonLoadingBuyPayment();
                      }
                      else{
                         setTextAlertCreateAccount(getTextError(dataErrors.errors));
                         showAlertCreateAccount();
                         hideButtonLoadingCreateAccount();
                         showButtonLoadingBuyPayment();
                      }
                 
                 }
                 else{
                     setTextAlertCreateAccount("Неизвестная ошибка");
                     showAlertCreateAccount();
                     hideButtonLoadingCreateAccount();
                     showButtonLoadingBuyPayment();
                 }
             }
             else{
                 setTextAlertCreateAccount("Нет подключения к серверу");
                 showAlertCreateAccount();
                 hideButtonLoadingCreateAccount();
                 showButtonLoadingBuyPayment();
             }
             
 
         }
     
     });
 
 }

 function autoRedirect(url){
    $(location).attr('href', url); // Using this
 }

 function getData(select_server_id , char_name , select_service_payment , sum){
    return { 'select_server_id': select_server_id, 'char_name':char_name , 'select_service_payment':select_service_payment, 'sum': parseInt(sum)};
}