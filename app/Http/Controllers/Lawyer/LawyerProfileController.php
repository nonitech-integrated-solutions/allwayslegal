<?php

namespace App\Http\Controllers\Lawyer;

use App\Http\Requests\StoreLawyerProfileRequest;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

use App\Models\Area;
use App\Models\Lawyer;
use Auth;

class LawyerProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('lawyer.profile.index', [
            'lawyer' => Auth::user()->lawyer,
            'index' => true
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lawyer.profile.create', ['areas' => Area::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLawyerProfileRequest $request)
    {

     //   dd($request);
        $validatedData = $request->validated();

    //    // $lawyer = Lawyer::create($request->except(['_token']));

       $lawyer = Lawyer::create($validatedData);

        $request->session()->flash('success', 'you have successfully completed your profile');

        return redirect(route('lawyer.dashboard.index', [ 'lawyer' => Lawyer::find($id) ]));
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
        $id = Auth::user()->id;       
        return view('lawyer.profile.edit', [
            'areas' => Area::all(),
            'lawyer' => Lawyer::find($id)
        ]);
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
       $lawyer = Lawyer::findOrFail($id);

       $lawyer->update($request->except(['_token', 'areas']));

        $request->session()->flash('success', 
        'you have successfully updated your profile');

        return redirect('lawyer/profile');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
