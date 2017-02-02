<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AboutController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show project description.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.about');
    }

}
