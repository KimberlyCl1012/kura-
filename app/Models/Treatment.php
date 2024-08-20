<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    use HasFactory;

    protected $guarded = [];
    // protected $primaryKey = 'id_treatment';

    public function treatment()
    {
        return $this->belongsTo(Treatment::class);  // , 'id_wound'
    }

    public function treatmentLogs()
    {
        return $this->hasMany(TreatmentLog::class);  // , 'id_wound'
    }

    public function notes()
    {
        return $this->morphMany(Note::class, 'noteable');
    }
}
