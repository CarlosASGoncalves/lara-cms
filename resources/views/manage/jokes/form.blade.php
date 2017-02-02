@extends('layouts.app')

@section('content')

    <div class="row">

        <div class="col-md-6 col-md-offset-3">

            <h1>New Author</h1>

            {!! Form::open(['url' => '/authors']) !!}

            <!-- Title Form Input -->
                <div class="form-group">
                    {!! Form::label('title', 'Title') !!}
                    {!! Form::text('title', null, ['class' => 'form-control']) !!}
                </div>

                <!-- Body Form Input -->
                <div class="form-group">
                    {!! Form::label('body', 'E-Mail') !!}
                    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
                </div>

                <!-- JokeDate Form Input -->
                <div class="form-group">
                    {!! Form::label('jokedate', 'Published On:') !!}
                    {!! Form::date('jokedate', date('Y-m-d'), ['class' => 'form-control']) !!}
                </div>

                <!-- Add Joke Form Input -->
                <div class="form-group">
                    {!! Form::submit('Add Joke', ['class' => 'btn btn-primary form-control']) !!}
                </div>

            {!! Form::close() !!}

            <p><a href="{{ url('jokes') }}">Return to Manage Authors</a></p>


        </div>

    </div>

@stop