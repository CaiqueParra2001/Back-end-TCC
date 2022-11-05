<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Address::all();
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
        $address= Address::create([
            'name' => $request['name'],
            'cpf_cnpj' => $request['cpf_cnpj'],
            'logo' => $request['logo'],
            'adress' => $request['adress'],
            'phone' => $request['phone'],
            'adress_id' => $request['adress_id'],
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
    public function show($address)
    {
        return $address;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $address)
    {
        $address= Address::update([
            'name' => $request['name'],
            'cpf_cnpj' => $request['cpf_cnpj'],
            'logo' => $request['logo'],
            'adress' => $request['adress'],
            'phone' => $request['phone'],
            'adress_id' => $request['adress_id'],
            'user_id' => $request['user_id'],
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Address $address)
    {
        $address->delete();
    }
}
