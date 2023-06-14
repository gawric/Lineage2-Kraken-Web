function initSendActivatePromo(char_name , server_name , promo_code , account_name){
    hideButtonLoadingById("warning_promo");
    hideButtonLoadingById("success_promo");
    showButtonLoadingById("loading_promo");

    data =  {'char_name': char_name,'server_name': server_name,'promo_code':promo_code,'account_name':account_name}
    sendActivatePromo(data);
}


function sendActivatePromo(data){
   
    $.ajax({
        url: "/dashboardchars/act_promo",
        type: 'post',
        data: JSON.stringify(data),
        contentType: 'application/json; charset=utf-8',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function( data, textStatus, jQxhr ){

            if(!!jQxhr.responseJSON != undefined){
               if(!!jQxhr.responseJSON){
                    if(jQxhr.responseJSON.hasOwnProperty('error')){
                        setTextById(jQxhr.responseJSON.error , "success_text_promo");
                    }
                    else{
                        setTextById(jQxhr.responseJSON.success , "success_text_promo");
                    }
                    
               }

               
               hideButtonLoadingById("loading_promo");
               showButtonLoadingById("success_promo");
            }
        },
        error: function (data) {
            console.log(data);
           if(data.status == 422) {
               setTextById("Запрос не прошел валидацию!" , "text_warning_promo");
               showButtonLoadingById("warning_promo");
            } 
            else {
               setTextById("Неизвестная ошибка!" , "text_warning_promo");
               showButtonLoadingById("warning_promo");
             }
             hideButtonLoadingById("loading_promo");

        }
    
    });

}