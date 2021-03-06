<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentData;
use App\Models\Appointments;
use App\Models\Committees;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\automaticMail;

class eventController extends Controller
{
    public function store(StoreStudentData $request)
    {
        // dd($request->all());
        $validition = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'studentEmail' => ['required', 'string', 'email', 'max:255', 'unique:events,email'],
            'studentPhone' => ['required', 'numeric', 'digits:11', 'unique:events,phone'],
            'studentCollege' => ['required', 'string', 'max:255'],
            'studentYear' => ['required', 'numeric'],
            'interview_time' => ['required', 'string', 'max:255'],
            'interview_time_id' => ['nullable', 'exists:appointments,id']
            //'workshop_name' => ['required', 'string', 'max:255','exists:committees,name'],
            // 'studentCommitteeB' => ['required', 'string', 'max:255', 'confirmed','exists:committees,name'],
        ]);
        // dd($validition->errors()->messages());
        if($validition->fails()){
            return redirect()->back()->withErrors($validition->errors()->messages());
        }

        $member=new Event();
        $Exist = Event::where('phone',$request->studentPhone)->first();
        // if($Exist > '0')
        // {
        //     return redirect()->back()->with(['fail'=>'Member Already Exist!']);
        // }

        if($request->studentCommitteeA == $request->studentCommitteeB)
        {
            return redirect()->back()->with(['fail'=>"Don't Choose the Same Committee Twice!"]);
        }
        $member->name=$request->studentName;
        $member->email=$request->studentEmail;
        $member->phone=$request->studentPhone;
        $member->college=$request->studentCollege;
        $member->studentYear=$request->studentYear;
        $member->committee_A=$request->studentCommitteeA;
        $member->committee_B=$request->studentCommitteeB;
        if($request->studentDateA == "waitting")
        {
            $member->dateCommittee_A=$request->studentDateA;
            // $member->timeCommittee_A=$request->studentTimeA;
        }
        else
        {
            $allString=$request->studentDateA;
            $allString= explode('#',$allString);
            $studentDateA=$allString[0];
            $appointment_id=$allString[1];

            $row=new Appointments();
            $row=$row->findOrFail($appointment_id);

            if ($row->numberOfSeats>0) {

                $newNumberOfSeats=$row->numberOfSeats - 1;
                $affected = DB::table('appointments')
                ->where('id', $appointment_id)
                ->update(['numberOfSeats' => $newNumberOfSeats]);
            }else
            {
                $studentDateA="waitting";
                // $request->studentTimeA="waitting";
            }

            $member->dateCommittee_A=$studentDateA;
            // $member->timeCommittee_A=$request->studentTimeA;
        }

        if($request->studentDateB == "waitting")
        {
            $member->dateCommittee_B=$request->studentDateB;
            $member->timeCommittee_B=$request->studentTimeB;
        }
        else if($request->studentDateB !='')
        {
            $allString=$request->studentDateB;
            $allString= explode('#',$allString);
            $studentDateB=$allString[0];
            $appointment_id=$allString[1];

            $row=new Appointments();
            $row=$row->findOrFail($appointment_id);

            if ($row->numberOfSeats>0) {

                $newNumberOfSeats=$row->numberOfSeats - 1;
                $affected = DB::table('appointments')
                ->where('id', $appointment_id)
                ->update(['numberOfSeats' => $newNumberOfSeats]);
            }
            else
            {
                $studentDateB="waitting";
                $request->studentTimeB="waitting";
            }
            
            $member->dateCommittee_B=$studentDateB;
            $member->timeCommittee_B=$request->studentTimeB;
        }

        $data=$request->all();
    
        $status = $member->saveOrFail();
        Mail::to($request['studentEmail'])->send(new automaticMail($request));
        if ($status) {
            return redirect()->back()->with(['success'=>'Registration Successfully!']);
        } else {
            return redirect()->back()->with(['fail'=>'Regestration Fail!']);
        }
    }

    public function getAllMembers($key=null)
    {
        $member=new Event();
        
        if($key!=null){
            $collection=$member->where('committee_A','like',$key)->orWhere('committee_B','like',$key)->get();
            // dd($collection);
        }else{
        $collection=$member->get();
        }
        return view('Committees.EventMembers')->with('collection',$collection);
    }
  
    public function getAllCommittees(){

        $committees = new Committees();
        $committees=$committees->get();
        return view('Committees.home')->with('committees',$committees);
     }
    public function getAppointments(Request $request )
    {
        // dd($request->name);
        $committee_name=$request->name;
        $committee_id = Committees::where('name','like',$committee_name)->where('name','>','0')->first()->id;
        // dd($committee_id);
        $appointments= DB::table('appointments')->where('committee_id',$committee_id)->get();
        return $appointments;

    }

    public function registrationView(){
        $committees = new Committees();
        $committees = $committees->get();
        return view('event.EventRegisteration')->with('committees',$committees);
    }

    public function deleteMember($id)
    {
        $member= Event::findOrFail($id);
        $member->delete();
        
        return redirect()->route('EventMembers');
    }
}

