<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Committees extends Model
{
    protected $table = 'committees';
    protected $primaryKey = 'id';
    protected $fillable =
    [
        'name'

    ];
    protected $hidden=['created_at','updated_at'];
}
