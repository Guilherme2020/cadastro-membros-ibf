@extends('layout.site')

@section('titulo','Membros IBF')

@section('conteudo')
    <div class="container">
        <h3 class="center">Lista de Membros</h3>
        <div class="row">
            <table>
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Imagem</th>
                    <th>Data-Nascimento</th>
                    <th>Ação</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($membros as $membro)
                        <tr>
                            <td>{{$membro->id}}</td>
                            <td>{{$membro->nome}}</td>
                            <td>{{$membro->email}}</td>
                            <td><img  height="60" src="{{asset($membro->imagem)}}" alt="{{ $membro->nome }}" /></td>
                            <td>{{$membro->data_nascimento}}</td>
                            <td>
                                <a class="btn deep-orange" href="{{ route('admin.membros.editar',$membro->id) }}">Editar</a>
                                <a class="btn red" href="{{ route('admin.membros.deletar',$membro->id) }}">Deletar</a>
                                {{--<a class="btn deep" href="{{ route('admin.membros.deletar',$registro->id) }}">Vizualizar</a>--}}

                            </td>
                        </tr>
                    @endforeach
                </tbody>
                {{--@foreach($registros as $registro)--}}
                    {{--<tr>--}}
                        {{--<td>{{ $registro->id }}</td>--}}
                        {{--<td>{{ $registro->titulo }}</td>--}}
                        {{--<td>{{ $registro->descricao }}</td>--}}
                        {{--<td><img  height="60" src="{{asset($registro->imagem)}}" alt="{{ $registro->titulo }}" /></td>--}}
                        {{--<td>{{ $registro->publicado }}</td>--}}
                        {{--<td>--}}
                            {{--<a class="btn deep-orange" href="{{ route('admin.cursos.editar',$registro->id) }}">Editar</a>--}}
                            {{--<a class="btn red" href="{{ route('admin.cursos.deletar',$registro->id) }}">Deletar</a>--}}
                            {{--<a class="btn deep" href="{{ route('admin.cursos.deletar',$registro->id) }}">Vizualizar</a>--}}

                        {{--</td>--}}
                    {{--</tr>--}}
                {{--@endforeach--}}

            </table>
        </div>
        <div class="row">
            <a class="btn blue" href="{{ route('admin.membros.adicionar') }}">Adicionar</a>

        </div>

    </div>




@endsection