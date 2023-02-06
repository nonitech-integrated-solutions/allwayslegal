<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Service;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

use Illuminate\Support\Str;


class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.services.index', ['services' => Service::paginate(6)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.create', 
        
        ['services' => Service::paginate(5)]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreServiceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreServiceRequest $request)
    {
        $validatedData = $request->validated();

        $service = Service::create($request->except(['lawyers']));

        $request->session()->flash('success', 'you have successfully created a service');

        return redirect(route('admin.services.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.services.edit', [
            
            'service' => Service::find($id)

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateServiceRequest  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateServiceRequest $request, $id)
    {  
        $service = Service::findOrFail($id);

        if(!$service){

            $request->session()->flash('error', 'you can not modify this service');

            return redirect(route('admin.services.index'));
        }

        $validatedData = $request->validated();

        $service->update($request->except(['lawyers']));

        $request->session()->flash('success', 'You have successfully modified the service');

        return redirect(route('admin.services.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        Service::destroy($id);

        $request->session()->flash('success', 'You have successfully deleted the service');

       return redirect(route('admin.services.index'));
    }
}
