<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'payments';   
    protected $fillable  = ['enrollment_id' , 'paid_date' , 'amount'];
    use HasFactory;

    public function enrollment(){
        return $this->belongsTo(Enrollment::class);
    }
}
