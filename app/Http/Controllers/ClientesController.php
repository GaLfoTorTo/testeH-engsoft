<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clientes;
use App\Http\Requests\ClientesRequest;

class ClientesController extends Controller
{
    public function index(){
        $clientes = Clientes::get();
        return view('clientes.index', compact('clientes'));
    }
    public function Novo(){
        return view('clientes.form');
    }

    public function editar($id){
        $cliente = Clientes::find($id);
        return view('clientes.form', compact('cliente'));
    }

    public function salvar(ClientesRequest $request) {

        $ehvalido = $request->validated();
        if($request->id != '') {
            $cliente = Clientes::find($request->id);
            $cliente->update($request->all());
        } else {
            $cliente = Clientes::create($request->all());
        }
        return redirect('/');
    }

    public function deletar(Request $request, $id) {
        $cliente = Clientes::find($id);
        if(!empty($cliente)){
            $cliente->delete();
            return redirect('/');
        } else {
            return redirect('/');
        }
    }
}
