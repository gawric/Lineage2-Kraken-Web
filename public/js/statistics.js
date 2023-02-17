function getStatistics(server_id , value_static){
    var json = getData(server_id , value_static);
}

function getData(server_id , value_static){
    return { server_id: server_id, value:value_static};
}

function sendJsonDataServer( json ){
    $.ajax({
        url: '/adduser',
        dataType: 'json',
        type: 'GET',
        contentType: 'application/json; charset=utf-8',
        data: JSON.stringify(json),
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function( data, textStatus, jQxhr ){
            hideLoadingReg("loading_reg");
            if(!!jQxhr.responseJSON.success){
                showSucces(jQxhr.responseJSON.success)
            }
            
           // showSucces(jQxhr.responseJSON);
        },
        error: function (data) {
            hideLoadingReg("loading_reg");
            if(data.responseText != undefined){
                var errors = $.parseJSON(data.responseText);
                if (!!errors.message) {
                    showAlert(errors.message);
                    console.log(errors);
                }
                else{
                    console.log(errors);
                }
            }
            else{
                showAlert("Неизвестная ошибка");
            }
            

        }
    
    });

}
