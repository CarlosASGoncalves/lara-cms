@extends('layouts.app')

@section('content')

    <div class="row">

        <div class="col-md-6 col-md-offset-3">

            <h1>Edit Author {{ $author->name }}</h1>

            {!! Form::model($author, ['method' => 'PATCH', 'url' => 'authors/' .$author->id]) !!}

                @include('manage.authors.form', ['submitButtonText' => 'Edit Author'])

            {!! Form::close() !!}

            @include('errors.list')

            <p><a href="{{ url('authors') }}">Return to Manage Authors</a></p>


        </div>

    </div>
@stop