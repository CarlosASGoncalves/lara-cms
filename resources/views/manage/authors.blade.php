@extends('layouts.app')

@section('content')

    <h1>Manage Authors</h1>
    <p><a href="{{ url('?add') }}">Add new author</a></p>
    <ul>
        @foreach ($authors as $author)
            <li>
                <form action="" method="post">
                    <div>
                        {{$author->name}}
                        <input type="hidden" name="id" value="{{$author->id}}">
                        <input type="submit" name="edit" value="Edit">
                        <input type="submit" name="delete" value="Delete">
                    </div>
                </form>
            </li>
        @endforeach
    </ul>
    <p><a href="{{ url('/home') }}">Return to JokesMS home</a></p>

@stop