<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function type()
    {
        return $this->belongsTo(NoteType::class,'type_id');
    }

    public function student()
    {
        return $this->belongsTo(Student::class,'student_id');
    }
}
