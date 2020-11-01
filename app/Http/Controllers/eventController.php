<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentData;
use App\Models\Appointments;
use App\Models\Committees;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class eventController extends Controller
{
    public function store(StoreStudentData $request)
    {
        
        $member=new Event();
        $Exist = Event::where('phone',$request->studentPhone)->first();
        if($Exist > '0')
        {
            return redirect()->back()->with(['fail'=>'Member Already Exist']);
        }
        $member->name=$request->studentName;
        $member->email=$request->studentEmail;
        $member->phone=$request->studentPhone;
        $member->college=$request->studentCollege;
        $member->studentYear=$request->studentYear;
        $member->committee_A=$request->studentCommitteeA;
        // $member->committee_B=$request->studentCommitteeB;
        if($request->studentDateA == "waitting")
        {
            $member->dateCommittee_A=$request->studentDateA;
            $member->timeCommittee_A=$request->studentTimeA;
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
                $request->studentTimeA="waitting";
            }

            $member->dateCommittee_A=$studentDateA;
            $member->timeCommittee_A=$request->studentTimeA;
        }

        // if($request->studentDateB == "waitting")
        // {
        //     $member->dateCommittee_B=$request->studentDateB;
        //     $member->timeCommittee_B=$request->studentTimeB;
        // }
        // else
        // {
        //     $allString=$request->studentDateB;
        //     $allString= explode('#',$allString);
        //     $studentDateB=$allString[0];
        //     $appointment_id=$allString[1];

        //     $row=new Appointments();
        //     $row=$row->findOrFail($appointment_id);

        //     if ($row->numberOfSeats>0) {

        //         $newNumberOfSeats=$row->numberOfSeats - 1;
        //         $affected = DB::table('appointments')
        //         ->where('id', $appointment_id)
        //         ->update(['numberOfSeats' => $newNumberOfSeats]);
        //     }
        //     else
        //     {
        //         $studentDateB="waitting";
        //         $request->studentTimeB="waitting";
        //     }
            
        //     $member->dateCommittee_B=$studentDateB;
        //     $member->timeCommittee_B=$request->studentTimeB;
        // }

        $status = $member->saveOrFail();

        if ($status) {
            return redirect()->back()->with(['success'=>'Registration Successfully']);
        } else {
            return redirect()->back()->with(['fail'=>'Regestration Fail']);
        }
    }
    public function getAllMembers()
    {
        $member=new Event();
        $collection=$member->get();
        return view('Committees.EventMembers')->with('collection',$collection);
    }
    public function getAllCommittees(){

        $committees = new Committees();
        $committees=$committees->get();

        return view('Committees.home')->with('committees',$committees);
     }
    public function getAppointments(Request $request )
    {
        $committee_id=$request->name;
        $appointments= DB::table('appointments')->where('committee_id',$committee_id)->get();
        return $appointments;

    }

    public function registrationView(){
        $committees = new Committees();
        $committees = $committees->get();
        return view('Committees.EventRegisteration')->with('committees',$committees);
    }
}

