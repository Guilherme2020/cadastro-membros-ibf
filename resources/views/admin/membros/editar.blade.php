@extends('layout.site')

@section('titulo','Membros IBF')

@section('conteudo')
    <div class="container">
        <h3 class="center">Editar  Membro</h3>
        <div class="row">
            <form  class="" action="{{route('admin.membros.atualizar',$membro->id)}}" enctype="multipart/form-data" method="post">
                {{ csrf_field() }}

                <input type="hidden" name="_method" value="put" >

                @include('admin.membros._form')

                <button class="btn deep-orange">
                    Atualizar
                </button>
            </form>
        </div>

    </div>




@endsection