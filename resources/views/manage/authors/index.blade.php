@extends('layouts.app')

@section('content')

    <div class="row">

        <div class="col-md-6 col-md-offset-3">

            <h1>Manage Authors</h1>

            <p><a href="{{ url('authors/add') }}">Add new author</a></p>

            <ul class="list-group">

                @foreach ($authors as $author)

                    <li class="list-group-item">

                        {{ Form::open() }}

                        {{ Form::label('name', $author->name, ['class' => 'label label-default']) }}

                        {{ Form::hidden('id', $author->id) }}

                        <span class="pull-right">
                            {{ Form::submit('Edit', ['class' => 'btn']) }}
                            {{ Form::submit('Delete', ['class' => 'btn']) }}
                        </span>
                        {{ Form::close() }}

                    </li>

                @endforeach

            </ul>

            <p><a href="{{ url('/home') }}">Return to JokesMS home</a></p>

        </div>

    </div>

    {{--{{$author->name}}--}}
    {{--<input type="text" class="form-control">--}}
    {{--<span class="input-group-btn">--}}
    {{--<button class="btn btn-default" type="button">Go!</button>--}}
    {{--</span>--}}
    {{--</div>--}}


@stop