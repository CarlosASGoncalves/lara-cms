@extends('layouts.app')

@section('content')

    <div class="row">

        <div class="col-md-6 col-md-offset-3">

            <h1 class="text-center">Create New Categorie</h1>

            {!! Form::open(['url' => '/categories']) !!}

            @include('manage.categories.form', ['submitButtonText' => 'Create Categorie'])

            {!! Form::close() !!}

            @include('errors.list')

            <p><a href="{{ url('categories') }}">Return</a></p>


        </div>

    </div>

@stop