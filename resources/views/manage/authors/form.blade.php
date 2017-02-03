<!-- Name Form Input -->
<div class="form-group">
    {!! Form::label('name', 'Name') !!}
    {!! Form::text('name', null , ['class' => 'form-control']) !!}
</div>

<!-- Email Form Input -->
<div class="form-group">
    {!! Form::label('email', 'E-Mail') !!}
    {!! Form::text('email', null , ['class' => 'form-control']) !!}
</div>

<!-- Add Author Form Input -->
<div class="form-group">
    {!! Form::submit('Edit Author', ['class' => 'btn btn-primary form-control']) !!}
</div>
