<?php
Route::group(['prefix' => config('constants.API_PREFIX'), 'middleware' => ['Cors', 'CheckHeaders']], function ()
{
    // Route::get('/rollbar-test', function()
    // {
    //     \Log::debug('Test debug message');
    // });
    // Route::post('/users', 'UsersController@store');
    // Route::get('/users', 'UsersController@get');
    // Route::group(['middleware' => 'Token'], function()
    // {
    //     // Route::get('/users', function () {
    //     //     return 'User testing';
    //     // });
    // });

    Route::get('/test', function()
    {
        return 'test';exit;
    });
    Route::post('/users', 'UsersController@store');
    Route::middleware('auth:airlock')->get('/users', 'UsersController@get');

});
