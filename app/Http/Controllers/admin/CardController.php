<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \Redirect,\Validator;
use App\Card, App\Question;
class CardController extends Controller
{
    public function index(Request $request){
        $data = array();
        $data['lists'] = Card::paginate(10);
        
        return view('admin.card.index',$data);
    }
    
    public function create(Request $request){
        $data = array();
        if($request->isMethod('post')){
            $validator = Validator::make(
                             $request->all(),
                              [
                                   'answer'          => 'required',
                                   'description'	=> 'required',
								   'image'		    => 'required',
                              ]
								);
            if ($validator->fails()){
                $messages = $validator->messages();
                return Redirect::back()->withErrors($validator)->withInput();
            }
            else{
                $card = new Card();
                $card->description  = $request->description;
				$card->answer  = $request->answer;
                if($request->hasFile('image')) {
                    $file               = $request->file('image');
                    //getting timestamp
                    $timestamp          = md5(microtime());
                    $name               = $timestamp. '-' .$file->getClientOriginalName();
                    $card->image_name   = $name;
                    $file->move(public_path().'/uploads/card/', $name);
                }
                $card->save();
            }
            return Redirect::route('admin_card')->with('success','Card is created successfully');
        }
        return view('admin.card.create',$data);
    }

    public function edit($id, Request $request){
        $data = array();
        if($request->isMethod('post')){
                
            $card = Card::find($id);
			$card->description  = $request->description;
			$card->answer  = $request->answer;
			if($request->hasFile('image')) {
				@unlink(public_path().'/uploads/card/', $details->image_name);
				$file               = $request->file('image');
				$timestamp          = md5(microtime());
				$name               = $timestamp. '-' .$file->getClientOriginalName();
				$card->image_name   = $name;
				$file->move(public_path().'/uploads/card/', $name);
			}
			$card->save();

            return Redirect::route('admin_card')->with('success','Card is updated successfully');
        }
        $data['details'] = Card::find($id);
        return view('admin.card.edit',$data);
    }
    
    public function delete($id){
        $card = Card::find($id);
		@unlink(public_path().'/uploads/card/', $card->image_name);
		$card->delete();
        return Redirect::route('admin_card')->with('success','Card is deleted successfully');
    }
	
	

	public function change_status($id){
        $details = Card::find($id);
        if($details->status == 'Active'){
            $details->status = 'Inactive';
        }
        elseif($details->status == 'Inactive'){
            $details->status = 'Active';
        }
        $details->save();
        echo $details->status;exit;
    }
}
