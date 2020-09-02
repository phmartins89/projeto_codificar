<?php


namespace App\Http\Controllers;

use App\Http\Requests\OrcamentosFormRequest;
use App\Orcamento;
use Illuminate\Http\Request;
use function GuzzleHttp\Psr7\_parse_request_uri;

//use http\Env\Request;

class OrcamentosController extends Controller
{
    public function index(Request $request) {

        $nome_cliente = $request->input('nome_cliente');

        $orcamentos = Orcamento::query()
            // ->where('nome', '=', $nome_cliente)
            ->orderBy('data','desc')
            ->get();
        $mensagem = $request->session()->get('mensagem');



        return view('orcamentos.index', compact('orcamentos','mensagem'));


    }

    public function filtro(Request $request){
        //dd($request->all());
        $nome_cliente = $request->input('nome_cliente');
        $data_inicial = $request->input('data_inicial');
        $data_final = $request->input('data_final');

        

        $orcamentos = Orcamento::query()
             ->where('nome', 'like', "%".$nome_cliente."%")
             ->orWhere('vendedor', 'like', "%".$nome_cliente."%")
            ->orderBy('data','desc')
            ->get();

         //dd($orcamentos->toSql());   
        $mensagem = $request->session()->get('mensagem');


        return view('orcamentos.index', compact('orcamentos','mensagem'));


    }

    public function edit(Request $request)
    {
        Orcamento::findOrFail($request->id)
                        ->fill($request->all())
                        ->save();

        
        $orcamentos = Orcamento::query()
                    ->orderBy('data','desc')
                    ->get();
            
        $mensagem = $request->session()->get('mensagem');

        return view('orcamentos.index', compact('orcamentos','mensagem'));
    }

    public function editIndex(Request $request) {
        $id = $request->id;

        $orcamento = Orcamento::find($id);

        $mensagem = $request->session()->get('mensagem');

        return view('orcamentos.edit', compact('orcamento','mensagem'));
    }

    public function create()
    {
        return view('orcamentos.create');
    }

    public function store(OrcamentosFormRequest $request)
    {
        //$request->validate();
       //dd($request->all());
        $orcamento = Orcamento::create($request->all());
        $request-> session()
            ->flash(
            'mensagem',
            "Cliente criado com sucesso {$orcamento->nome}!"
        );

        return redirect() ->route('listar_orcamentos');
    }

    public function destroy(Request $request)
    {
        Orcamento::destroy($request->id);
        $request-> session()
            ->flash(
                'mensagem',
                "Cliente removido com sucesso!"
            );
        return redirect()->route('listar_orcamentos');
    }


}
