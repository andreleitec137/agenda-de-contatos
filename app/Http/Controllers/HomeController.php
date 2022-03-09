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
                ['nome', 'like', '%'.$search.'%']
            ])->get();

            return view('home')->with(['contatos' =>  $querySpecify, 'search' => $search]);

        }else{
            $queryAll = HomeModel::all();
            return view('home')->with(['contatos' =>  $queryAll, 'search' => $search]);
        }
       
    }

    
}
