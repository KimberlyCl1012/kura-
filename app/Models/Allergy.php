<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Allergy extends Model
{
    use HasFactory;

    protected $guarded = [];
    // protected $primaryKey = 'id_allergy';

    public function patient()
    {
        return $this->belongsToMany(Patient::class); // , 'id_patient'
    }

}
