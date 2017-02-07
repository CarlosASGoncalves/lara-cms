<!-- Name Form Input -->
<div class="form-group">
    {!! Form::label('name', 'Name') !!}
    {!! Form::text('name', null , ['class' => 'form-control']) !!}
</div>

<!-- Add Author Form Input -->
<div class="form-group">
    {!! Form::submit('Edit Categorie', ['class' => 'btn btn-primary form-control']) !!}
</div>