@extends('layout.site')

@section('titulo','Membros IBF')


@section('conteudo')

    <div class="container">

        <h3 class="center">Adicionar Membro</h3>

        <div class="row">
            <form  action="{{route('admin.membros.salvar')}}" class=""  enctype="multipart/form-data" method="post">
                {{csrf_field()}}

                @include('admin.membros._form')



                <button class="btn deep-orange">
                    Salvar
                </button>

            </form>
        </div>
    </div>

@endsection