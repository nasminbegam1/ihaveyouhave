<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Rules;
use \Redirect,\Validator;

class RulesController extends Controller
{
    public function index(Request $request){
				$data = array();
				$data['lists'] = Rules::paginate(10);

				return view('admin.rules.index',$data);
		}

		public function edit($id,Request $request){
				$data = array();
				$RulesDetails = Rules::find($id);
				$data['details'] = $RulesDetails;
				
				if($request->isMethod('post')){
						$validator = Validator::make(
                             $request->all(),['description' => 'required',]
            );

						if ($validator->fails()){
								$messages = $validator->messages();
								return Redirect::back()->withErrors($validator)->withInput();
						}
						else{
								$updateRules            	= Rules::find($id);
								$updateRules->description = $request->description;
								$updateRules->status  		= $request->status;
								$updateRules->save();
								return Redirect::route('admin_howtoplay')->with('success','How To Play updated successfully');
						}
        }
				return view('admin.rules.edit',$data);		
		}
		
		public function delete($id){
        Rules::where('id',$id)->delete();
        return Redirect::route('admin_howtoplay')->with('success','How To Play deleted successfully');
    }
}
