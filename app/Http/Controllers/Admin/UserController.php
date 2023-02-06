<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;

use App\Models\User;
use App\Models\Role;
use App\Models\RoleUser;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   

    //     $role = Role::find('id');
    //    $users = User::paginate(10);

        if(Gate::denies('logged-in')) {
            return redirect('/');
        }     

        return view('admin.users.index', 
        ['users' => User::paginate(5), 
        'roles' => Role::all()]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
      return view('admin.users.create', ['roles' => Role::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {   
        $validatedData = $request->validated();

        $user = User::create($request->except(['_token', 'roles']));

        $user->roles()->sync($request->roles);

        $request->session()->flash('success', 'you have successfully created a user');

        return redirect(route('admin.users.index'));
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
        return view('admin.users.edit', [
            'roles' => Role::all(),
            'user' => User::find($id)

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
      
         $user = User::findOrFail($id);

        // $user = User::findOrFail($request->id);

        if(!$user){

            $request->session()->flash('error', 'you can not modify this user');

            return redirect(route('admin.users.index'));
        }

        $user->update($request->except(['_token', 'roles']));
        $user->roles()->sync($request->roles);

        $request->session()->flash('success', 'you have successfully modified the user');

        return redirect(route('admin.users.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        User::destroy($id);

        $request->session()->flash('success', 'You have successfully deleted the user');

       return redirect(route('admin.users.index'));
    }
}
