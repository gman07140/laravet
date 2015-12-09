<?php

namespace App\Http\Controllers;

use App\Client;
use App\Bairro;
use App\Pet;
use App\Number;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateClientRequest;
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Collection;

class ClientsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => 'show']);  // $this->middleware('auth'); would attach to every route
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = \Auth::user()->id;   // get the id of the logged in user
        $clients = Client::where('user_id', $user)->get();   // only get clients belonging to logged user
        return view('clients.index', compact('clients'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = Client::findOrFail($id);
        $pid = $client->id;
        $bairro = Bairro::where('id', $client->bairro)->get();
        $pets = Pet::where('owner_id', $pid)->get();
        $numbers = Number::where('clientid', $pid)->get();
        return view('clients.show', compact('client', 'pets', 'bairro', 'numbers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateClientRequest $request)
    {
        $client = \Auth::user()->clients()->create($request->all());
        return redirect('clients');
    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bairros = Bairro::lists('bairro', 'id');
        return view('clients.create', compact('bairros'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bairros = Bairro::lists('bairro', 'id');
        $client = Client::findOrFail($id);
        return view('clients.edit', compact('client', 'bairros'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, CreateClientRequest $request)
    {
        $client = Client::findOrFail($id);
        $client->update($request->all());
        $oid = $client->id;
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
        $client = Client::findOrFail($id);
        $client->delete();
        return redirect('clients');
    }
}
