<?php

namespace App\Http\Controllers;

use App\Models\Eredmeny;
use App\Http\Requests\StoreEredmenyRequest;
use App\Http\Requests\UpdateEredmenyRequest;

class EredmenyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eredmeny = Eredmeny::select('futott', 'pilotaId', 'versenyId');
        $pilotaval = $eredmeny->with('pilota:id,nev,rovidnev');
        $versennyel = $eredmeny->with('verseny:id,hossz,kor');
        return $versennyel->get();
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
     * @param  \App\Http\Requests\StoreEredmenyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEredmenyRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Eredmeny  $eredmeny
     * @return \Illuminate\Http\Response
     */
    public function show(Eredmeny $eredmeny)
    {
        return $eredmeny;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Eredmeny  $eredmeny
     * @return \Illuminate\Http\Response
     */
    public function edit(Eredmeny $eredmeny)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEredmenyRequest  $request
     * @param  \App\Models\Eredmeny  $eredmeny
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEredmenyRequest $request, Eredmeny $eredmeny)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Eredmeny  $eredmeny
     * @return \Illuminate\Http\Response
     */
    public function destroy(Eredmeny $eredmeny)
    {
        //
    }
}
