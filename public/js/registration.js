function reg(){

    var json = getData()
    console.log(json);
    sendJsonDataServer( json )
}

function getData(){
	var login = $('#login').val();
    var email = $('#email').val();
    var pass = $('#pass').val();
    var dnd = document.querySelector('#selectServer');

    return { login: login, password:pass, email: email , server_id: dnd.selectedIndex };
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
            console.log("success data " + data);
        },
        error: function( jqXhr, textStatus, errorThrown ){
            console.log( errorThrown );
        }
    });

}