<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suscripcion extends Model
{
    protected $table='suscripcion';
    protected $fillable = ['num_operacion','nombre_banco','plan','voucher','user_id'];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
