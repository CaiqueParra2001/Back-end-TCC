<?php

namespace App\Http\Controllers;

use App\Models\Avaliation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AvaliationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Avaliation::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::transaction(function () use ($request) {
            $avaliation= Avaliation::create([
                'name' => $request['name'],
                'comment' => $request['comment'],
                'business_id' => $request['business_id'],
                'user_id' => $request['user_id'],
            ]);
        });
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($avaliation)
    {
        return $avaliation;
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
        $avaliation= Avaliation::update([
        'name' => $request['name'],
        'comment' => $request['cpf_cnpj'],
        'business_id' => $request['business_id'],
        'user_id' => $request['user_id'],
    ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($avaliation)
    {
        $avaliation->delete();
    }
}
