
function initSend(itemsnumber , itemspromonumber , selectitem){
    hideButtonLoadingById("warning_promo");
    hideButtonLoadingById("success_promo");
    showButtonLoadingById("loading_promo");
    data =  {'itemsnumber': parseInt(itemsnumber),'itemspromonumber': parseInt(itemspromonumber),'selectitem':parseInt(selectitem)}
    sendCreatePromo(data);
}

function sendCreatePromo(data){
   
    $.ajax({
        url: "/adminPromo/create",
        type: 'post',
        data: JSON.stringify(data),
        contentType: 'application/json; charset=utf-8',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function( data, textStatus, jQxhr ){

            if(!!jQxhr.responseJSON != undefined){
               setTextById("Обновлено" , "text_success_promo");
               hideButtonLoadingById("loading_promo");
               showButtonLoadingById("success_promo");
            }
        },
        error: function (data) {
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