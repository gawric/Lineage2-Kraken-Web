
function initSend(nextlink){
    hideButtonLoadingById("warning_all_payments");
    hideButtonLoadingById("success_all_payments");
    showButtonLoadingById("loading_all_payments");
    sendJsonDataServer(nextlink);
}
function sendJsonDataServer(nextlink){
    $.ajax({
        url: nextlink,
        type: 'get',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function( data, textStatus, jQxhr ){
            if(!!jQxhr.responseJSON.data_result != undefined){
               
               datajson = jQxhr.responseJSON.data_result;
               var newdata = datajson.data;

                clearTableRows();
                forEachAccount(newdata);
                clearNavigable("navigable_pages");
                addNewNavigable("navigable_pages" , datajson.links);

               
                setTextById("Обновлено" , "text_success_all_payments");
                hideButtonLoadingById("loading_all_payments");
                showButtonLoadingById("success_all_payments");
            }
        },
        error: function (data) {
           // console.log("Fail responce");
           // console.log(data);
           if(data.status == 422) {
                setTextById("Запрос не прошел валидацию!" , "text_warning_all_payments");
                showButtonLoadingById("warning_all_payments");
             } else {
                setTextById("Неизвестная ошибка!" , "text_warning_all_payments");
                showButtonLoadingById("warning_all_payments");
             }
             hideButtonLoadingById("loading_all_payments");
        }
    
        
    });

}

function initFilterJson(param){
    hideButtonLoadingById("warning_all_payments");
    hideButtonLoadingById("success_all_payments");
    showButtonLoadingById("loading_all_payments");

    sendJsonFilter(param);
}

function sendJsonFilter(param){
    $.ajax({
        url: "/adminPayments/filter?"+param,
        type: 'get',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function( data, textStatus, jQxhr ){
            if(!!jQxhr.responseJSON.data_result != undefined){
                 console.log(jQxhr.responseJSON);
                datajson = jQxhr.responseJSON.data_result;

 
                 clearTableRows();
                 forEachAccount(datajson);
                 clearNavigable("navigable_pages");
                 //addNewNavigable("navigable_pages" , datajson.links);
 
                
                 setTextById("Обновлено" , "text_success_all_payments");
                 hideButtonLoadingById("loading_all_payments");
                 showButtonLoadingById("success_all_payments");
             }
        },
        error: function (data) {
           // console.log("Fail responce");
           // console.log(data);
           if(data.status == 422) {
                setTextById("Запрос не прошел валидацию!" , "text_warning_all_payments");
                showButtonLoadingById("warning_all_payments");
             } else {
                setTextById("Неизвестная ошибка!" , "text_warning_all_payments");
                showButtonLoadingById("warning_all_payments");
             }
            
             hideButtonLoadingById("loading_all_payments");
        }
    
        
    });

}

function clearTableRows(){
    $("#table_all_payments").children('tbody').children('tr').remove();
 }

 function forEachAccount(newdata){
    newdata.forEach(function(item) {
        addRowToTable(item);
    });
 }

 function addRowToTable(item){
    if(item != undefined){

        var order_id = item.order_id;
        var username = item.username;
        var char_name = item.char_name;
        var col = item.col;
        var server_name= item.server_name;
        var dateObj =  new Date(item.payment_data);
        var success_status = item.success_status;
        var l2account_name = item.l2account_name;
        var payment_name = item.payment_name;
       
       
        addRows(order_id , username , char_name , col , server_name , payment_name , formatDate(dateObj) , success_status , l2account_name)
    }
}

function addRows(order_id , username , char_name , col , server_name , payment_name , payment_data , success_status , l2account_name){
    $("#table_all_payments").find('tbody')
    .append($('<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">')
        .append($('<th class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">').text(order_id))
        .append($('<td class="px-6 py-4">').text(username))
        .append($('<td class="px-6 py-4">').text(l2account_name))
        .append($('<td class="px-6 py-4">').text(char_name))
        .append($('<td class="px-6 py-4">').text(col))
        .append($('<td class="px-6 py-4">').text(server_name))
        .append($('<td class="px-6 py-4">').text(payment_name))
        .append($('<td class="px-6 py-4">').text(payment_data))
        .append($('<td class="px-6 py-4">').text(success_status))
    );


   
}

function clearNavigable(navigable_id){
    $("#"+navigable_id).empty();
}

function addNewNavigable(navigable_id , links){

    links.forEach(function(item) {
        if(item.active){
            $("#"+navigable_id).append('<li><a href="#" onClick="getPaginationPage(this , \''+item.url+'\')" aria-current="page" class="z-10 px-3 py-2 leading-tight text-blue-600 border border-blue-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">'+item.label+'</a></li>');
        }
        else{
            $("#"+navigable_id).append('<li><a href="#" onClick="getPaginationPage(this , \''+item.url+'\')" aria-current="page" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">'+item.label+'</a> </li>');
        }
    });
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
