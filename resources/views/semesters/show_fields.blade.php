<!-- Semester Name Field -->
<div class="form-group">
    {!! Form::label('semester_name', 'Semester Name:') !!}
    <p>{{ $semester->semester_name }}</p>
</div>

<!-- Semester Code Field -->
<div class="form-group">
    {!! Form::label('semester_code', 'Semester Code:') !!}
    <p>{{ $semester->semester_code }}</p>
</div>

<!-- Semester Duration Field -->
<div class="form-group">
    {!! Form::label('semester_duration', 'Semester Duration:') !!}
    <p>{{ $semester->semester_duration }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $semester->description }}</p>
</div>

