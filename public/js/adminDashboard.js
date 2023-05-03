
function createNextPage(nextlink){


    hideButtonLoadingById("warning_all_accounts");
    //hideButtonLoadingById("success_all_accounts");

    showButtonLoadingById("loading_all_accounts");
    sendJsonDataServer(nextlink);
 }
 var  click_count = 0;
 function sendJsonDataServer(nextlink){
     $.ajax({
         url: nextlink,
         type: 'get',
         headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         },
         success: function( data, textStatus, jQxhr ){
             if(!!jQxhr.responseJSON != undefined){
                
                datajson = jQxhr.responseJSON;
                newdata = datajson.data;
                parceLinkNextPage(datajson.next_page_url);
                parceLinkLastPage(datajson.prev_page_url);
                clearTableRows();
                forEachAccount(newdata);
                addNumberOfAccounts(datajson.from , datajson.to);

                //setTextById("Обновлено" , "success_all_accounts");
                hideButtonLoadingById("loading_all_accounts");
                //showButtonLoadingById("success_all_accounts");
                
             }
         },
         error: function (data) {
 
            if(data.status == 422) {
                setTextById("Запрос не прошел валидацию!" , "text_warning_all_accounts");
                showButtonLoadingById("warning_all_accounts");
                hideButtonLoadingById("loading_all_accounts");
              } else {
                setTextById("Неизвестная ошибка!" , "text_warning_all_accounts");
                showButtonLoadingById("warning_all_accounts");
                hideButtonLoadingById("loading_all_accounts");
              }
             
 
         }
     
     });
 
 }

 function parceLinkNextPage(link){
    var elementButton = document.getElementById('nextButton'); 
    setOnClickLink(elementButton , link);
 }

 function parceLinkLastPage(link){
    var elementButton = document.getElementById('lastButton'); 
    setOnClickLink(elementButton , link);
 }

 function setOnClickLink(elementButton , link){
    elementButton.setAttribute( "onClick", "clickButtonNext('"+link+"')" );
 }

 function clearTableRows(){
    $("#table_all_accounts").children('tbody').children('tr').remove();
 }

 function forEachAccount(newdata){
    newdata.forEach(function(item) {
        addRowToTable(item);
    });
 }


 function addRowToTable(item){
    if(item != undefined){
        var is_blocker = item.is_blocked ? "checked" : "";
        var id = item.id;
        var username = item.username;
        var email = item.email;
        var count_accounts = item.count_accounts;
        var count_chars= item.count_chars;
        var dateObj =  new Date(item.datereg);
        var last_ip = item.last_ip;

        addRows(id , username , email , formatDate(dateObj) , count_accounts , last_ip , is_blocker , count_chars);
    }
}



function addRows(id , username , email , datereg , count_accounts , last_ip , is_blocker , count_chars){
    $("#table_all_accounts").find('tbody')
    .append($('<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">')
        .append($('<th class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">').text(id))
        .append($('<td class="px-6 py-4">').text(username))
        .append($('<td class="px-6 py-4">').text(email))
        .append($('<td class="px-6 py-4">').text(datereg))
        .append($('<td class="px-6 py-4">').text(count_accounts))
        .append($('<td class="px-6 py-4"><a href="#" onclick="return clickOpenDialog()" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">'+count_chars+'</a>'))
        .append($('<td class="px-6 py-4"><input '+is_blocker+' id="default-checkbox"  type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">'))
        .append($('<td class="px-6 py-4">').text(last_ip))
    );
}

function addNumberOfAccounts(number_current, number_total){
    $("#cnumber").text("c " + number_current);
    $("#tonumber").text(number_total);
}
 
//<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
//<th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
//{{ $model->id }}
//</th>
//<td class="px-6 py-4">
//{{ $model->username }}
//</td>
//<td class="px-6 py-4">
//{{ $model->email }}
//</td>
//<td class="px-6 py-4">
//{{ $model->datereg }}
//</td>
//<td class="px-6 py-4">
 //{{ $model->count_accounts }}
//</td>
//<td class="px-6 py-4">
 // <a href="#" onclick="return clickOpenDialog()" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">{{ $model->count_chars }}</a>
//</td>
//<td class="px-6 py-4">
 // <input {{ $model->is_blocked ? 'checked' : '' }} id="default-checkbox"  type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
//</td>
//<td class="px-6 py-4">
 // {{$model->last_ip }}
//</td>
//</tr>



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

 
 
 
 
 