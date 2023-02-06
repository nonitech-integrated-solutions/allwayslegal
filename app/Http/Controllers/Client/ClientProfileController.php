<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreClientProfileRequest;

use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

use Auth;
use App\Models\User;
use App\Models\Client;

class ClientProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   

        return view('client.profile.index', [ 
            'client' => Auth::user()->client, 
            'user' => User::all() 
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
       return view('client.profile.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClientProfileRequest $request)
    {

        $validatedData = $request->validated();

    //    // $client = Client::create($request->except(['_token']));

       $client = Client::create($validatedData);

        $request->session()->flash('success', 'you have successfully completed your profile');

        return redirect(route('client.dashboard.index', [ 'client' => Client::find($id) ]));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('client.profile.index', [ 'client' => Client::find($id) ]);
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
       return view('client.profile.edit', [ 
        'client' => Client::find($id) ]);
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
        $client = Client::findOrFail($id);

        $client->update($request->except(['_token']));

        $request->session()->flash('success', 'you have successfully updated your profile');

        return redirect('client/profile');
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
