<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/',   array('as' => 'home',                    'uses'=>'GameController@index' ));
Route::get('/how-to-play',array('as' => 'how_to_play',                    'uses'=>'GameController@how_to_play' ));
Route::get('/game',array('as' => 'game',                    'uses'=>'GameController@game' ));
Route::get('/level/{level}',array('as' => 'set_level',                    'uses'=>'GameController@level' ));
Route::post('/next-question',array('as' => 'next_question',                    'uses'=>'GameController@get_next_question' ));
Route::get('/set-score/{score}',array('as' => 'set_score',                    'uses'=>'GameController@set_score' ));
Route::get('/summery',array('as' => 'summery',                    'uses'=>'GameController@summery' ));

           
Route::group(array('prefix'=>'admin','namespace' => 'admin'), function (){
     Route::any('/',                            array('as' => 'admin_login',                    'uses'=>'WelcomeController@index' ));
     Route::get('/forgot-password',             array('as' => 'admin_forgot_password',          'uses'=>'WelcomeController@admin_forgot_password' ));
     Route::post('/forgot-password-action',     array('as' => 'admin_forgot_password_action',   'uses'=>'WelcomeController@admin_forgot_password_action' ));
});
Route::group(array('prefix'=>'admin','namespace' => 'admin','middleware' => 'admin'), function (){
     Route::any('/dashboard',                   array('as' => 'admin_dashboard',            'uses'=>'DashboardController@index' ));
     Route::get('/profile',                     array('as' => 'admin_profile',              'uses'=>'DashboardController@profile' ));
     Route::post('/profile-update',             array('as' => 'admin_profile_update',       'uses'=>'DashboardController@profile_update' ));
     Route::get('/change-password',             array('as' => 'admin_change_password',      'uses'=>'DashboardController@change_password' ));
     Route::post('/change-password-action',     array('as' => 'admin_change_password_action',      'uses'=>'DashboardController@change_password_action' ));
     Route::any('/logout',                      array('as' => 'admin_logout',               'uses'=>'DashboardController@logout' ));
    
     Route::group(array('prefix'=>'card'), function (){
        Route::any('/',                   array('as' => 'admin_card',                   'uses'=>'CardController@index' ));
        Route::any('/create/',            array('as' => 'admin_card_create',            'uses'=>'CardController@create' ));
        Route::any('/edit/{id}',          array('as' => 'admin_card_edit',              'uses'=>'CardController@edit' ));
        Route::any('/delete/{id}',        array('as' => 'admin_card_delete',            'uses'=>'CardController@delete' ));
        
        Route::any('/change-status/{id}', array('as' => 'admin_card_change_status',     'uses'=>'QuestionController@change_status' ));
        
        
     });
     
     Route::group(array('prefix'=>'question'), function (){
        Route::any('/',                   array('as' => 'admin_question',                   'uses'=>'QuestionController@index' ));
        Route::any('/create/',            array('as' => 'admin_question_create',            'uses'=>'QuestionController@create' ));
        Route::any('/edit/{id}',          array('as' => 'admin_question_edit',              'uses'=>'QuestionController@edit' ));
        Route::any('/delete/{id}',        array('as' => 'admin_question_delete',            'uses'=>'QuestionController@delete' ));
        Route::any('/change-status/{id}', array('as' => 'admin_question_change_status',     'uses'=>'QuestionController@change_status' ));
        
     });
     
     Route::group(array('prefix'=>'how-to-play'), function (){
        Route::any('/',                   array('as' => 'admin_howtoplay',                   'uses'=>'RulesController@index' ));
        Route::any('/edit/{id}',          array('as' => 'admin_howtoplay_edit',              'uses'=>'RulesController@edit' ));
        Route::any('/delete/{id}',        array('as' => 'admin_howtoplay_delete',            'uses'=>'RulesController@delete' ));
     });

});
