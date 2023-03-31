<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBoyfriendRequest;
use App\Models\Boyfriend;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class BoyfriendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('boyfriends.index', [
            'boyfriends' => Boyfriend::with('user')->latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBoyfriendRequest $request)
    {
        // $boyfriend = new Boyfriend($request->all());
        // $boyfriend->save();
        $request->user()->boyfriends()->create($request->all());
        
        return redirect(route('boyfriends.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
