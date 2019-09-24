<?php

namespace App\Http\Controllers;

use App\Models\Relatorios;
use Illuminate\Http\Request;

class RelatoriosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('reports.index');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Relatorios  $relatorios
     * @return \Illuminate\Http\Response
     */
    public function show(Relatorios $relatorios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Relatorios  $relatorios
     * @return \Illuminate\Http\Response
     */
    public function edit(Relatorios $relatorios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Relatorios  $relatorios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Relatorios $relatorios)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Relatorios  $relatorios
     * @return \Illuminate\Http\Response
     */
    public function destroy(Relatorios $relatorios)
    {
        //
    }
}
