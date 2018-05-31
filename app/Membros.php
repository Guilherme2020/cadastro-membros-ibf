<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Membros extends Model
{

    public function tipoSanguineos(){

        return ['A+','A-','B+','B-','AB+','AB-','O+','O-'];

    }
    public function tipoSexo(){
        return ['masculino','feminino'];
    }
}
