<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

ApiRoute::group(
    [
        'middleware' => ['api'],
        'namespace' => 'App\Http\Controllers\api'],
        function () {
            ApiRoute::resource('rule', 'RuleController');
            ApiRoute::resource('game', 'GameController');
            ApiRoute::any('/question-all',array('as' => 'question-all','uses'=>'GameController@question_all' ));
    }
);
