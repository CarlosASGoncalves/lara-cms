<?php

namespace App\Http\Controllers;

use App\Authors;
use App\Jokes;
use App\Categories;
use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{

    public function index()
    {



        return view('welcome');

    }

    public function search()
    {

        dd('ups');
//        return view('search');

    }

}
