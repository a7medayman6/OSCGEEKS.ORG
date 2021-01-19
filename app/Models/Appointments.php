<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointments extends Model
{
    protected $table = 'appointments';
    protected $primaryKey = 'id';
    protected $fillable =
    [
        'date','time','committee_id'
    ];
    protected $hidden=['created_at','updated_at'];
}
