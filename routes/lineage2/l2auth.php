<?php




Route::middleware('valid')->group(function () {
    Route::post('/adduser', [RegistrationController::class, 'ajaxRequestPost']);
});