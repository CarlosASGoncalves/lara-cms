@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Joke Management System</div>

                <div class="panel-body">
                    <ul>
                        <li><a href="jokes/">Manage Jokes</a></li>
                        <li><a href="authors/">Manage Authors</a></li>
                        <li><a href="categories/">Manage Joke Categories</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
