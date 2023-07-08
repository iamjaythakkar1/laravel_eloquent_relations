<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_name',
    ];

    // public function students()
    // {
    //     return $this->hasMany(Student::class);
    // }
    public function tasks()
    {
        return $this->hasOneThrough(Task::class, Student::class);
    }

    public function manytasks()
    {
        return $this->hasManyThrough(Task::class, Student::class);
    }
}
