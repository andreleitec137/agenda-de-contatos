<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeModel;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index() {

        $search = request('search');

        if($search){

            $querySpecify = HomeModel::where([
                ['Nome', 'like', '%'.$search.'%']
            ])->get();

            if($querySpecify->count() == 0){
                $querySpecify = HomeModel::where([
                    ['Telefone', 'like', '%'.$search.'%']
                ])->get();
            }

            if($querySpecify->count() == 0){
                $querySpecify = HomeModel::where([
                    ['Email', 'like', '%'.$search.'%']
                ])->get();
            }
            return view('home')->with(['contatos' =>  $querySpecify, 'search' => $search]);

        }else{
            $queryAll = HomeModel::all();
            return view('home')->with(['contatos' =>  $queryAll, 'search' => $search]);
        }
       
    }

    
}
