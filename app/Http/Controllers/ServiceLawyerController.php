<?php

namespace App\Http\Controllers;

use App\Models\ServiceLawyer;
use App\Http\Requests\StoreServiceLawyerRequest;
use App\Http\Requests\UpdateServiceLawyerRequest;

class ServiceLawyerController extends Controller
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
     * @param  \App\Http\Requests\StoreServiceLawyerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreServiceLawyerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ServiceLawyer  $serviceLawyer
     * @return \Illuminate\Http\Response
     */
    public function show(ServiceLawyer $serviceLawyer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServiceLawyer  $serviceLawyer
     * @return \Illuminate\Http\Response
     */
    public function edit(ServiceLawyer $serviceLawyer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateServiceLawyerRequest  $request
     * @param  \App\Models\ServiceLawyer  $serviceLawyer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateServiceLawyerRequest $request, ServiceLawyer $serviceLawyer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServiceLawyer  $serviceLawyer
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServiceLawyer $serviceLawyer)
    {
        //
    }
}
