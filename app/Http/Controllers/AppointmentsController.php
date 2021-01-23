<?php

namespace App\Http\Controllers;

use App\Models\Appointments;
use Illuminate\Http\Request;
use App\Models\Committees;
use Illuminate\Support\Facades\DB;
class AppointmentsController extends Controller
{
        public function  registrationView(){
            $committees = Committees::get();
            // dd($committee);
            return view('Committees.EventRegisteration',compact('committees'));
        }
       
        public function  aboutUsView(){
            return view('Committees.aboutus');
        }
 
        public function  artView(){
            return view('Committees.art');
        }
        public function  blenderView(){
            return view('Committees.blender');
        }
        public function  cccView(){
            return view('Committees.ccc');
        }
        public function  ehView(){
            return view('Committees.eh');
        }
        public function  gameView(){
            return view('Committees.game');
        }
        public function  hrView(){
            return view('Committees.hr');
        }
        public function  linuxView(){
            return view('Committees.linux');
        }
        public function  lrView(){
            return view('Committees.lr');
        }
        public function  prView(){
            return view('Committees.pr');

        }
        public function  projectsView(){
            return view('Committees.projects');
        }
        public function  webView(){
            return view('Committees.web');
        }
        public function  welcomeView(){
            return view('Committees.home');
        }

        public function  closed(){
            return view('Committees.regestration-closed');
        }

 
    public function insertAppoitment(Request $request ,$committee_name)
    {
        $appointment = new Appointments();
        // dd($request->all());
        $appointment->date = $request->Date;
        $appointment->time = $request->Time;
        $appointment->numberOfSeats = $request->NumberOfAva;
        // dd($committee_name);
        $appointment->committee_id = Committees::where('name','like',$committee_name)->first()->id;
        // $committee = Committees::where('name','like',$committee_name)->first()->id;
        // dd($committee);
        // dd($appointment->committee_id);
        $appointment->save();
            return redirect()->route('GetAll',$committee_name);
    }
    public function getAllAppoitments($committee_name)
    {
        // dd($committee_name);
        $committee_id =Committees::where('name','like',$committee_name)->first()->id;
        if($committee_name == 'Art')
        {
            $appointments = DB::table('appointments')->where('committee_id',$committee_id)->get();
            return view('Committees.ArtCommittee')->with('appointments',$appointments);
        }
        else if($committee_name == 'Blender')
        {
            $appointments = DB::table('appointments')->where('committee_id',$committee_id)->get();
            return view('Committees.BlenderCommittee')->with('appointments',$appointments);
        }
        else if($committee_name == 'ccc' )
        {
            $appointments = DB::table('appointments')->where('committee_id',$committee_id)->get();
            return view('Committees.cccCommittee')->with('appointments',$appointments);
        }
        else if($committee_name == 'English' )
        {
            $appointments = DB::table('appointments')->where('committee_id',$committee_id)->get();
            return view('Committees.EnglishCommittee')->with('appointments',$appointments);
        }
        else if($committee_name == 'Game' )
        {
            $appointments = DB::table('appointments')->where('committee_id',$committee_id)->get();
            return view('Committees.GameCommittee')->with('appointments',$appointments);
        }
        else if($committee_name =='HR' )
        {
            $appointments = DB::table('appointments')->where('committee_id',$committee_id)->get();
            return view('Committees.HRCommittee')->with('appointments',$appointments);
        }
        else if($committee_name =='Linux' )
        {
            $appointments = DB::table('appointments')->where('committee_id',$committee_id)->get();
            return view('Committees.LinuxCommittee')->with('appointments',$appointments);
        }
        else if($committee_name == 'LR' )
        {
            $appointments = DB::table('appointments')->where('committee_id',$committee_id)->get();
            return view('Committees.LRCommittee')->with('appointments',$appointments);
        }
        else if($committee_name == 'PR' )
        {
            $appointments = DB::table('appointments')->where('committee_id',$committee_id)->get();
            return view('Committees.PRCommittee')->with('appointments',$appointments);
        }
        else if($committee_name == 'Project' )
        {
            $appointments = DB::table('appointments')->where('committee_id',$committee_id)->get();
            return view('Committees.ProjectsCommittee')->with('appointments',$appointments);
        }
        else if($committee_name == 'Web' )
        {
            $appointments = DB::table('appointments')->where('committee_id',$committee_id)->get();
            return view('Committees.WebCommittee')->with('appointments',$appointments);
        }
        else
        return '<h1>NotFound</h1>';

    }
    public function deleteAppointment($committee_name,$id)
    {   
        // $committee_id =Committees::where('name','like',$committee_name)->first()->id;
        Appointments::findOrFail($id)->delete();;

        return $this->getAllAppoitments($committee_name);
    }
}
