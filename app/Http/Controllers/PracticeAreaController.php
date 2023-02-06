<?php

namespace App\Http\Controllers;

use App\Models\PracticeArea;
use App\Http\Requests\StorePracticeAreaRequest;
use App\Http\Requests\UpdatePracticeAreaRequest;

class PracticeAreaController extends Controller
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
     * @param  \App\Http\Requests\StorePracticeAreaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePracticeAreaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PracticeArea  $practiceArea
     * @return \Illuminate\Http\Response
     */
    public function show(PracticeArea $practiceArea)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PracticeArea  $practiceArea
     * @return \Illuminate\Http\Response
     */
    public function edit(PracticeArea $practiceArea)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePracticeAreaRequest  $request
     * @param  \App\Models\PracticeArea  $practiceArea
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePracticeAreaRequest $request, PracticeArea $practiceArea)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PracticeArea  $practiceArea
     * @return \Illuminate\Http\Response
     */
    public function destroy(PracticeArea $practiceArea)
    {
        //
    }
}
