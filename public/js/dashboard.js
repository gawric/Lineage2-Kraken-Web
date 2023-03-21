
function regL2User(server_id ,login , pass , password_confirmed){
    var json = getData(server_id , login , pass , password_confirmed);
    sendJsonDataServer(json);
}

function sendJsonDataServer(json){
    $.ajax({
        url: '/addL2User',
        dataType: 'json',
        type: 'post',
        contentType: 'application/json; charset=utf-8',
        data: JSON.stringify(json),
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function( data, textStatus, jQxhr ){
            if(!!jQxhr.responseJSON.success){
               // showSucces(jQxhr.responseJSON.success)
               console.log(jQxhr.responseJSON.success);
            }
        },
        error: function (data) {

            if(data.responseText != undefined){
                var errors = $.parseJSON(data.responseText);
                if (!!errors.message) {
        
                    console.log(errors);
                }
                else{
                    console.log(errors);
                }
            }
            else{
                console.log(errors);
            }
            

        }
    
    });

}

function getData(server_id , login ,pass , password_confirmed){
    return { server_id: server_id, login:login , pass:pass, password_confirmed: password_confirmed};
}




