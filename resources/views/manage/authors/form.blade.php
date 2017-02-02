@extends('layouts.app')

@section('content')

    <div class="row">

        <div class="col-md-6 col-md-offset-3">

            <h1>New Author</h1>

            {!! Form::open(['url' => '/authors']) !!}

                <!-- Name Form Input -->
                <div class="form-group">
                    {!! Form::label('name', 'Name') !!}
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                </div>

                <!-- Email Form Input -->
                <div class="form-group">
                    {!! Form::label('email', 'E-Mail') !!}
                    {!! Form::text('email', null, ['class' => 'form-control']) !!}
                </div>

                <!-- Add Author Form Input -->
                <div class="form-group">
                    {!! Form::submit('Add Author', ['class' => 'btn btn-primary form-control']) !!}
                </div>

            {!! Form::close() !!}

            <p><a href="{{ url('authors') }}">Return to Manage Authors</a></p>


        </div>

    </div>

@stop