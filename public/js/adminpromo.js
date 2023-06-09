
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
               newdata = jQxhr.responseJSON.data_result;
               forEachAddPromo(newdata);
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



function forEachAddPromo(newdata){
   
    newdata.forEach(function(item) {
        addRows(item);
    });
 }

 function addRows(item){
    if(item != undefined){
        console.log(item);
        var id = item.id;
        var code = item.code;
        var count = item.count;
        var item_id = item.item_id;
        var create_name = item.create_name;
        var created_at =  new Date(item.created_at);

      
       
       
        addRowsModel(id , code , count  , formatDate(created_at) , create_name , convertItemIdToItemName(item_id))
    }
}

function addRowsModel(id , code , count  , created_at , create_name , item_name){
    $("#table_all_promo").find('tbody')
    .append($('<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">')
        .append($('<th class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">').text(id))
        .append($('<td class="px-6 py-4">').text(code))
        .append($('<td class="px-6 py-4">').text(count))
        .append($('<td class="px-6 py-4">').text(item_name))
        .append($('<td class="px-6 py-4">').text(create_name))
        .append($('<td class="px-6 py-4">').text(created_at))
    );

}


function convertItemIdToItemName(item_id){
    let selectElement = document.getElementById('select_items');
    let optionNames = [...selectElement.options].map(o => [o.text , o.value]);
    let result = optionNames.filter((option) => {
       // name_item = option[0];
       // id = option[1];
        return option[1] == item_id;
    });

    return result[0][0]
  }


  function formatDate(dateObj){
    

    day =  dateObj.getMonth();
    month = dateObj.getDate();
    minutes = dateObj.getMinutes();

    if (day < 10) {
        day = '0' + day;
    }
    
    if (month < 10) {
       month = `0${month}`;
    }

    if(minutes < 10){
        minutes = '0' + minutes;
    }
    
    return  `${dateObj.getFullYear()}-${day}-${month} ${dateObj.getHours()}:${minutes}:${dateObj.getSeconds()}`;
    //return dateObj.getFullYear()+"-"+ (dateObj.getMonth()+1) + "-" + dateObj.getDate() + " " +
   // dateObj.getHours() + ":" + dateObj.getMinutes();
}