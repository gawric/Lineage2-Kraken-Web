
function createNextPage(nextlink){
    if(nextlink != "null"){
        hideButtonLoadingById("warning_all_accounts");
        showButtonLoadingById("loading_all_accounts");
    
       //console.log("nextlink");
       // console.log(nextlink);

        sendJsonDataServer(nextlink);
    }
 }

 function getAllCharsUser(account_expansion_id){
    
    hideButtonLoadingById("warning_all_chars");
    hideButtonLoadingById("success_all_chars");
    showButtonLoadingById("loading_all_chars");
    clearTableRowsChars("table_all_chars");
    getAllCharsByIdUser(account_expansion_id);
 }

 function getAllAccountsUser(account_expansion_id){
    showButtonLoadingById("loading_user_all_accounts");
    clearTableRowsChars("table_user_all_accounts");
    hideButtonLoadingById("warning_user_all_accounts");
    getAllAccountsByIdUser(account_expansion_id);
 }

 function sendJsonDataServer(nextlink){
     $.ajax({
         url: nextlink,
         type: 'get',
         headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         },
         success: function( data, textStatus, jQxhr ){
             if(!!jQxhr.responseJSON != undefined){
                console.log(jQxhr.responseJSON);
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

 function getAllCharsByIdUser(account_expansion_id){
    $.ajax({
        url: "/adminDashboard/allchars?accountExpansionId="+account_expansion_id,
        type: 'get',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function( data, textStatus, jQxhr ){
            if(!!jQxhr.responseJSON != undefined){
               var success = jQxhr.responseJSON.success;
               var result = jQxhr.responseJSON.result;
               var access_items = jQxhr.responseJSON.access_items;
              
               if(!!result & !!access_items){
                    forEachChars(result);
                    addSelecOptions(access_items , "select_chars_items");
                    hideButtonLoadingById("loading_all_chars");
               }

            }
        },
        error: function (data) {

           if(data.status == 422) {
               setTextById("Запрос не прошел валидацию!" , "text_warning_all_chars");
               showButtonLoadingById("warning_all_chars");
               hideButtonLoadingById("loading_all_chars");
             } else {
                if (data.status === 0) {
                    setTextById("Потеряно соединение с сервером!" , "text_warning_all_chars");
                    showButtonLoadingById("warning_all_chars");
                    hideButtonLoadingById("loading_all_chars");
                }
                else{
                    setTextById("Неизвестная ошибка!" , "text_warning_all_chars");
                    showButtonLoadingById("warning_all_chars");
                    hideButtonLoadingById("loading_all_chars");
                }
             
             }
            

        }
    
    });

}


function getAllAccountsByIdUser(account_expansion_id){
    $.ajax({
        url: "/adminDashboard/all_l2accounts?accountExpansionId="+account_expansion_id,
        type: 'get',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function( data, textStatus, jQxhr ){
          //  console.log("getAllAccountsByIdUser success " + account_expansion_id);
            if(!!jQxhr.responseJSON != undefined){
                if(jQxhr.responseJSON.result){
                    forEachAccounts(jQxhr.responseJSON.result , account_expansion_id);
                }
                
            }

            hideButtonLoadingById("loading_user_all_accounts");
        },
        error: function (data) {
           // console.log("getAllAccountsByIdUser fail " + account_expansion_id);
           if(data.status == 422) {
               setTextById("Запрос не прошел валидацию!" , "text_warning_user_all_accounts");
               showButtonLoadingById("warning_user_all_accounts");
         
             } else {
                if (data.status === 0) {
                    setTextById("Потеряно соединение с сервером!" , "text_warning_user_all_accounts");
                    showButtonLoadingById("warning_user_all_accounts");

                }
                else{
                    setTextById("Неизвестная ошибка!" , "text_warning_user_all_accounts");
                    showButtonLoadingById("warning_user_all_accounts");

                }
             
             }
            
             hideButtonLoadingById("loading_user_all_accounts");
        }
    
    });

}


function blockOrunblockSinglAccountL2(link , data)
 {
    hideButtonLoadingById("success_user_all_accounts");
    hideButtonLoadingById("warning_user_all_accounts");
    showButtonLoadingById("loading_user_all_accounts");
    sendJsonOnlySinglBlockOrUnblock(link , data);
 }

 function blockOrunblock(nextlink)
 {
    hideButtonLoadingById("warning_all_accounts");
    //hideButtonLoadingById("success_all_accounts");
    showButtonLoadingById("loading_all_accounts");
    sendJsonBlockOrUnblock(nextlink);
 }


 function sendJsonBlockOrUnblock(nextlink){
    $.ajax({
        url: nextlink,
        type: 'get',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function( data, textStatus, jQxhr ){
            if(!!jQxhr.responseJSON != undefined){

               datajson = jQxhr.responseJSON;
               //console.log(datajson);
    
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

function sendJsonOnlySinglBlockOrUnblock(nextlink , data){
   
    $.ajax({
        url: nextlink,
        type: 'post',
        data: JSON.stringify(data),
        contentType: 'application/json; charset=utf-8',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function( data, textStatus, jQxhr ){

            if(!!jQxhr.responseJSON != undefined){
               setTextById("Обновлено" , "success_text_user_all_accounts");
               hideButtonLoadingById("loading_user_all_accounts");
               showButtonLoadingById("success_user_all_accounts");
            }
        },
        error: function (data) {
           if(data.status == 422) {
               setTextById("Запрос не прошел валидацию!" , "text_warning_user_all_accounts");
               showButtonLoadingById("warning_user_all_accounts");
            } 
            else {
               setTextById("Неизвестная ошибка!" , "text_warning_user_all_accounts");
               showButtonLoadingById("warning_user_all_accounts");
             }
             hideButtonLoadingById("loading_user_all_accounts");

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

 function clearTableRowsChars(table_id){
    //var search_result = $("#"+table_id).children('tbody').children('tr').children('td:contains("Нет данных")').length;
    //if(search_result == 0){
        $("#"+table_id).children('tbody').children('tr').remove();
   // }
    
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
        .append($('<td class="px-6 py-4"><a href="#" onclick="return clickOpenDialog('+id+')" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">'+count_chars+'</a>'))
        .append($('<td class="px-6 py-4"><input '+is_blocker+' id="default-checkbox"  onclick=\'clickBlockCheckbox(this , '+id+');\' type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">'))
        .append($('<td class="px-6 py-4">').text(last_ip))
    );
}

function addNumberOfAccounts(number_current, number_total){
    $("#cnumber").text("c " + number_current);
    $("#tonumber").text(number_total);
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



function forEachChars(newdata){
    newdata.forEach(function(item) {
        addRowToTableChars(item);
    });
 }


 function addRowToTableChars(item){
    if(item != undefined){
        var id = item.id;
        var char_name = item.char_name;
        var account_name = item.account_name;
        var lvl = item.lvl;
        var server_name= item.server_name;
        var online= item.online;
        var col= item.col;
        

        addData(id , char_name , account_name , lvl , server_name , online , col , item.last_data);
            
    }
}

function addData(id , char_name , account_name , lvl , server_name , online , col , data){
    if(data == "Нет данных"){
        addRowsChars(id , char_name , account_name , lvl , server_name , online , col , data);
    }
    else{
        var last_data = new Date(item.last_data);
        addRowsChars(id , char_name , account_name , lvl , server_name , online , col , formatDate(last_data));
    }
}



function addRowsChars(id , char_name , account_name , lvl , server_name , online , col , last_data){
    $("#table_all_chars").find('tbody')
    .append($('<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">')
        .append($('<th class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">').text(id))
        .append($('<td class="px-6 py-4"><input id="select_checkbox" '+id+'  type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">'))
        .append($('<td class="px-6 py-4">').text(account_name))
        .append($('<td class="px-6 py-4">').text(char_name))
        .append($('<td class="px-6 py-4">').text(col))
        .append($('<td class="px-6 py-4">').text(server_name))
        .append($('<td class="px-6 py-4">').text(lvl))
        .append($('<td class="px-6 py-4">').text(online))
        .append($('<td class="px-6 py-4">').text(last_data))
    );
}


function forEachAccounts(newdata , accountExpansionId){
    //console.log(newdata);
    newdata.forEach(function(item) {
       /// console.log(item);
        addRowToTableAccounts(item , accountExpansionId);
    });
 }

function addRowToTableAccounts(item , accountExpansionId){
    if(item != undefined){
        var id = item.id;
        var l2account_name = item.l2account_name;
        var is_blocked = item.is_blocked ? "checked" : "";
        var lockdate = item.lockdate;
        var server_name = item.server_name;

    
        addDataAccount(id ,l2account_name,is_blocked,  lockdate , accountExpansionId , server_name);
            
    }
}

function addDataAccount(id ,l2account_name,is_blocked,  lockdate , accountExpansionId, server_name){
    if(lockdate == "Нет данных"){
        addRowsAccount(id ,l2account_name,is_blocked,  lockdate , accountExpansionId , server_name);
    }
    else{
        var last_data = new Date(lockdate);
        addRowsAccount(id ,l2account_name,is_blocked, formatDate(last_data) , accountExpansionId , server_name);
    }
}



function addRowsAccount(id ,l2account_name,is_blocked, last_data , accountExpansionId , server_name){
    $("#table_user_all_accounts").find('tbody')
    .append($('<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">')
        .append($('<th class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">').text(id))
        .append($('<td class="px-6 py-4"><input id="select_checkbox" '+is_blocked+' onclick=\"clickBlockAccountCheckbox(this , '+'\''+l2account_name+'\''+' , '+accountExpansionId+' , '+'\''+server_name+'\''+');\" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">'))
        .append($('<td class="px-6 py-4">').text(l2account_name))
        .append($('<td class="px-6 py-4">').text(server_name))
        .append($('<td class="px-6 py-4">').text(last_data))
    );
}

function addSelecOptions(array , id_select){

    var selectElement = document.getElementById(id_select);
    removeOptions(selectElement);

    Object.keys(array).forEach(key => {
            var opt = new Option(key);
            opt.id = array[key];
            selectElement.add(opt);
      });
}

function removeOptions(selectElement) {
    if(selectElement.options.length > 0){
        var i, L = selectElement.options.length - 1;
        for(i = L; i > 0; i--) {
            
           selectElement.remove(i);
        }
    }
    
 }


function addItemsChar(){

    hideButtonLoadingById("warning_all_accounts");
    hideButtonLoadingById("success_all_chars");
    showButtonLoadingById("loading_all_chars");

    var count_item = document.getElementById("text_count_items");
    var select_item = document.getElementById("select_chars_items");

    var select_index = select_item.selectedIndex;
    var count = count_item.value;
    var arraySelectItems = getSelectRowsTableChars("table_all_chars");

    if(select_index != 0 && count){

        //id добавляемого итема
        var id_item_use = select_item.options[select_index].id;
        //сводим данные из таблицы и селекта
        var allDataItems = getPreparationDataItems(arraySelectItems , id_item_use , count);
        sendJsonAddItems(allDataItems);
    }
    else{
        hideButtonLoadingById("loading_all_chars");
    }

    
}

function getPreparationDataItems(arraySelectItems , id_item_use , count){
    var temp = [];
    for(var i=0; i < arraySelectItems.length; i++){
        //0 - charname //1-server_name
        temp.push({'char_name': arraySelectItems[i][0],'server_name': arraySelectItems[i][1],'item_id':parseInt(id_item_use),'count': count});
    }

    return temp;
}

function getSelectRowsTableChars(id_tables){
    var temp = [];
    const table = document.getElementById(id_tables);
    var count = table.rows.length;  
    for(var i=0; i<count; i++) {    
        //console.log(table.rows[i][0]);  
        if(i != 0){
            tds = table.rows[i].getElementsByTagName('td');  
            isselect = tds[0].getElementsByTagName('input')[0].checked;

            if(isselect == true){
               var char_name = tds[2].innerHTML;
               var server_name = tds[4].innerHTML;

               temp.push([char_name , server_name]);
            }
          
        }
    }

    return temp;
   
}


function sendJsonAddItems(arrayData){
    $.ajax({
        url: '/adminDashboard/additems',
        dataType: 'json',
        type: 'post',
        contentType: 'application/json; charset=utf-8',
        data: JSON.stringify(arrayData),
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function( data, textStatus, jQxhr ){
            if(!!jQxhr.responseJSON.success){
              
                result = jQxhr.responseJSON.result;
                if(isArray(result)){
                    console.log("Add items array");
                    console.log(result);
                    
                    changeTableRows("table_all_chars" , result)
                }

                setTextById("Обновлено" , "success_text_all_chars");
                showButtonLoadingById("success_all_chars");
                hideButtonLoadingById("loading_all_chars");
            }
        },
        error: function (data) {
            if(data.responseText != undefined){
                var dataErrors = $.parseJSON(data.responseText);
            
                setTextById("Неизвестная ошибка!" , "text_warning_all_chars");
                showButtonLoadingById("warning_all_chars");
                hideButtonLoadingById("loading_all_chars");
            }
            else{
                setTextById("Неизвестная ошибка!" , "text_warning_all_chars");
                showButtonLoadingById("warning_all_chars");
                hideButtonLoadingById("loading_all_chars");
            }
            

        }
    
    });

}


function isArray(array){
    if(Array.isArray(array)){
        return true;
    }
    return false;
}

    //arrayResult
    //item.char_name;
    //item.count;
   // item.item_id;
   // item.server_name;
function changeTableRows(id_tables , arrayResult){
    arrayResult.forEach(function(item) {
        forEachUpdate(item.char_name , item.count , id_tables);
    });
}

function forEachUpdate(char_name_equals , newcol , id_tables){

    const table = document.getElementById(id_tables);
    var count = table.rows.length;  

    for(var i=0; i < count; i++) {    
        //console.log(table.rows[i][0]);  
        updateTable(char_name_equals , newcol , i , table);
    }
}

function updateTable(char_name_equals , newcol , i , table){
    if(i != 0){
        tds = table.rows[i].getElementsByTagName('td');  
        isselect = tds[0].getElementsByTagName('input')[0].checked;

        if(isselect == true){
            char_name  = tds[2];
            if(char_name.innerHTML == char_name_equals){
                col  = tds[3];
                col.innerHTML = parseInt(col.innerHTML) + parseInt(newcol);
            }
          
            
        }
      
    }
}


 
 
 
 
 