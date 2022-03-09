<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContatoModel;
use Illuminate\Support\Facades\DB;

class ContatoController extends Controller
{

    public function index() {
        return view('add');
    }

    public function editIndex($id) {
        $queryUser = DB::table('tb_contatos')->where('id', $id)->get();
        return view('edit')->with(['user'=>$queryUser]);
    }

    public function store(Request $request){

        $validated = $request->validate([
            'Nome' => 'required|max:255',
            'Telefone' => 'required|max:255',
            'Email' => 'required|email|max:255',
            'cep' => 'required|max:255',            
            'numero' => 'required|max:255',
        ]);

        $dados = ContatoModel::create([
            'Nome' => $request->Nome,
            'Telefone' => $request->Telefone,
            'Email' => $request->Email,
            'cep' => $request->cep,
            'estado' => $request->estado,
            'cidade' => $request->cidade,
            'bairro' => $request->bairro,
            'rua' => $request->logradouro,
            'numero' => $request->numero,
            'complemento' => $request->complemento,
            ]);
        $dados->save();
        
        return redirect('/');
    }

    
    public function edit(Request $request){

        $validated = $request->validate([
            'Nome' => 'required|max:255',
            'Telefone' => 'required|max:255',
            'Email' => 'required|email|max:255',
            'cep' => 'required|max:255',            
            'numero' => 'required|max:255',
        ]);

        $dadosAtualizar = ContatoModel::where('ID', $request->ID)->first();

        $dadosAtualizar->Nome = $request->Nome;
        $dadosAtualizar->Email = $request->Email;
        $dadosAtualizar->cep = $request->cep;
        $dadosAtualizar->estado = $request->estado;
        $dadosAtualizar->cidade = $request->cidade;
        $dadosAtualizar->bairro = $request->bairro;
        $dadosAtualizar->rua = $request->rua;
        $dadosAtualizar->numero = $request->numero;
        $dadosAtualizar->complemento = $request->complemento;



        $dadosAtualizar->update();
        
        return redirect('/');
    }

    public function delete($id){
        $dadosExcluir = ContatoModel::where('ID', $id)->first();
        $dadosExcluir->delete();
        return redirect('/');
    }
}
