<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartyController extends Controller
{
    public function index(){
        return view('party.index');
    }
    public function add(){
        return view('party.add');
    }
}
