<?php

namespace App\Http\Controllers;

use App\Models\ServiceUser;
use App\Http\Requests\StoreServiceUserRequest;
use App\Http\Requests\UpdateServiceUserRequest;

class ServiceUserController extends Controller
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
     * @param  \App\Http\Requests\StoreServiceUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreServiceUserRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ServiceUser  $serviceUser
     * @return \Illuminate\Http\Response
     */
    public function show(ServiceUser $serviceUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServiceUser  $serviceUser
     * @return \Illuminate\Http\Response
     */
    public function edit(ServiceUser $serviceUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateServiceUserRequest  $request
     * @param  \App\Models\ServiceUser  $serviceUser
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateServiceUserRequest $request, ServiceUser $serviceUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServiceUser  $serviceUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServiceUser $serviceUser)
    {
        //
    }
}
