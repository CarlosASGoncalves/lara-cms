<div class='form-group'>
    {!! Form::label('joketext', 'Body:') !!}
    {!! Form::textarea('joketext', null, ['class' => 'form-control']) !!}
</div>

<div class='form-group'>
    {!! Form::label('jokedate', 'Publish On:') !!}
    {!! Form::input('date', 'jokedate', date('Y-m-d'), ['class' => 'form-control']) !!}
</div>

{!! Form::label('text', 'Author ') !!}

@foreach ($categories as $category)
<div class='form-group'>
    {{ Form::checkbox($category->name, 1, null, ['class' => 'field']) }}
</div>
@endforeach

<div class='form-group'>
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>
