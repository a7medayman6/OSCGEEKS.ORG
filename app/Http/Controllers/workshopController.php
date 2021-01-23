<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Committees;
use App\Models\Appointments;
use App\Models\workshop;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\automaticMail;

class workshopController extends Controller
{
    public function workshop_view_registration(){
        
        return view('Committees.workshopRegisteration');
    }

         public function workshop_view_table($key=null){
            // $registrars;
            if($key!=null){
                
                $registrars=workshop::where('workshop','like',$key)->get();
                // dd( $registrars);
            }else{
            $registrars=workshop::get();
            }
            // dd( $registrars);
            return view('Committees.WorkshopMembers',compact('registrars'));
         }

        public function create_workshop_registration(Request $request){
            // dd($request->all());
            $validition = Validator::make($request->all(), [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:workshops'],
                'studentPhone' => ['required', 'numeric', 'digits:11', 'unique:workshops,phone'],
                'studentCollege' => ['required', 'string', 'max:255'],
                'studentYear' => ['required', 'numeric'],
                'interview_time' => ['required', 'string', 'max:255']
                //'workshop_name' => ['required', 'string', 'max:255','exists:committees,name'],
                // 'studentCommitteeB' => ['required', 'string', 'max:255', 'confirmed','exists:committees,name'],
            ]);
            // dd($validition->errors()->messages());
            if($validition->fails()){
                return redirect()->back()->withErrors($validition->errors()->messages());
            }
            //interview_time_id
             $interview = Appointments::find($request->interview_time_id);
             if($interview->numberOfSeats > 0){
             $interview->numberOfSeats--;
             $interview->save();
            //  dd($interview->numberOfSeats);
            workshop::store($request);
            

            Mail::to($request['email'])->send(new automaticMail($request));
            return redirect()->back()->withSuccess("Your registration is done successfully");
             }else{
                return redirect()->back()->withErrors("the data you selected is complete please, slelect another data");
             }
            
         }


    
}
