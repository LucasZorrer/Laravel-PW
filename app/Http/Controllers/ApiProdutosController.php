<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ApiProdutosController extends Controller
{
    public function list(){
        $produtos = Produto::all();
        return response()->json($produtos, 200);
    }
}
