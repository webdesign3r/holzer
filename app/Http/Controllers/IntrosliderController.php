<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Introslider;

class IntrosliderController extends Controller
{
    public function index()
    {
    	$slides = Introslider::all();

    	return view('layouts.master', compact('slides'));
    }
}
