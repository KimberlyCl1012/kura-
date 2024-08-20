<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    use HasFactory;

    protected $guarded = [];
    // protected $primaryKey = 'id_userDetail';


    public function company()
    {
        return $this->belongsTo(Company::class);  //, 'id_company'
    }

    public function site()
    {
        return $this->belongsTo(Site::class);  //, 'id_site'
    }

    public function sex()
    {
        return $this->belongsTo(Sex::class);  //, 'id_sex'
    }

    public function patient()
    {
        return $this->hasOne(Patient::class);  //, 'id_userDetail'
    }

    public function kurator()
    {
        return $this->hasOne(Kurator::class);  //, 'id_userDetail'
    }
}
