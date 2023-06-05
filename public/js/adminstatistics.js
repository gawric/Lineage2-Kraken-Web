function initSend(ip_address , day){
    hideButtonLoadingById("warning_visit");
    hideButtonLoadingById("success_visit");
    showButtonLoadingById("loading_visit");
    clearTableRowsbyId("table_visit")
    getJsonDataVisitToDayAndIp(ip_address , day);
}
function getJsonDataVisitToDayAndIp(ip_address , day){
    $.ajax({
        url: "/adminStatistics/visit?ip_address="+ip_address+"&day="+day,
        type: 'get',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function( data, textStatus, jQxhr ){
            if(!!jQxhr.responseJSON.result != undefined){
               
               datajson = jQxhr.responseJSON.result;


                //clearTableRowsbyId("table_visit")
                forEachVisit(datajson);
                //clearNavigable("navigable_pages");
                //addNewNavigable("navigable_pages" , datajson.links);

               
                setTextById("Обновлено" , "success_text_visit");
                hideButtonLoadingById("loading_visit");
                showButtonLoadingById("success_visit");
            }
        },
        error: function (data) {
           if(data.status == 422) {
                setTextById("Запрос не прошел валидацию!" , "text_warning_visit");
                showButtonLoadingById("warning_visit");
             } else {
                setTextById("Неизвестная ошибка!" , "text_warning_visit");
                showButtonLoadingById("warning_visit");
             }
             hideButtonLoadingById("loading_visit");
        }
    
        
    });

}


function initSendPage(nextlink){
    hideButtonLoadingById("warning_all_visit");
    hideButtonLoadingById("success_all_visit");
    showButtonLoadingById("loading_all_visit");
    clearTableRowsbyId("table_all_visit")
    getJsonDataVisitToDayAndIpPage(nextlink);
}
function getJsonDataVisitToDayAndIpPage(nextlink){
    $.ajax({
        url: nextlink,
        type: 'get',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function( data, textStatus, jQxhr ){
            if(!!jQxhr.responseJSON.data_result != undefined){
               
               datajson = jQxhr.responseJSON.data_result;


                console.log(datajson.data);
                forEachAllVisit(datajson.data);
                clearNavigable("navigable_pages");
                addNewNavigable("navigable_pages" , datajson.links);

               
                setTextById("Обновлено" , "text_success_all_visit");
                hideButtonLoadingById("loading_all_visit");
                showButtonLoadingById("success_all_visit");
            }
        },
        error: function (data) {
           if(data.status == 422) {
                setTextById("Запрос не прошел валидацию!" , "text_warning_all_visit");
                showButtonLoadingById("warning_all_visit");
             } else {
                setTextById("Неизвестная ошибка!" , "text_warning_all_visit");
                showButtonLoadingById("warning_all_visit");
             }
             hideButtonLoadingById("loading_all_visit");
        }
    
        
    });

}


function forEachVisit(newdata){
    newdata.forEach(function(item) {
        addRowToTable(item);
    });
 }

 function addRowToTable(item){
    if(item != undefined){

        var id = item.id;
        var ip_address = item.ip_address;
        var open_url = item.open_url;
        var count_visit= item.count_visit;
        var created_at =  new Date(item.created_at);

       
       
        addRows(id , ip_address , open_url , count_visit , formatDate(created_at))
    }
}

function addRows(id , ip_address , open_url , count_visit , data){
    $("#table_visit").find('tbody')
    .append($('<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">')
        .append($('<th class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">').text(id))
        .append($('<td class="px-6 py-4">').text(ip_address))
        .append($('<td class="px-6 py-4">').text(open_url))
        .append($('<td align="center" class="px-6 py-4">').text(count_visit))
        .append($('<td class="px-6 py-4">').text(data))
    );

}


function forEachAllVisit(newdata){
    newdata.forEach(function(item) {
        addRowsAllToTable(item);
    });
 }

 function addRowsAllToTable(item){
    if(item != undefined){

        var id = item.id;
        var count = item.count;
        var ip_address = item.ip_address;
        var created_at =  new Date(item.day);

       
       
        addRowsAllVisit(id , count , ip_address , formatDate(created_at))
    }
}

function addRowsAllVisit(id , count , ip_address  , data){
    $("#table_all_visit").find('tbody')
    .append($('<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">')
        .append($('<th class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">').text(id))
        .append($('<td class="px-6 py-4">').text(ip_address))
        .append($('<td class="px-6 py-4"><a href="#" onclick=\'return openDialog(\" '+ip_address+' \", \"'+data+'\")\' class=\"font-medium text-blue-600 dark:text-blue-500 hover:underline\">'+count+'</a>'))
        .append($('<td class="px-6 py-4">').text(data))
    );

}



function clearTableRowsbyId(id_table){
    $("#"+id_table).children('tbody').children('tr').remove();
}

function formatDate(dateObj){


day =  dateObj.getMonth();
month = dateObj.getDate();
minutes = dateObj.getMinutes();
second = dateObj.getSeconds();

if (day < 10) {
    day = '0' + day;
}

if (month < 10) {
   month = `0${month}`;
}

if(minutes < 10){
    minutes = '0' + minutes;
}

 if(second < 10){
    second = '0' + second;
 }

return  `${dateObj.getFullYear()}-${day}-${month} ${dateObj.getHours()}:${minutes}:${second}`;
//return dateObj.getFullYear()+"-"+ (dateObj.getMonth()+1) + "-" + dateObj.getDate() + " " +
// dateObj.getHours() + ":" + dateObj.getMinutes();
}

function clearNavigable(navigable_id){
    $("#"+navigable_id).empty();
}

function addNewNavigable(navigable_id , links){

    links.forEach(function(item) {
        if(item.active){
            $("#"+navigable_id).append('<li><a href="#" onClick="getPaginationPageFilter(this , \''+item.url+'\')" aria-current="page" class="z-10 px-3 py-2 leading-tight text-blue-600 border border-blue-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">'+item.label+'</a></li>');
        }
        else{
            $("#"+navigable_id).append('<li><a href="#" onClick="getPaginationPageFilter(this , \''+item.url+'\')" aria-current="page" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">'+item.label+'</a> </li>');
        }
    });
}