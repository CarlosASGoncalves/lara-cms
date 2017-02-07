@extends('layouts.app')

@section('content')

<div class="row">

    <div class="col-md-6 col-md-offset-3">

        <h1 class="text-center">Manage Jokes</h1>

            <p><a href="{{ url('jokes/create') }}">Create new Joke</a></p>

                <div class="list-group">

                    @foreach ($jokes as $joke)

                        <li class="list-group-item clearfix">

                            {{ Form::open(['method' => 'DELETE', 'url' => '/jokes/' .$joke->id]) }}

                                {{ Form::textarea('name', $joke->joketext, [
                                    'class' => 'label label-default',
                                    'rows' => '3',
                                    'cols' => '80',
                                ]) }}

                                <br>

                                {!! Form::label('name', 'Published: By ' .$joke->author->name) !!} <!-- todo: rewrite all models in Singular -->

                                {!! Form::label('jokedate', ' | On ' .$joke->jokedate) !!}

                                @if ($joke->categories->count() > 0)

                                {!! Form::label('name', ' | Categorie:' .$joke->categories()->first()->name) !!}

                                @endif

                                <span class="pull-right">

                                    <a href="{{ url('/jokes/' .$joke->id. '/edit') }}" class="btn">Edit</a>
                                    {{ Form::submit('Delete', ['class' => "btn btn-danger"]) }}

                                </span>

                            {{ Form::close() }}

                        </li>

                    @endforeach

                </div>

        <p><a href="{{ url('/home') }}">Return</a></p>

    </div>

</div>

@stop