<?php

namespace App\Http\Controllers;

use App\Authors;
use App\Http\Requests\CreateAuthorRequest;
use App\Http\Controllers\Controller;



class AuthorsController extends Controller
{
    public function index(){

       $authors = Authors::all();

       return view('manage.authors.index', ['authors' => $authors]);

    }

    public function create(){

        return view('manage.authors.create');

    }

    public function store(CreateAuthorRequest $request){

        Authors::create($request->all());

        return redirect('authors');

    }

    public function edit($id){

        $author = Authors::findOrFail($id);

        return view('manage.authors.edit', compact('author'));

    }

    public function update($id, CreateAuthorRequest $request)
    {
        $authors = Authors::findOrFail($id);

        $authors->update($request->all());

        return redirect('authors');
    }

    public function destroy($id){

        Authors::findOrFail($id)->delete();

        return redirect('authors');

    }

    public function show(){}


}
