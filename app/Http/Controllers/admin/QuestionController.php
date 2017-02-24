<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \Redirect,\Validator;
use App\Question;
class QuestionController extends Controller
{
    public function index(Request $request){
        
        
        $data = array();
        $data['lists'] = Question::paginate(10);
        
        return view('admin.question.index',$data);
    }
    
    public function create(Request $request){
        $data = array();
        if($request->isMethod('post')){
            $validator = Validator::make(
                             $request->all(),
                              [
                                   'title'          => 'required',
                                   'description'	=> 'required'
                              ]
								);
            if ($validator->fails()){
                $messages = $validator->messages();
                return Redirect::back()->withErrors($validator)->withInput();
            }
            else{
                $question = new Question();
                $question->title        = $request->title;
                $question->description  = $request->description;
                $question->save();
            }
            return Redirect::route('admin_question')->with('success','Question is created successfully');
        }
        return view('admin.question.create',$data);
    }

    public function edit($id, Request $request){
        $data = array();
        if($request->isMethod('post')){
                
            $question = Question::find($id);
			$question->title        = $request->title;
			$question->description  = $request->description;
			$question->save();

            return Redirect::route('admin_question')->with('success','Question is updated successfully');
        }
        $data['details'] = Question::find($id);
        return view('admin.question.edit',$data);
    }
    
    public function delete($id){
        $question = Question::find($id);
		$question->delete();
        return Redirect::route('admin_question')->with('success','Question is deleted successfully');
    }
	
    public function change_status($id){
        $details = Question::find($id);
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
