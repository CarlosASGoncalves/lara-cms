@extends('layouts.app')

@section('content')

    <div class="row">

        <div class="col-md-6 col-md-offset-3">

            <h1 class="text-center">Edit Categorie {{ $categorie->name }}</h1>

            {!! Form::model($categorie, ['method' => 'PATCH', 'url' => 'categories/' .$categorie->id]) !!}

                @include('manage.categories.form', ['submitButtonText' => 'Edit Categorie'])

            {!! Form::close() !!}

            @include('errors.list')

            <p><a href="{{ url('categories') }}">Return</a></p>


        </div>

    </div>
@stop