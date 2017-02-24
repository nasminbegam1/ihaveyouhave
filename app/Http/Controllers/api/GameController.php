<?php

namespace App\Http\Controllers\api;
use Froiden\RestAPI\ApiController;
use Illuminate\Http\Request;
use App\CardApi;

class GameController extends ApiController
{
    protected $model = CardApi::class;
    
    
    public function question_all(){
        $data['queslists'] = CardApi::orderByRaw('RAND()')->get();
        if(count($data['queslists']) > 0) {
            return array('data'=>$data['queslists'],'status'=>true);
        } else {
            return array('message'=>'Data not found!','status'=>false);
        }
    }
}
