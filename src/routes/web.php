<?php 


Route::group(['namespace' => 'Patrixsmart\Mailfast\Http\Controllers'], function () {
    
    Route::get('mailfast/form','MailfastController@form')->name('mailfast-form');

    Route::post('mailfast/send','MailfastController@send')->name('mailfast-send');

   
});