<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';
    protected $primaryKey = 'id';
    protected $fillable =
    [
        'name',
        'email',
        'phone',
        'college',
        'grade',
        'committee_A',
        'dateCommittee_A',
        'timeCommittee_A',
        'committee_B'
    ];
    protected $hidden=['created_at','updated_at'];
}
