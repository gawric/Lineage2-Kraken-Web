
function showSucces(text){
    $("#show_alert").addClass("alert success");
    var text_alert = $('#text_alert').text(text);
}

function hideSucces(){
    $("#show_alert").removeClass("alert success");
    $("#show_alert").removeClass("info");
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

function showLoadingReg(idloading){
    $("#"+idloading).addClass("loading_min");
}

function hideLoadingReg(idloading){
    $("#"+idloading).removeClass("loading_min");
}

//Алерты для Личного кабинета -> Создать новый аккаунт

//Только 1 конкретный span с текстом
function setTextAlertCreateAccount(text){
    $('#info_text_new_account').text(text);
}

function showAlertCreateAccount(){
    $('#info_new_account').css("display", "block");
}
//Блок всего алерта
function hideAlertCreateAccount(){
    $('#info_new_account').css("display", "none");
}

function buttonHideAlertCreateAccount(){
    $('#info_new_account').css("display", "none");
}

function showButtonLoadingBuyPayment(){
    $('#buy_button').css("display", "block");
}

function hideButtonLoadingBuyPayment(){
    $('#buy_button').css("display", "none");
   // $('#save_new_account').css("display", "block");
}


function showButtonLoadingCreateAccount(){
    $('#loading_new_account').css("display", "block");
    $('#save_new_account').css("display", "none");
}

function hideButtonLoadingCreateAccount(){
    $('#loading_new_account').css("display", "none");
    $('#save_new_account').css("display", "block");
}


function showAlertSuccesCreateAccount(){
    $('#info_new_account_succes').css("display", "block");
}
//Блок всего алерта
function hideAlertSuccesCreateAccount(){
    $('#info_new_account_succes').css("display", "none");
}

function setTextSuccessAlertCreateAccount(text){
    $('#info_text_account_success').text(text);
}






function showButtonLoadingChangePass(){
    $('#loading_change_password').css("display", "block");
    $('#save_change_password').css("display", "none");
}

function hideButtonLoadingChangePass(){
    $('#loading_change_password').css("display", "none");
    $('#save_change_password').css("display", "block");
}

function showAlertChangePass(){
    $('#info_change_pass').css("display", "block");
}
//Блок всего алерта
function hideAlertChangePass(){
    $('#info_change_pass').css("display", "none");
}

function setTextAlertChangePass(text){
    $('#info_text_change_pass').text(text);
}


function showAlertSuccessChangePass(){
    $('#info_change_pass_succes').css("display", "block");
}
//Блок всего алерта
function hideAlertSuccessChangePass(){
    $('#info_change_pass_succes').css("display", "none");
}

function setTextAlertSuccessChangePass(text){
    $('#info_text_change_pass_success').text(text);
}
function setTextAlertSuccessChangePassPrepand(text){
    $('#info_text_change_pass_success').append(text);
}