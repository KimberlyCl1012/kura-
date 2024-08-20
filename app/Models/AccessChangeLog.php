<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccessChangeLog extends Model
{
    use HasFactory;

    /* 
    protected $fillable = [
        'ID_Usr', 'TipoLog', 'Tabla', 'LlavePrimaria', 
        'LlaveSecundaria', 'TipoCambio', 'TituloCampo', 
        'ValorAntiguo', 'ValorNuevo', 'FechaRegistro'
    ]; */
    protected $guarded = [];
    // protected $primaryKey = 'id_changeLog';


    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
