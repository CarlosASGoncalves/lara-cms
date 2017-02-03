@extends('layouts.app')

@section('content')

    <div class="row">

        <div class="col-md-6 col-md-offset-3">

            <h1>Manage Authors</h1>

            <p><a href="{{ url('authors/create') }}">Create new Author</a></p>

            <ul class="list-group">

                @foreach ($authors as $author)

                    <li class="list-group-item clearfix">

                        {{ Form::open(['method' => 'DELETE', 'url' => '/authors/' .$author->id]) }}

                        {{ Form::label('name', $author->name, ['class' => 'label label-default']) }}

                        <span class="pull-right">
                            <a href="{{ url('/authors/' .$author->id. '/edit') }}" class="btn">Edit</a>
                            {{ Form::submit('Delete', ['class' => "btn btn-danger"]) }}
                        </span>

                        {{ Form::close() }}

                    </li>

                @endforeach

            </ul>

            <p><a href="{{ url('/home') }}">Return</a></p>

        </div>

    </div>

@stop