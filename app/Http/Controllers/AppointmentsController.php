<?php

namespace App\Http\Controllers;

use App\Models\Appointments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AppointmentsController extends Controller
{
        public function  registerationView(){
            return view('Committees.EventRegisteration');
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
 
    public function insertAppoitment(Request $request ,$committee_id)
    {
        $appointment = new Appointments();
        $appointment->date = $request->Date;
        $appointment->time = $request->Time;
        $appointment->numberOfSeats = $request->NumberOfAva;
        $appointment->committee_id = $committee_id;

        $appointment->save();

        if($committee_id == 1)
            return redirect()->route('GetAll','1');

        else if($committee_id == 2)
            return redirect()->route('GetAll','2');

        else if($committee_id == 3)
            return redirect()->route('GetAll','3');

        else if($committee_id == 4)
            return redirect()->route('GetAll','4');

        else if($committee_id == 5)
            return redirect()->route('GetAll','5');

        else if($committee_id == 6)
            return redirect()->route('GetAll','6');

        else if($committee_id == 7)
            return redirect()->route('GetAll','7');

        else if($committee_id == 8)
            return redirect()->route('GetAll','8');

        else if($committee_id == 9)
            return redirect()->route('GetAll','9');

        else if($committee_id == 10)
            return redirect()->route('GetAll','10');

        else if($committee_id == 11)
            return redirect()->route('GetAll','11');
        else
        return '<h1>NotFound</h1>';
    }
    public function getAllAppoitments($committee_id)
    {
        if($committee_id == 1)
        {
            $appointments = DB::table('appointments')->where('committee_id',$committee_id)->get();
            return view('Committees.ArtCommittee')->with('appointments',$appointments);
        }
        else if($committee_id ==2 )
        {
            $appointments = DB::table('appointments')->where('committee_id',$committee_id)->get();
            return view('Committees.BlenderCommittee')->with('appointments',$appointments);
        }
        else if($committee_id ==3 )
        {
            $appointments = DB::table('appointments')->where('committee_id',$committee_id)->get();
            return view('Committees.cccCommittee')->with('appointments',$appointments);
        }
        else if($committee_id ==4 )
        {
            $appointments = DB::table('appointments')->where('committee_id',$committee_id)->get();
            return view('Committees.EnglishCommittee')->with('appointments',$appointments);
        }
        else if($committee_id ==5 )
        {
            $appointments = DB::table('appointments')->where('committee_id',$committee_id)->get();
            return view('Committees.GameCommittee')->with('appointments',$appointments);
        }
        else if($committee_id ==6 )
        {
            $appointments = DB::table('appointments')->where('committee_id',$committee_id)->get();
            return view('Committees.HRCommittee')->with('appointments',$appointments);
        }
        else if($committee_id ==7 )
        {
            $appointments = DB::table('appointments')->where('committee_id',$committee_id)->get();
            return view('Committees.LinuxCommittee')->with('appointments',$appointments);
        }
        else if($committee_id ==8 )
        {
            $appointments = DB::table('appointments')->where('committee_id',$committee_id)->get();
            return view('Committees.LRCommittee')->with('appointments',$appointments);
        }
        else if($committee_id ==9 )
        {
            $appointments = DB::table('appointments')->where('committee_id',$committee_id)->get();
            return view('Committees.PRCommittee')->with('appointments',$appointments);
        }
        else if($committee_id ==10 )
        {
            $appointments = DB::table('appointments')->where('committee_id',$committee_id)->get();
            return view('Committees.ProjectsCommittee')->with('appointments',$appointments);
        }
        else if($committee_id ==11 )
        {
            $appointments = DB::table('appointments')->where('committee_id',$committee_id)->get();
            return view('Committees.WebCommittee')->with('appointments',$appointments);
        }
        else
        return '<h1>NotFound</h1>';

    }
    public function deleteAppointment($committee_id,$id)
    {
        Appointments::findOrFail($id)->delete();;

        return $this->getAllAppoitments($committee_id);
    }
}
