<div class='form-group'>
    {!! Form::label('joketext', 'Body:') !!}
    {!! Form::textarea('joketext', null, ['class' => 'form-control']) !!}
</div>

<div class='form-group'>
    {!! Form::label('jokedate', 'Publish On:') !!}
    {!! Form::input('date', 'jokedate', date('Y-m-d'), ['class' => 'form-control']) !!}
</div>

<hr>

<div class='form-group'>
    {!! Form::select('author_id', $authors->lists('name', 'id')) !!}
</div>

<hr>

@foreach ($categories as $category)
    <div class='form-group'>
        {!! Form::checkbox('category_id', $category->id)!!}
        {!! Form::label('name', $category->name) !!}
    </div>
@endforeach

<hr>

<div class='form-group'>
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>
