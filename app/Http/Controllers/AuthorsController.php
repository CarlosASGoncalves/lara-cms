<?php

namespace App\Http\Controllers;

use App\Authors;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;


class AuthorsController extends Controller
{
    public function index(){

       $authors = Authors::latest('created_at')->get();

       return view('manage.authors.index', ['authors' => $authors]);

    }

    public function add(){

        return view('manage.authors.form');

    }

    public function store(){

        Authors::create(Request::all());

        return redirect('authors');

    }

    public function edit(){

        dd('ups3');//do something

        return view('manage.authors.index');

    }

    public function delete(){

        dd('ups4');//do something

        return view('manage.authors.index');

    }

}
