@extends('layouts.app')

@section('content')

    <div class="row">

        <div class="col-md-6 col-md-offset-3">

            <h1 class="text-center">Create New Joke</h1>

            {!! Form::open(['url' => '/jokes']) !!}

            @include('manage.jokes.form', ['submitButtonText' => 'Create Joke', 'categories' => $categories, 'authors' => $authors])

            {!! Form::close() !!}

            @include('errors.list')

            <p><a href="{{ url('jokes') }}">Return</a></p>


        </div>

    </div>

@stop