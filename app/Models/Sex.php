<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sex extends Model
{
    use HasFactory;

    protected $guarded = [];
    // protected $primaryKey = 'id_sex';
    
    public function userDetail()
    {
        return $this->hasMany(UserDetails::class); //, 'id_userDetail'
    }
}
