<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $guarded = [];
    // protected $primaryKey = 'id_appointment';

    public function site()
    {
        return $this->hasOne(Site::class); // , 'id_site'
    }

    public function treatmentLogs()
    {
        return $this->hasMany(TreatmentLog::class); //, 'id_appointment'
    }

    public function kurators()
    {
        return $this->belongsToMany(Kurator::class, 'kurator_pacient', 'id_paciente', 'id_kurador');
    }

    public function healthRecord()
    {
        return $this->belongsTo(HealthRecord::class);  //, 'id_healthRecord'
    }

    public function notes()
    {
        return $this->morphMany(Note::class, 'noteable');
    }
}
