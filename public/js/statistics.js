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
            if (response.success != undefined){
                if(response.result.length > 0){
                    response.result.forEach(parceRow);
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
function parceRow(item, index, arr){
    console.log(item['id']);
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
    

}
