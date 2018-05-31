<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Membros extends Model
{
    protected $fillable =[
        'nome','email','rg','cpf','data_nascimento','data_batismo','data_admissao','sexo','tipo_sanguineo','nacionalidade','naturalidade',
        'profissao','cep','numero_celular','telefone_fixo','cidade','bairro','imagem'
    ];
    public function tipoSanguineos(){

        return ['A+','A-','B+','B-','AB+','AB-','O+','O-'];

    }
    public function tipoSexo(){
        return ['masculino','feminino'];
    }
//$table->date('data_nascimento');
//$table->date('data_batismo');
//$table->date('data_admissao');
//$table->enum('sexo',['masculino','feminino']);
//$table->enum('tipo_sanguineo',['A+','A-','B+','B-','AB+','AB-','O+','O-']);
//$table->string('nacionalidade');
//$table->string('naturalidade');
//$table->string('profissao');
//$table->string('cep');
//$table->string('numero_celular');
//$table->string('telefone_fixo');
//$table->string('cidade');
//$table->string('bairro');
//$table->string('imagem');
}
