<?php

namespace App\Http\Controllers;

use App\Models\qoutation_batch;
use Illuminate\Http\Request;

class QoutationBatchController extends Controller
{



    public function __construct()
    {
      $this->middleware('auth');
    }

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
     * @param  \App\Models\qoutation_batch  $qoutation_batch
     * @return \Illuminate\Http\Response
     */
    public function show(qoutation_batch $qoutation_batch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\qoutation_batch  $qoutation_batch
     * @return \Illuminate\Http\Response
     */
    public function edit(qoutation_batch $qoutation_batch)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\qoutation_batch  $qoutation_batch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, qoutation_batch $qoutation_batch)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\qoutation_batch  $qoutation_batch
     * @return \Illuminate\Http\Response
     */
    public function destroy(qoutation_batch $qoutation_batch)
    {
        //
    }
}
