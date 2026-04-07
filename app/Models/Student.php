<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'date_of_birth',
        'school_class_id'
    ];

    public function schoolClass()
    {
        return $this->belongsTo(SchoolClass::class);
    }
}
