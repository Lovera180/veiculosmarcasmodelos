<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoVeiculo extends Model
{
    protected $table        = 'tipo_veiculo';
    protected $fillable     = ['descricao', 'status'];

    public function marca()
    {
        return $this->hasMany('App\Models\Marca');
    }
}