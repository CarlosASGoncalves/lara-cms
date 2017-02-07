@extends('layouts.app')

@section('content')

    <div class="row">

        <div class="col-md-6 col-md-offset-3">

            <h1 class="text-center">Manage Categories</h1>

            <p><a href="{{ url('categories/create') }}">Create new Categorie</a></p>

            <ul class="list-group">

                @foreach ($categories as $categorie)

                    <li class="list-group-item clearfix">

                        {{ Form::open(['method' => 'DELETE', 'url' => '/categories/' .$categorie->id]) }}

                        {{ Form::label('name', $categorie->name, ['class' => 'label label-default']) }}

                        <span class="pull-right">
                            <a href="{{ url('/categories/' .$categorie->id. '/edit') }}" class="btn">Edit</a>
                            {{ Form::submit('Delete', ['class' => "btn btn-danger"]) }}
                        </span>

                        {{ Form::close() }}

                    </li>

                @endforeach

            </ul>

            <p><a href="{{ url('home') }}">Return</a></p>

        </div>

    </div>

@stop