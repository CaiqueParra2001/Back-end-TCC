<?php

namespace App\Http\Controllers;

use App\Models\Business;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BusinessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Business::all();
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
            $business= Business::create([
                'name' => $request['name'],
                'cpf_cnpj' => $request['cpf_cnpj'],
                'logo' => '',
                'phone' => $request['phone'],
                'address' => "",
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
    public function show($business)
    {
        return $business;
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
        $business= Business::update([
            'name' => $request['name'],
            'logo' => $request['logo'],
            'phone' => $request['phone'],
            'address' => $request['address'],
            'user_id' => $request['user_id'],
        ]);
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($business)
    {
        $business->delete();
    }
}
