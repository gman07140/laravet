<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Client;
use App\Number;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateNumberRequest;
use Illuminate\Http\Response;
use Illuminate\Support\Collection;

class NumbersController extends Controller
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
        return view('clients.numbers.create', ['client' => $client->id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateNumberRequest $request)
    {
        Number::create($request->all());
        $oid = $request->clientid;
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
    public function edit($id, $nid)
    {
        $number = Number::findOrFail($nid);
        $client = Client::findOrFail($id);
        return view('clients.numbers.edit', compact('number', 'client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, $nid, CreateNumberRequest $request)
    {
        $number = Number::findOrFail($nid);
        $number->update($request->all());
        $oid = $request->clientid;
        $url = 'clients/' . $oid;
        return redirect($url);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $number = Number::findOrFail($id);
        $number->delete();
        return redirect('clients');
    }
}
