<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeModel;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index() {
        $queryAll = DB::table('tb_contatos')->get();
        return view('home')->with(['contatos' =>  $queryAll]);
    }

    
}
