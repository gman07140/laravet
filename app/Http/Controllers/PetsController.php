<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Client;
use App\Pet;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreatePetRequest;
use Illuminate\Http\Response;
use Illuminate\Support\Collection;

class PetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $client = Client::findOrFail($id);
        return $client->nome;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $client = Client::findOrFail($id);
        return view('clients.pets.create', ['client' => $client->id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id, CreatePetRequest $request)
    {
        Pet::create($request->all());
        $oid = $request->owner_id;
        $url = 'clients/' . $oid;
        return redirect($url);
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
    public function edit($id, $cid)
    {
        $pet = Pet::findOrFail($cid);
        $client = Client::findOrFail($id);
        return view('clients.pets.edit', compact('pet', 'client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, $cid, CreatePetRequest $request)
    {
        $pet = Pet::findOrFail($cid);
        $pet->update($request->all());
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
    }
}
