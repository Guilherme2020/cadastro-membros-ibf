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
        return view('admin.membros.index',$membros);


    }
    public function adicionar(){

    }

}