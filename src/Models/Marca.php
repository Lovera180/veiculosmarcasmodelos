<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $table        = 'marcas';
    protected $fillable     = ['descricao' ,'status'];

    public function tipoVeiculo()
    {
        return $this->belongsTo('App\Models\TipoVeiculo');
    }

    public function modelos()
    {
        return $this->hasMany('App\Models\Modelo');
    }
}
