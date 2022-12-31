<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timecards extends Model
{
    use HasFactory;

    protected $fillable = [
        'students_id',
        'c_date',
        'c_in',
        'c_out',
    ];
}
