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
        $dados = ContatoModel::create([
            'Nome' => $request->Nome,
            'Telefone' => $request->Telefone,
            'Email' => $request->Email,
            ]);
        $dados->save();
        
        return redirect('/');
    }

    
    public function edit(Request $request){
        $dadosAtualizar = ContatoModel::where('ID', $request->ID)->first();

        $dadosAtualizar->Nome = $request->Nome;
        $dadosAtualizar->Email = $request->Email;
        $dadosAtualizar->Telefone = $request->Telefone;

        $dadosAtualizar->update();
        
        return redirect('/');
    }

    public function delete($id){
        $dadosExcluir = ContatoModel::where('ID', $id)->first();
        $dadosExcluir->delete();
        return redirect('/');
    }
}
