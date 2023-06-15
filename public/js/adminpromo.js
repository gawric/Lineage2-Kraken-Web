function initSendPromoPagination(nextlink){
    hideButtonLoadingById("warning_promo");
    hideButtonLoadingById("success_promo");
    showButtonLoadingById("loading_promo");
    clearTableRowsbyId("table_all_promo")
    getJsonDataPaginationToPromo(nextlink);
}


function initSend(itemsnumber , itemspromonumber , selectitem){
    hideButtonLoadingById("warning_promo");
    hideButtonLoadingById("success_promo");
    showButtonLoadingById("loading_promo");
    data =  {'itemsnumber': parseInt(itemsnumber),'itemspromonumber': parseInt(itemspromonumber),'selectitem':parseInt(selectitem)}
    sendCreatePromo(data);
}

function initSendOnlyUsedPromo(nextlink){
    hideButtonLoadingById("warning_promo");
    hideButtonLoadingById("success_promo");
    showButtonLoadingById("loading_promo");
    clearTableRowsbyId("table_all_promo");
    getJsonDataOnlyUsedPromo(nextlink);
    
}

function initGetInfoPromo(promo_code){
    showButtonLoadingById("loading_admin_promo");
    hideButtonLoadingById("warning_admin_promo");
    hideButtonLoadingById("success_admin_promo");
    getJsonDataInfoPromo(promo_code);
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
              // console.log(newdata);
               
               console.log(getSizeTableRows("table_all_promo"));
               if(getSizeTableRows("table_all_promo") == 1){
                 forEachAddPromo(newdata.data);
               }
               clearNavigable("navigable_pages_promo");
               addNewNavigable("navigable_pages_promo" , newdata.links);
              // clearNavigable("navigable_pages_users");
              // addNewNavigableUsers("navigable_pages_users" , datajson.links);

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

function getJsonDataPaginationToPromo(nextlink){
    $.ajax({
        url: nextlink,
        type: 'get',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function( data, textStatus, jQxhr ){
           // console.log(jQxhr.responseJSON.data_result);
            if(!!jQxhr.responseJSON.data_result != undefined){
               
               newdata = jQxhr.responseJSON.data_result;
               forEachAddPromo(newdata.data);

               clearNavigable("navigable_pages_promo");
               addNewNavigable("navigable_pages_promo" , newdata.links);

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


function getJsonDataOnlyUsedPromo(nextlink){
    $.ajax({
        url: nextlink,
        type: 'get',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function( data, textStatus, jQxhr ){
            console.log(jQxhr.responseJSON.data_result);
            if(!!jQxhr.responseJSON.data_result != undefined){
               
               newdata = jQxhr.responseJSON.data_result;
               forEachAddPromo(newdata.data);

               clearNavigable("navigable_pages_promo");
               addNewNavigable("navigable_pages_promo" , newdata.links);

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

function getJsonDataInfoPromo(promo_code){
    $.ajax({
        url: "/adminPromo/promo_info?"+"code="+promo_code,
        type: 'get',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function( data, textStatus, jQxhr ){
            console.log(jQxhr.responseJSON.data_result);
            if(!!jQxhr.responseJSON.data_result != undefined){
                var obj = jQxhr.responseJSON.data_result;

                if(!Array.isArray(obj)){
                    setDataInfo(obj.id , obj.code , obj.account_name, obj.char_name , obj.created_at);
                }
                
              // newdata = jQxhr.responseJSON.data_result;
               //forEachAddPromo(newdata.data);

               //clearNavigable("navigable_pages_promo");
               //addNewNavigable("navigable_pages_promo" , newdata.links);
              // setDataInfo(id , promo_code , account_name, char_name , data)
               setTextById("Обновлено" , "success_text_admin_promo");
               hideButtonLoadingById("loading_admin_promo");
               showButtonLoadingById("success_admin_promo");
            }
        },
        error: function (data) {
         
            if(data.status == 422) {
                setTextById("Запрос не прошел валидацию!" , "text_warning_admin_promo");
                showButtonLoadingById("warning_admin_promo");
             } 
             else {
                setTextById("Неизвестная ошибка!" , "text_warning_admin_promo");
                showButtonLoadingById("warning_admin_promo");
              }
             hideButtonLoadingById("loading_admin_promo");
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
       // console.log(item);
        var id = item.id;
        var code = item.code;
        var count = item.count;
        var item_id = item.item_id;
        var create_name = item.create_name;
        var is_used = item.is_used;
        var created_at =  new Date(item.created_at);

      
       
       
        addRowsModel(id , code , count  , formatDate(created_at) , create_name , convertItemIdToItemName(item_id) , convertUsedToString(is_used , code))
    }
}

function addRowsModel(id , code , count  , created_at , create_name , item_name , is_used){
    $("#table_all_promo").find('tbody')
    .append($('<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">')
        .append($('<th class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">').text(id))
        .append($('<td class="px-6 py-4">').text(code))
        .append($('<td class="px-6 py-4">').text(count))
        .append($('<td class="px-6 py-4">').text(item_name))
        .append($('<td class="px-6 py-4">').text(create_name))
        .append($('<td class="px-6 py-4">').text(created_at))
        .append($('<td class="px-6 py-4">'+is_used))
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


  function convertUsedToString(is_used , promo_code){
    if(is_used){
        return '<a href="#" onclick=\'return openDialogAdminPromo(\"'+promo_code+'\")\' class=\"font-medium text-blue-600 dark:text-blue-500 hover:underline\">Использован</a>';
    }

    return '<p>Свободен</p>';
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


function clearTableRowsbyId(id_table){
    $("#"+id_table).children('tbody').children('tr').remove();
}

function clearNavigable(navigable_id){
    $("#"+navigable_id).empty();
}

function addNewNavigable(navigable_id , links){

    links.forEach(function(item) {
        if(item.active){
            $("#"+navigable_id).append('<li><a href="#" onClick="getPaginationPromoFilter(this , \''+item.url+'\')" aria-current="page" class="z-10 px-3 py-2 leading-tight text-blue-600 border border-blue-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">'+item.label+'</a></li>');
        }
        else{
            $("#"+navigable_id).append('<li><a href="#" onClick="getPaginationPromoFilter(this , \''+item.url+'\')" aria-current="page" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">'+item.label+'</a> </li>');
        }
    });
}

function getSizeTableRows(id_table){
    return  $('#'+id_table+' tr').length;
}


function setDataInfo(id , promo_code , account_name, char_name , data){
    document.getElementById("promo_used_id").value = id;
    document.getElementById("promo_code").value= promo_code;
    document.getElementById("use_account_name").value= account_name;
    document.getElementById("use_char_name").value= char_name;
    document.getElementById("use_data").value= data;
}

function clearDataInfo(){
    document.getElementById("promo_used_id").value = "";
    document.getElementById("promo_code").value= "";
    document.getElementById("use_account_name").value= "";
    document.getElementById("use_char_name").value= "";
    document.getElementById("use_data").value= "";
}