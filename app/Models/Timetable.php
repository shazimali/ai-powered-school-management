<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Timetable extends Model
{
    protected $table = 'timetables';

    protected $fillable = [
        'class_id',
        'section_id',
        'day',
        'created_at',
        'updated_at',
    ];
}
