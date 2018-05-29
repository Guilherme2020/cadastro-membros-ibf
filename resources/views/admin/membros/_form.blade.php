<div class="input-field">

    <input type="text" name="nome" value="{{}}">
    <label>Nome</label>

</div>


<div class="input-field">

    <input type="text" name="email" value="{{}}">
    <label>Email</label>

</div>

<div class="input-field">
    <input type="date" name="data_nascimento" value="{{}}">
    <label>Data Nascimento</label>
</div>



<div class="input-field">
    <input type="date" name="data_batismo" value="{{}}">
    <label>Data Batismo</label>
</div>

<div>

    <select name="tipo_sanguineo" id="tipo_sanguineo">

    </select>

</div>

<div>

    <select name="sexo" id="sexo">

    </select>

</div>

<div class="input-field">
    <input type="text" name="nacionalidade" value="{{}}">
    <label>Nacionalidade</label>
</div>
<div class="input-field">
    <input type="text" name="naturalidade" value="{{}}">
    <label>Naturalidade</label>
</div>
<div class="input-field">
    <input type="text" name="profissao" value="{{}}">
    <label>Profissão</label>
</div>
<div class="input-field">
    <input type="number" name="cep" value="{{}}">
    <label>cep</label>
</div>
<div  class="input-field">
    <input type="number" name="numero_celular" value="{{}}">
    <label>numero celular</label>
</div>
<div class="input-field">
    <input type="number" name="telefone_fixo" value="{{}}">
    <label for="">telefone fixo</label>
</div>
<div class="input-field">
    <input type="text" name="cidade" value="{{}}">
    <label for="">cidade</label>
</div>
<div class="input-field">
    <input type="text" name="bairro" value="{{}}">
    <label for="">bairro</label>
</div>
<div class="file-field input-field">
    <div class="btn blue">
        <span>imagem</span>
        <input type="file" name="imagem">
    </div>
    <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
    </div>
</div>


@if(isset($registro->imagem))
    <div class="input-field">
        {{--<img width="150" src="{{asset($registro->imagem)}}" alt="">--}}
    </div>
@endif

$table->string('nacionalidade');
$table->string('naturalidade');
$table->string('profissao');
$table->string('cep');
$table->string('numero_celular');
$table->string('telefone_fixo');
$table->string('cidade');
$table->string('bairro');
$table->string('imagem');

