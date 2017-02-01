<?php

namespace App\Http\Controllers;

use App\Authors;
use Illuminate\Http\Request;

use App\Http\Requests;

class AuthorsController extends Controller
{
    public function index(){

        $authors = Authors::all();

        return view('manage/authors', ['authors' => $authors]);

    }

    public function deleteAuthor(){

//        dd(Request::capture());

    }
}
