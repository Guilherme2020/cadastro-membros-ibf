<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membros', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('email')->unique();
            $table->date('data_nascimento');
            $table->date('data_batismo');
            $table->date('data_admissão');
            $table->enum('sexo',['masculino','feminino']);
            $table->enum('tipo_sanguineo',['A+','A-','B+','B-','AB+','AB-','O+','O-']);
            $table->string('nacionalidade');
            $table->string('naturalidade');
            $table->string('profissao');
            $table->string('cep');
            $table->string('numero_celular');
            $table->string('telefone_fixo');
            $table->string('cidade');
            $table->string('bairro');
            $table->string('imagem');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('membros');
    }
}
