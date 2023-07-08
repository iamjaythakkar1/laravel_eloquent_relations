<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'task_name',
        'student_id',
    ];

    // public function students()
    // {
    //     return $this->belongsTo(Student::class);
    // }
}
