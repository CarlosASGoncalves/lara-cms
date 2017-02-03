@extends('layouts.app')

@section('content')

    <div class="row">

        <div class="col-md-6 col-md-offset-3">

            <h1 class="text-center">Create New Author</h1>

            {!! Form::open(['url' => '/authors']) !!}

                @include('manage.authors.form', ['submitButtonText' => 'Create Author'])

            {!! Form::close() !!}

            @include('errors.list')

            <p><a href="{{ url('authors') }}">Return</a></p>


        </div>

    </div>

@stop