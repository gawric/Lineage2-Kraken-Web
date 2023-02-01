function reg(login , email , pass , pass_confirmed ,server_id){
    var json = getData(login , email , pass , pass_confirmed , server_id);
    console.log(json);
    hideAlert();
    hideSucces();
    sendJsonDataServer(json);
}

function getData(login , email , pass ,  pass_confirmed , server_id){
    return { login: login, password:pass, password_confirmed: pass_confirmed ,email: email , server_id: server_id };
}

function sendJsonDataServer( json ){
    $.ajax({
        url: '/adduser',
        dataType: 'json',
        type: 'post',
        contentType: 'application/json; charset=utf-8',
        data: JSON.stringify(json),
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function( data, textStatus, jQxhr ){
            console.log("success data " + textStatus);
            console.log(jQxhr.responseJSON);
            if(!!jQxhr.responseJSON.success){
                showSucces(jQxhr.responseJSON.success)
            }
            
           // showSucces(jQxhr.responseJSON);
        },
        error: function (data) {
            console.log(data.responseText);
            var errors = $.parseJSON(data.responseText);
            if (!!errors.message) {
                showAlert(errors.message);
                console.log(errors);
            }
            else{
                console.log(errors);
            }

        }
    
    });

}
