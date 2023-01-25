<?php

namespace App\Http\Controllers;

use App\Models\Pilota;
use App\Http\Requests\StorePilotaRequest;
use App\Http\Requests\UpdatePilotaRequest;

class PilotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePilotaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePilotaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pilota  $pilota
     * @return \Illuminate\Http\Response
     */
    public function show(Pilota $pilota)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pilota  $pilota
     * @return \Illuminate\Http\Response
     */
    public function edit(Pilota $pilota)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePilotaRequest  $request
     * @param  \App\Models\Pilota  $pilota
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePilotaRequest $request, Pilota $pilota)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pilota  $pilota
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pilota $pilota)
    {
        //
    }
}
