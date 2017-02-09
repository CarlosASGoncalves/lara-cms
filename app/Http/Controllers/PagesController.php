<?php

namespace App\Http\Controllers;

use App\Authors;
use App\Jokes;
use App\Categories;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{

    public function index()
    {

        $jokes = Jokes::simplePaginate(3);

        return view('blog', ['jokes' => $jokes]);

    }

    public function search()
    {

        dd('ups');
//        return view('search');

    }

}
