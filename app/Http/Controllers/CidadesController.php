<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CidadeModel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CidadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return CidadeModel::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::transaction(function () use ($request) {
            $cidade = new CidadeModel();
            $cidade->Nome_Cidade = $request->Nome_Cidade;
            $cidade->Cod_Uf_FK = $request->uf;
            $cidade->save();
        });
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Cidade $cidade
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, CidadeModel $cidade)
    {
        return $cidade;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Cidade $cidade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CidadeModel $cidade)
    {
        DB::transaction(function () use ($request, $cidade) {
            $cidade->update($request->all());
        });
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Cidade $cidade
     * @return \Illuminate\Http\Response
     */
    public function destroy(CidadeModel $cidade)
    {
        $cidade->delete();
    }
    public function pegarCidadesPorUf(string $uf)
    {

        return CidadeModel::where('uf', $uf)->get();
    }
}
