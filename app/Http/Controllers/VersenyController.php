<?php

namespace App\Http\Controllers;

use App\Models\Verseny;
use App\Http\Requests\StoreVersenyRequest;
use App\Http\Requests\UpdateVersenyRequest;

class VersenyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Verseny::with('eredmenyek')->get();
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
     * @param  \App\Http\Requests\StoreVersenyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVersenyRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Verseny  $verseny
     * @return \Illuminate\Http\Response
     */
    public function show(Verseny $verseny)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Verseny  $verseny
     * @return \Illuminate\Http\Response
     */
    public function edit(Verseny $verseny)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVersenyRequest  $request
     * @param  \App\Models\Verseny  $verseny
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVersenyRequest $request, Verseny $verseny)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Verseny  $verseny
     * @return \Illuminate\Http\Response
     */
    public function destroy(Verseny $verseny)
    {
        //
    }
}
