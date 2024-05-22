<?php


/**
 *
 * ------------------------------------
 * Backoffice Routes
 * ------------------------------------
 *
 */
Route::group(['middleware' => "backoffice.guest", 'as' => "auth." ], function(){
    Route::get('login',['as' => "login", 'uses' => "LoginController@login"]);
    Route::post('login',['uses' => "LoginController@authenticate"]);
    Route::get('register',['as' => "register", 'uses' => "RegisterController@register"]);
    Route::post('register',['uses' => "RegisterController@authenticate"]);
    Route::get('{username}/verify',['as' => "verify", 'uses' => "RegisterController@verify"]);

    Route::get('forgot-password',['as' => "forgotPass", 'uses' => "ForgotPasswordController@forgotPass"]);
    Route::post('forgot-password',['uses' => "ForgotPasswordController@resetLink"]);

    Route::get('reset-password/{token}',['as' => "resetPass", 'uses' => "ForgotPasswordController@resetPass"]);
    Route::post('reset-password/{token}',['uses' => "ForgotPasswordController@updatePass"]);

    Route::any('auto-reply',['as' => "autoReply",'uses' => "ChatBotController@autoReply"]);
    
});

Route::group(['middleware' => ["backoffice.auth"
// , "backoffice.verifiedOnly"
]], function(){
    Route::get('logout',['as' => "logout",'uses' => "LoginController@logout"]);
    Route::get('/',['as' => "index",'uses' => "DashboardController@index"]);
    Route::any('download/{start?}/{end?}',['as' => "download",'uses' => "DashboardController@downloadReport"]);
    Route::any('viewReport',['as' => "viewReport",'uses' => "DashboardController@viewReport"]);

    Route::group(['as' => "workforce.", 'prefix' => "workforce"], function(){
        Route::get('/',['as' => "index", 'uses' => "ParticipantsController@index"]);
        Route::get('create',['as' => "create", 'uses' => "ParticipantsController@create"]);
        Route::post('create',['middleware' => "backoffice.superUserOnly", 'uses' => "ParticipantsController@store"]);
        Route::get('view/{id}',['as' => "view",'uses' => "ParticipantsController@view"]);
        Route::get('edit/{id}',['as' => "edit",'uses' => "ParticipantsController@edit"]);
        Route::post('edit/{id}',['as' => "update",'uses' => "ParticipantsController@update"]);
    });

    Route::group(['as' => "jobs.", 'prefix' => "jobs"], function(){
        Route::get('/',['as' => "index", 'uses' => "JobsController@index"]);
        Route::get('create',['as' => "create", 'uses' => "JobsController@create"]);
        Route::post('create',['uses' => "JobsController@store"]);
        Route::get('view/{id}',['as' => "view",'uses' => "JobsController@view"]);
        Route::get('edit/{id}',['as' => "edit",'uses' => "JobsController@edit"]);
        Route::post('edit/{id}',['as' => "update",'uses' => "JobsController@update"]);

    });

    Route::group(['as' => "account.", 'prefix' => "account"], function(){
        Route::get('/',['as' => "index", 'uses' => "AccountController@index"]);
        Route::post('/',['as' => "save", 'uses' => "AccountController@save"]);
        Route::post('update-password',['as' => "update_password", 'uses' => "AccountController@updatePassword"]);
    });

});
