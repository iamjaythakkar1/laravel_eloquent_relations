<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'project_id',
    ];

    // public function projects()
    // {
    //     return $this->belongsTo(Project::class);
    // }

    // public function tasks()
    // {
    //     return $this->hasMany(Task::class);
    // }
}
