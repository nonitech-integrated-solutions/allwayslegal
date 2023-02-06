<?php

namespace App\Http\Controllers\Lawyer;

use App\Http\Requests\StoreScheduleRequest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Gate;

use Illuminate\Support\Str;

use App\Models\Schedule;



class LawyerScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schedules = Schedule::latest()->where('lawyer_id', auth()->user()->id)->paginate(5);
 
        return view('lawyer.schedules.index', compact('schedules'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        dd('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreScheduleRequest $request)
    {
        $validatedData = $request->validated();

        $schedule = Schedule::create($request->except(['lawyers']));

        $request->session()->flash('success', 'you have successfully created a service');

        return redirect(route('lawyer.schedules.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        Schedule::destroy($id);

        $request->session()->flash('success', 'you have successfully deleted the schedule');

       return redirect(route('lawyer.schedules.index'));
    }
}
