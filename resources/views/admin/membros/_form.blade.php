
<div class="input-field">

    <input type="text" name="nome" value="{{isset($membro->nome) ? $membro->nome : '' }}">
    <label>Nome</label>

</div>

<div class="input-field">

    <input type="text" name="rg" value="{{isset($membro->rg) ? $membro->rg : '' }}">
    <label>Rg</label>

</div>
<div class="input-field">

    <input type="text" name="cpf" value="{{isset($membro->cpf) ? $membro->cpf : '' }}">
    <label>Cpf</label>

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
    <input type="date" name="data_admissao" value="{{isset($membro->data_admissao) ? $membro->data_admissao: ''}}" >
    {{--<label>Data Nascimento</label>--}}
</div>


<div class="input-field ">
    {{--<label for="">Escola o tipo Sanguineo</label>--}}
    <select name="tipo_sanguineo" id="tipo_sanguineo">
        <option value="">Escolha o tipo Sanguineo</option>
        @foreach($tipoSanguineos as $tipoSanguineo)
            <option value="{{$tipoSanguineo}}">{{$tipoSanguineo}}</option>
        @endforeach
    </select>
</div>

<div class="input-field ">
    {{--<label for="">Sexo</label>--}}
    <select name="sexo"  id="sexo">

        <option value="">Sexo</option>
        @foreach($sexos as $sexo)
            <option value="{{$sexo}}">{{$sexo}}</option>
        @endforeach
    </select>
</div>

<div class="input-field">
    <input type="text" name="nacionalidade"  value="{{isset($membro->nacionalidade) ? $membro->nacionalidade: ''}}"  >
    <label>Nacionalidade</label>
</div>

<div class="input-field">
    <input type="text" name="naturalidade"  value="{{isset($membro->naturalidade) ? $membro->naturalidade: ''}}"  >
    <label>Naturalidade</label>
</div>

<div class="input-field">
    <input type="text" name="profissao" value="{{isset($membro->profissao) ? $membro->profissao: ''}}"  >
    <label>Profissão</label>
</div>

<div class="input-field">
    <input type="number" name="cep"  value="{{isset($membro->cep) ? $membro->cep: ''}}" >
    <label>cep</label>
</div>

<div  class="input-field">
    <input type="number" name="numero_celular"  value="{{isset($membro->numero_celular) ? $membro->numero_celular: ''}}"  >
    <label>numero celular</label>
</div>

<div class="input-field">
    <input type="number" name="telefone_fixo"  value="{{isset($membro->telefone_fixo) ? $membro->telefone_fixo: '' }}" >
    <label for="">telefone fixo</label>
</div>

<div class="input-field">
    <input type="text" name="cidade" value="{{isset($membro->cidade) ? $membro->cidade:''}}" >
    <label for="">cidade</label>
</div>

<div class="input-field">
    <input type="text" name="bairro"  value="{{isset($membro->bairro) ? $membro->bairro:''}}" >
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


