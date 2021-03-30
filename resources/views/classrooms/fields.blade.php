{{-- <!-- Classroom Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('classroom_name', 'Classroom Name:') !!}
    {!! Form::text('classroom_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Classroom Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('classroom_code', 'Classroom Code:') !!}
    {!! Form::number('classroom_code', null, ['class' => 'form-control']) !!}
</div>

<!-- Classroom Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('classroom_description', 'Classroom Description:') !!}
    {!! Form::textarea('classroom_description', null, ['class' => 'form-control']) !!}
</div>

<!-- Classroom Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('classroom_status', 'Classroom Status:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('classroom_status', 0) !!}
        {!! Form::checkbox('classroom_status', '1', null) !!}
    </label>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('classrooms.index') }}" class="btn btn-default">Cancel</a>
</div> --}}

<!-- Modal-->
<div class="modal fade left" id="classroom-add-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-ms modal-right modal-success" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-id-badge" aria-hidden="true">Add New Class Room</i></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
<!-- Classroom Name Field -->
<div class="input-group col-md-12">
    <span class="input-group-addon">ClassRoom Name</span>
    {!! Form::text('classroom_name', null, ['class' => 'form-control']) !!}
</div>
<br>
<!-- Classroom Code Field -->
<div class="input-group col-md-12">
    <span class="input-group-addon">ClassRoom Code</span>
    {!! Form::number('classroom_code', null, ['class' => 'form-control']) !!}
</div>
<br>
<!-- Classroom Description Field -->
<div class="input-group col-sm-12 col-lg-12">
    <span class="input-group-addon">ClassRoom Description</span>
    {!! Form::textarea('classroom_description', null, ['class' => 'form-control', 'rows' => 2, 'cols' => 3]) !!}
</div>
<br>
<!-- Classroom Status Field -->
<div class="input-group col-md-12">
    <span class="input-group-addon">Status</span>
        {!! Form::hidden('classroom_status', 0) !!}
        {!! Form::checkbox('classroom_status', '1', null) !!}
</div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
    {!! Form::submit('Create Classroom', ['class' => 'btn btn-success']) !!}
</div>
</div>
</div>
</div>
</div>
