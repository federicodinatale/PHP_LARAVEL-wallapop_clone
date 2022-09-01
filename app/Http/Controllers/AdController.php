<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Livewire\Auth;

class AdController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }


    public function create() {
        return view('ads.create');
    }
}
