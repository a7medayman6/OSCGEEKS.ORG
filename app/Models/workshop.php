<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class workshop extends Model
{
    protected $fillable = ['name','email','phone','college','studentYear','workshop',"interview_time"];
    
   public static function store($request){
// dd($request->all());
    self::create([
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->studentPhone,
        'college' => $request->studentCollege,
        'studentYear' => $request->studentYear,
        'workshop' => $request->workshop_name,
        'interview_time' => $request->interview_time,
        "created_at" => date("Y-m-d h:i:sa")
    ]);
   }
//    public static function destroy(workshop $persone){
//     $persone->delete($persone->id);
//    }
}
