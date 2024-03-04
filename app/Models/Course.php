<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'courses';   
    protected $fillable  = ['name' , 'syllabus' , 'startdate','enddate'];
    use HasFactory;
    public function duration(){
        return $this->duration." Months";
    }
}
