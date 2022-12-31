<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

      /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'prefix_name',
        'first_name',
        'last_name',
        'birthdays',
        'symbol',
        'id_tags',
        'parents1',
        'parents2',
        'telephone_number_parents1',
        'telephone_number_parents2',
        'telephone_number_bus',
        'habitations',
    ];
    public function information(){

        return $this->hasOne(Student::class,'students_id','id');
         // return $this->belongsTo(Student::class);
    }
}
