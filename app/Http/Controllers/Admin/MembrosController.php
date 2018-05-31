<?php
/**
 * Created by PhpStorm.
 * User: guilherme
 * Date: 16/05/18
 * Time: 15:07
 */

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Membros;

use App\Http\Controllers\Controller;

class MembrosController extends Controller
{

    public function index()
    {

        $membros = Membros::all();

//        $tipo_sanguineo = Membros::getEnumValues('Membros','tipo_sanguineo');

        // dd($tipo_sanguineo);

//        return view('admin.membros.adicionar', compact('tipo_sanguineo', 'membros'));
        return view('admin.membros.index',compact('membros'));

    }
    public function adicionar(Membros $membro){

        $tipoSanguineos = $membro->tipoSanguineos();
        $sexos = $membro->tipoSexo();

        return view('admin.membros.adicionar',compact('tipoSanguineos','sexos'));

    }

    public function salvar(Request $request){
        $dados = $request->all();

        if($request->hasFile('imagem')){
            $imagem = $request->file('imagem');
            $numero = rand(1111,9999);
            $dir = "img/membros/";
            $ex = $imagem->guessClientExtension();
            $nomeImagem = "imagem".$numero.".".$ex;
            $imagem->move($dir,$nomeImagem);
            $dados['imagem'] = $dir."/".$nomeImagem;
        }

        Membros::create($dados);

        return redirect()->route('admin.membros');
    }

    public function editar($id){
        $membro = Membros::find($id);
        $tipoSanguineos = $membro->tipoSanguineos();
        $sexos = $membro->tipoSexo();
        return view('admin.membros.editar',array('membro'=> $membro,'tipoSanguineos'=>$tipoSanguineos,'sexos'=>$sexos));
    }

    public function atualizar(Request $request,$id){
        $dados  = $request->all();

        if($request->hasFile('imagem')){
            $imagem = $request->file('imagem');
            $numero = rand(1111,9999);
            $dir = "img/cursos/";
            $ex = $imagem->guessClientExtension();
            $nomeImagem = "imagem_".$numero.".".$ex;
            $imagem->move($dir,$nomeImagem);
            $dados['imagem'] = $dir."/".$nomeImagem;

        }

        $membro = Membros::find($id);
        $membro->update($dados);

        return redirect()->route('admin.membros',compact('membro'));
    }

    public function deletar($id)
    {
       $membros =  Membros::find($id);
       $membros->delete();
       return redirect()->back();
    }




}