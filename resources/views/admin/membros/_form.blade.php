
<div class="input-field">

    <input type="text" name="nome" value="{{isset($membro->nome) ? $membro->nome : '' }}">
    <label>Nome</label>

</div>


<div class="input-field">

    <input type="text" name="email" value="{{isset($membro->email) ? $membro->email: '' }}">
    <label>Email</label>

</div>


<p>Data nascimento</p>
<div class="input-field">
    <input type="date" name="data_nascimento" value="{{isset($membro->data_nascimento) ? $membro->data_nascimento: ''}}" >
    {{--<label>Data Nascimento</label>--}}
</div>


<p>Data Batismo</p>
<div class="input-field">
    {{--<label>Data Batismo</label>--}}
    <input type="date" name="data_batismo" placeholder="batistmo" value="{{isset($membro->data_batismo)? $membro->data_batismo: '' }}">

</div>
<p>Data Admissao</p>
<div class="input-field">
    <input type="date" name="data_admissão" value="{{isset($membro->data_admissão) ? $membro->data_admissão: ''}}" >
    {{--<label>Data Nascimento</label>--}}
</div>


<div class="input-field">
    {{--<select name="sexo" id="sexo">--}}
        {{--<option value="" disabled selected>Choose your option</option>--}}
        {{--<option  value="{{$membro->sexo == 'masculino'? 'selected':''}}">Masculino</option>--}}
        {{--<option value="{{$membro->sexo == 'feminino'? 'selected':''}}">Feminino</option>--}}
        {{--<option value="{{isset($membro->sexo['masculino']) ? $membro->sexo: '' }}">Masculino</option>--}}

        {{--<option value="{{isset($membro->sexo['feminino']) ? $membro->sexo: ''}}">Feminino</option>--}}

        {{--<option value="1">Option 1</option>--}}
        {{--<option value="2">Option 2</option>--}}
    {{--</select>--}}
    {{--<label>Sexo</label>--}}
    <input type="text"   value="{{isset($membro->sexo)? $membro->sexo: '' }}">
    <label for="">Sexo</label>
</div>

<div class="input-field">

    <input type="text"   value="{{isset($membro->tipo_sanguineo)? $membro->tipo_sanguineo: '' }}">


</div>

{{--<div class="input-field col s12">--}}

    {{--<select name="tipo_sanguineo" id="tipo_sanguineo">--}}
        {{--<option value=""></option>--}}
        {{--<option value=""></option>--}}

    {{--</select>--}}
    {{--<label for="">Tipo Sanguineo</label>--}}
{{--</div>--}}

<div class="input-field">
    <input type="text" name="nacionalidade" >
    <label>Nacionalidade</label>
</div>
<div class="input-field">
    <input type="text" name="naturalidade" >
    <label>Naturalidade</label>
</div>
<div class="input-field">
    <input type="text" name="profissao" >
    <label>Profissão</label>
</div>
<div class="input-field">
    <input type="number" name="cep" >
    <label>cep</label>
</div>
<div  class="input-field">
    <input type="number" name="numero_celular" >
    <label>numero celular</label>
</div>
<div class="input-field">
    <input type="number" name="telefone_fixo" >
    <label for="">telefone fixo</label>
</div>
<div class="input-field">
    <input type="text" name="cidade" >
    <label for="">cidade</label>
</div>
<div class="input-field">
    <input type="text" name="bairro" >
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


@if(isset($membro->imagem))
    <div class="input-field">
        <img width="150" src="{{asset($membro->imagem)}}" alt="">
    </div>
@endif


