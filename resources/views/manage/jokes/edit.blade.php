@extends('layouts.app')

@section('content')

    <div class="row">

        <div class="col-md-6 col-md-offset-3">

            <h1 class="text-center">Edit Joke</h1>

            {!! Form::model($joke, ['method' => 'PATCH', 'url' => 'jokes/' .$joke->id]) !!}

                @include('manage.jokes.form', ['submitButtonText' => 'Edit Joke'])

            {!! Form::close() !!}

            @include('errors.list')

            <p><a href="{{ url('jokes') }}">Return</a></p>


        </div>

    </div>
@stop