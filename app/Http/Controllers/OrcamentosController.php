<?php


namespace App\Http\Controllers;

use App\Orcamento;
use Illuminate\Http\Request;
use function GuzzleHttp\Psr7\_parse_request_uri;

//use http\Env\Request;

class OrcamentosController extends Controller
{
    public function index(Request $request) {

        $orcamentos = Orcamento::query()
            -> orderBy('nome')
            ->get();
        $mensagem = $request->session()->get('mensagem');



        return view('orcamentos.index', compact('orcamentos','mensagem'));


           }

    public function create()
    {
        return view('orcamentos.create');
    }

    public function store(Request $request)
    {
        $orcamento = Orcamento::create($request->all());
        $request-> session()
            ->flash(
            'mensagem',
            "Cliente {$orcamento->id} criado com sucesso {$orcamento->nome}!"
        );

        return redirect('/orcamentos');


    }
}
