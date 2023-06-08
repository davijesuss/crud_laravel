<?php

namespace App\Http\Controllers;

use App\Models\Filme;
use Illuminate\Http\Request;

class FilmesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
   
        $filmes = Filme::all();
        //dd($filmes);
        return view('filmes.index', ['filmes'=>$filmes]); // mandando os dados pra views 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('filmes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Filme::create($request->all());
        return redirect()->route('filmes-index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $filmes = Filme::where('id', $id)->first(); //pega o id da tabela referente ao cadastro
        if(!empty($filmes))
        {
            return view('filmes.edit', ['filmes'=>$filmes]);
        }else
        {
            return redirect()->route('filmes-index');

        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // 
        $data = [
            'nome' => $request->nome,
            'categoria' => $request->categoria,
            'ano_lancamento' => $request->ano_lancamento,
            'valor' => $request->valor,


        ];
        Filme::where('id',$id)->update($data);
        return redirect()->route('filmes-index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Filme::where('id',$id)->delete();
        return redirect()->route('filmes-index');
       
    }
}
