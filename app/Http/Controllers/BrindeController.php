<?php

namespace App\Http\Controllers;

use App\Models\Brindes;
use Illuminate\Http\Request;

class BrindeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Brindes::all();

        return $contacts;
    }

    /**
     * Display a listing of the researched resource.
     *  @param  string  $term
     * @return \Illuminate\Http\Response
     */
    public function getBySearch($term)
    {       
        $filterData =  Brindes::query()->where('destinatario','LIKE','%'.$term.'%')
                                    ->orWhere('email', 'LIKE', '%' . $term . '%')
                                    ->orWhere('telefone', 'LIKE', '%' . $term . '%')
                                    ->orWhere('cep', 'LIKE', '%' . $term . '%')
                                    ->orWhere('estado', 'LIKE', '%' . $term . '%')
                                    ->orWhere('bairro', 'LIKE', '%' . $term . '%')
                                    ->orWhere('logradouro', 'LIKE', '%' . $term . '%')
                                    ->orWhere('complemento', 'LIKE', '%' . $term . '%')
                                    ->orWhere('uf', 'LIKE', '%' . $term . '%')
                                    ->get();
        return $filterData;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'telefone'=>'required',
            'cep'=>'required',
            'estado'=>'required',
            'bairro'=>'required',
            'logradouro'=>'required',
            'uf'=>'required',
            'destinatario'=>'required',
        ]);

        $brinde = new Brindes([
            'email' => $request->get('email'),
            'telefone' => $request->get('telefone'),
            'cep' => $request->get('cep'),
            'estado' => $request->get('estado'),
            'bairro' => $request->get('bairro'),
            'logradouro' => $request->get('logradouro'),
            'complemento' => $request->get('complemento'),
            'uf' => $request->get('uf'),
            'destinatario' => $request->get('destinatario'),
        ]);
        $brinde->save();
        return response('Brinde Salvo!', 200);
    }
}
