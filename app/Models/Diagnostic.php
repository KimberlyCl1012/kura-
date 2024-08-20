<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnostic extends Model
{
    use HasFactory;

    protected $guarded = [];
    // protected $primaryKey = 'id_diagnostic';

    public function wound()
    {
        return $this->belongsTo(Wound::class);  // , 'id_wound'
    }

    public function treatments()
    {
        return $this->hasMany(Treatment::class);  // , 'id_wound'
    }

    public function notes()
    {
        return $this->morphMany(Note::class, 'noteable');
    }
}
