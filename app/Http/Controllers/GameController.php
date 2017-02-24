<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Card,App\Rules;
class GameController extends Controller
{
    /*
    |-----------------------------------------------------------
    | Method Name: index
    | Parameters: 
    | Purpose: This method is called for loading the landing page of the game
    |-----------------------------------------------------------
    */
    public function index(){
        return view('front.home',[]);
    }
    /*
    |-----------------------------------------------------------
    | Method Name: game
    | Parameters: 
    | Purpose: This method is called for loading the game view page with proper cards
    |-----------------------------------------------------------
    */
    public function game(){
        $data['cards'] = Card::inRandomOrder()->get();
        $data['display_cards'] = Card::inRandomOrder()->get();
        //$data['display_cards'] =  $data['cards'];
        return view('front.game',$data);
    }
     /*
    |-----------------------------------------------------------
    | Method Name: get_next_question
    | Parameters: Form post values 
    | Purpose: This method is called as ajax call to get the next question. Returns success in json format
    |-----------------------------------------------------------
    */
    public function get_next_question(Request $request){
       $qus_id = $request->qus_id;
       if($qus_id == ''){
          $data = Card::inRandomOrder()->first();
       }else{
        $data = Card::find($qus_id);
        if(count($data)==0){
            
            $data = Card::first();    
        }
       }
       return response()->json($data);
    }
    
    /*
    |-----------------------------------------------------------
    | Method Name: how_to_play
    | Parameters: 
    | Purpose: This method is called for loading the rules view page with playing rules
    |-----------------------------------------------------------
    */
    public function how_to_play(){
        $data['lists'] = Rules::all();
        return view('front.how_to_play',$data);
    }
    
    /*
    |-----------------------------------------------------------
    | Method Name: set_score
    | Parameters: $score = earn by a player from game
    | Purpose: This method is called to set the score for the summery page
    |-----------------------------------------------------------
    */
    public function set_score($score=''){
        if($score !=''){
            \Session::set('SCORE',$score);
            return \Redirect::route('summery');
        }
        
    }
    
    /*
    |-----------------------------------------------------------
    | Method Name: set_score
    | Parameters: 
    | Purpose: This method is called for loading the summery view page with score
    |-----------------------------------------------------------
    */
    public function summery(){
        $data['score'] = \Session::get('SCORE');
        \Session::forget('SCORE');
        return view('front.summery',$data);
    }
    

}
