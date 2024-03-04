<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'teachers';   
    protected $fillable  = ['name' ,'course_name','batch_name' ,'batchtimings' , 'mobile'];
    use HasFactory;
    public function batch()
    {
        return $this->belongsTo(Batch::class);
    }
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
