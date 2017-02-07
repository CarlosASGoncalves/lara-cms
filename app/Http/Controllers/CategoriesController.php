<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Http\Requests\CreateCategoriesRequest;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

    $categories = Categories::all();

    return view('manage.categories.index', ['categories' => $categories]);

    }

    public function create(){

        return view('manage.categories.create');

    }

    public function store(CreateCategoriesRequest $request){

        Categories::create($request->all());

        return redirect('categories');

    }

    public function edit($id){

        $categorie = Categories::findOrFail($id);

        return view('manage.categories.edit', compact('categorie'));

    }

    public function update($id, CreateCategoriesRequest $request)
    {
        $categories = Categories::findOrFail($id);

        $categories->update($request->all());

        return redirect('categories');
    }

    public function destroy($id){

        Categories::findOrFail($id)->delete();

        return redirect('categories');

    }

    public function show(){}
}
