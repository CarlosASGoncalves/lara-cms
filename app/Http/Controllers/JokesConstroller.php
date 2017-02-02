<?php

namespace App\Http\Controllers;

use App\Jokes;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;

class JokesConstroller extends Controller
{
    public function index(){

        $jokes = Jokes::latest('jokedate')->published()->get();

//        for admin panel to managed unpublished jokes
//        $jokes = Jokes::latest('jokedate')->unpublished()->get();

        return view('manage.jokes.index', ['jokes' => $jokes]);

    }

    public function show($id){

        $joke = Jokes::fondOrFail($id);

        return view('manage.jokes.show', compact('joke'));

    }

    public function add(){

        return view('jokes.create');

    }

    public function store(){

        $input = Request::all();

        $input['jokedate'] = Carbon::now();

        Jokes::create($input);

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
