<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBoyfriendRequest;
use App\Http\Requests\UpdateBoyfriendRequest;
use App\Http\Resources\BoyfriendCollection;
use App\Models\Boyfriend;

class BoyfriendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Serve per paginare le risorse in modo da non mandare i record in un colpo solo
        $boyfriendList = Boyfriend::all();

        return new BoyfriendCollection($boyfriendList);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Ritorna html e javascript necessario per la creazione del record
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBoyfriendRequest $request)
    {
        //Riceve i dati in ingresso e si preoccupa previa validazione di salvarli poi nel db
    }

    /**
     * Display the specified resource.
     */
    public function show(Boyfriend $boyfriend)
    {
        //Andiamo a vedere il dettaglio del record 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Boyfriend $boyfriend)
    {
        //Simile al create solo che modifica
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBoyfriendRequest $request, Boyfriend $boyfriend)
    {
        //Simile al create solo che aggiorna
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Boyfriend $boyfriend)
    {
        //ID che elimina record
    }
}
