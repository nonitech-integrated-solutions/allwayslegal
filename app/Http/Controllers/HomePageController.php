<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Gate;

class HomePageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if(Gate::allows('is-admin')) {
           return redirect()->to('/admin');
        } 
        elseif(Gate::allows('is-lawyer')){
            return redirect()->to('/lawyer');
        }elseif(Gate::allows('is-client')){
            return redirect()->to('/client');
        }else{
            return redirect()->to('/');
        }      
       
    }
}
