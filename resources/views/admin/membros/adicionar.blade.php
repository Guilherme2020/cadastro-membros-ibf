@extends('layout.site')

@section('titulo','Membros')


@section('conteudo')

    <div class="container">

        <h3 class="center">Adicionar Membro</h3>

        <div class="row">
            <form class="" action="">
                {{csrf_field()}}
                @include('admin.membros._form')



                <button class="btn deep-orange">
                    Salvar
                </button>

            </form>
        </div>
    </div>

@endsection