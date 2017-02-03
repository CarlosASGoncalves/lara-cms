@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="jumbotron text-center">

                    <h1>Welcome to JokesMS WebApp</h1>

                    <a class='btn btn-lg btn-success' href="{{ url('/auth/register') }}">
                        Register now!
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

