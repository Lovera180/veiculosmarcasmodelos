<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
    protected $table        = 'modelos';
    protected $fillable     = ['marca_id', 'descricao', 'status'];

    public function marca()
    {
        return $this->belongsTo('App\Models\Marca');
    }

    public function veiculos()
    {
        return $this->hasMany('App\Models\Veiculo');
    }
}
