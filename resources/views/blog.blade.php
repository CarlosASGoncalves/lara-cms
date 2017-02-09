@extends('layouts.app')

@section('content')

<div class="container">

    <div class="blog-header">
        <h1 class="blog-title">The Jokes Blog</h1>
        <p class="lead blog-description">The official template of creating Jokes Blog with Bootstrap.</p>
    </div>

    <div class="row">

        <div class="col-sm-8 blog-main">

            @foreach($jokes as $joke)

            <div class="blog-post">

                <h2 class="blog-post-title">Some Title</h2> <!--todo: add title -->

                <hr>
                <blockquote>
                    <p>{{ $joke->joketext }}</p>
                </blockquote>

                <p class="blog-post-meta">{{date('d, F Y', strTotime($joke->jokedate))}} by <a href="#">{{$joke->author->name}}.</a></p>
                <p>Category: {{$joke->categories()->getRelated()->first()->name}}</p>
                <br>

            </div><!-- /.blog-post -->

            @endforeach

            <nav>
                <ul class="pager">
                    <li><a href="{{ $jokes->previousPageUrl() }}">Previous</a></li>
                    <li><a href="{{ $jokes->nextPageUrl() }}">Next</a></li>
                </ul>
            </nav>

        </div><!-- /.blog-main -->

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
            <br>
            <div class="sidebar-module sidebar-module-inset">
                <h4>About</h4>
                <p>This is the JokeMC, the content managemet system for Jokes. If you want to share your jokes just register, create a new Joke and post them. You are already registered? Than login and manage your Jokes</p>
            </div>

            <br>

            <div class="sidebar-module">
                {{--@include('search')--}}
            </div>

            {{--<div class="sidebar-module">--}}
                {{--<h4>Archives</h4>--}}
                {{--<ol class="list-unstyled">--}}
                    {{--<li><a href="#">March 2014</a></li>--}}
                    {{--<li><a href="#">February 2014</a></li>--}}
                    {{--<li><a href="#">January 2014</a></li>--}}
                    {{--<li><a href="#">December 2013</a></li>--}}
                    {{--<li><a href="#">November 2013</a></li>--}}
                    {{--<li><a href="#">October 2013</a></li>--}}
                    {{--<li><a href="#">September 2013</a></li>--}}
                    {{--<li><a href="#">August 2013</a></li>--}}
                    {{--<li><a href="#">July 2013</a></li>--}}
                    {{--<li><a href="#">June 2013</a></li>--}}
                    {{--<li><a href="#">May 2013</a></li>--}}
                    {{--<li><a href="#">April 2013</a></li>--}}
                {{--</ol>--}}
            {{--</div>--}}
            {{--<div class="sidebar-module">--}}
                {{--<h4>Elsewhere</h4>--}}
                {{--<ol class="list-unstyled">--}}
                    {{--<li><a href="#">GitHub</a></li>--}}
                    {{--<li><a href="#">Twitter</a></li>--}}
                    {{--<li><a href="#">Facebook</a></li>--}}
                {{--</ol>--}}
            {{--</div>--}}
        </div><!-- /.blog-sidebar -->

    </div><!-- /.row -->

</div><!-- /.container -->

@endsection


