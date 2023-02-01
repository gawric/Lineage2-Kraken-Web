
function showSucces(text){
    $("#show_alert").addClass("alert success");
    var text_alert = $('#text_alert').text(text);
}

function hideSucces(){
    $("#show_alert").removeClass("alert success");
    var text_alert = $('#text_alert').text("");
}


function hideAlert(){
    $("#show_alert").removeClass("alert");
    var text_alert = $('#text_alert').text("");
}


function showAlert(text){
    $("#show_alert").addClass("alert");
    var text_alert = $('#text_alert').text(text);
}