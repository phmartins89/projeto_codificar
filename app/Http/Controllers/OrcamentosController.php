<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function GuzzleHttp\Psr7\_parse_request_uri;

//use http\Env\Request;

class OrcamentosController extends Controller
{
    public function index(Request $request) {

        $orcamentos = [
            'Pedro',
            'Esta fazendo',
            'um execelente',
            'trabalho'
        ];

        return view('orcamentos.index', compact('orcamentos'));


        return $html;
    }

    public function create()
    {
        return view('orcamentos.create');
    }
}
