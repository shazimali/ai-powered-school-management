<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $table = 'sections';

    protected $fillable = [
        'name',
        'class_id',
        'created_at',
        'updated_at',
    ];

    public function class()
    {
        return $this->belongsTo(Classes::class, 'class_id');
    }
}
