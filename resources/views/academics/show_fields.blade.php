<!-- Academic Year Field -->
<div class="form-group">
    {!! Form::label('academic_id', 'Academic ID:') !!}
    <p>{{ $academic->academic_id }}</p>
</div>
<div class="form-group">
    {!! Form::label('academic_year', 'Academic Year:') !!}
    <p>{{ $academic->academic_year }}</p>
</div>
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $academic->created_at }}</p>
</div>
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $academic->updated_at }}</p>
</div>

