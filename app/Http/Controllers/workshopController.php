<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\workshop;

class workshopController extends Controller
{
    public function workshop_view_registration(){
        $committees = Committees::get();
        // dd($committee);
        return view('Committees.workshopRegisteration',compact('committees'));
        }

        public function workshop_registration(Request $request){
            $validition = Validator::make($request, [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255'],
                'studentPhone' => ['required', 'numeric', 'digits:11'],
                'studentCollege' => ['required', 'string', 'max:255'],
                'studentYear' => ['required', 'numeric', 'digits:11'],
                'workshop_name' => ['required', 'string', 'max:255']
                //'workshop_name' => ['required', 'string', 'max:255','exists:committees,name'],
                // 'studentCommitteeB' => ['required', 'string', 'max:255', 'confirmed','exists:committees,name'],
            ]);
            if($validition->fail()){
                return redirect()->back()->withErrors($validition->errors());
            }
            workshop::create($request);
            return redirect()->back()->withSuccess("Your registration is create successfully");
            
         }


    
}
