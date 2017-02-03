@extends('layouts.app')

@section('content')

    <div class="row">

        <div class="col-md-6 col-md-offset-3">

            <h1 class="text-center">Edit Author {{ $author->name }}</h1>

            {!! Form::model($author, ['method' => 'PATCH', 'url' => 'authors/' .$author->id]) !!}

                @include('manage.authors.form', ['submitButtonText' => 'Edit Author'])

            {!! Form::close() !!}

            @include('errors.list')

            <p><a href="{{ url('authors') }}">Return</a></p>


        </div>

    </div>
@stop