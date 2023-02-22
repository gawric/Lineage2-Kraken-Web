function getStatistics(select_server_id , id_static){
    showLoadingReg("loading_reg")
    hideAlert();
    hideSucces();
    sendJsonDataServer( select_server_id , id_static);
}



function sendJsonDataServer( select_server_id , id_static){
    $.ajax({
        url: "/statistic/server/"+select_server_id+"/stats/"+id_static+"",
        success: function(response) {
            clearTempData();
            clearTempDataClan();
            if (response.success != undefined){
                if(response.result.length > 0){
                    if(id_static == 3){
                        console.log(response.result);
                        response.result.forEach(parceRowClan); 
                    }
                    else{
                        response.result.forEach(parceRowTop);
                    }
                    hideLoadingReg("loading_reg");
                    showSucces(response.success)
                }
            } 
            else{
                hideLoadingReg("loading_reg");
                showAlert('Не известная ошибка попробуйте еще раз!');
            }
        
        },
        error: function(xhr) {

            if(xhr.responseJSON != undefined){
                hideLoadingReg("loading_reg");
                showAlert(xhr.responseJSON.message);
            }
            else{
                hideLoadingReg("loading_reg");
                showAlert("Неизвестная ошибка: возможно сервер не отвечает!");
            }
        }
    });

}

function clearTempData(){
    $("#customers").find("tr:gt(0)").remove();
}
function clearTempDataClan(){
    $("#customers_clan").find("tr:gt(0)").remove();
}
function parceRowTop(item, index, arr){

    $('#customers').css("display", "table");
    $('#customers_clan').css("display", "none");


    var time = convertTime(item['onlinetime']);
    var online = getTextOnline(item['online']);
    $("#customers").find('tbody')
    .append($('<tr>')
        .append($('<td>').text(item['id']))
        .append($('<td>').text(item['name']))
        .append($('<td>').text(item['class']))
        .append($('<td>').text(item['clan']))
        .append($('<td>').text(item['lvl']))
        .append($('<td>').text(item['pvp']))
        .append($('<td>').text(item['pk']))
        .append($('<td>').text(online))
);
}

function getTextOnline(data){
    if(data == 1){
     return  "online";
    }

    return 'offline'
}

function convertTime(timestamp){
    var hours = Math.floor(timestamp / 60 / 60);
    var minutes = Math.floor(timestamp / 60) - (hours * 60);
    var seconds = timestamp % 60;

    return hours +'ч. '+'' + minutes +'мин. '+ '' + seconds + 'сек. ';
}


function parceRowClan(item, index, arr){
    $('#customers').css("display", "none");
    $('#customers_clan').css("display", "table");

     $("#customers_clan").find('tbody')
     .append($('<tr>')
         .append($('<td>').text(item['id']))
         .append($('<td>').text(item['clan_name']))
         .append($('<td>').text(item['clan_level']))
         .append($('<td>').text(item['reputation_score']))
         .append($('<td>').text(getCastle(item['hasCastle'])))
         .append($('<td>').text(getAllyName(item['ally_name'])))
         .append($('<td>').text(item['member']))

 );

 

}

function getAllyName(ally_name){
    if(isEmpty(ally_name))
    {
        return "Non"
    }

    return ally_name;
}
function isEmpty(value){
    return (value == null || value.length === 0);
  }

  function getCastle(castle){
    if(castle == 1){
        return "Yes"
    }

    return "Non"
}
