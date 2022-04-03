<?php

namespace App\Http\Controllers;

use App\Models\Jenjang;
use App\Http\Requests\StoreJenjangRequest;
use App\Http\Requests\UpdateJenjangRequest;

class JenjangController extends Controller
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
     * @param  \App\Http\Requests\StoreJenjangRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJenjangRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jenjang  $jenjang
     * @return \Illuminate\Http\Response
     */
    public function show(Jenjang $jenjang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jenjang  $jenjang
     * @return \Illuminate\Http\Response
     */
    public function edit(Jenjang $jenjang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateJenjangRequest  $request
     * @param  \App\Models\Jenjang  $jenjang
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateJenjangRequest $request, Jenjang $jenjang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jenjang  $jenjang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jenjang $jenjang)
    {
        //
    }
}
