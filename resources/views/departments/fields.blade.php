

<!-- Faculty Id Field -->
<div class="form-group col-sm-6">
    <select name="faculty_id" id="faculty_id" class="form-control">
        <option value="0" selected="true" disabled="true">Choose Faculty</option>
        @foreach ($faculties as $key => $faculty)
    <option value="{{$faculty->faculty_id}}">{{$faculty->faculty_name}}</option>
        @endforeach
    </select>

</div>

<!-- Department Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('department_name', 'Department Name:') !!}
    {!! Form::text('department_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Department Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('department_code', 'Department Code:') !!}
    {!! Form::text('department_code', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Department Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('department_description', 'Department Description:') !!}
    {!! Form::text('department_description', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Department Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('department_status', 'Department Status:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('department_status', 0) !!}
        {!! Form::checkbox('department_status', '1', null) !!}
    </label>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('departments.index') }}" class="btn btn-default">Cancel</a>
</div>

<!-- Modal -->
<div class="modal fade" id="departments-course-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Add New Course</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

<div class="form-group col-sm-6">
    {!! Form::label('department_name', 'Department Name:') !!}
    {!! Form::text('department_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('department_code', 'Department Code:') !!}
    {!! Form::text('department_code', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Faculty Id Field -->
<div class="form-group col-sm-6">
    <select name="faculty_id" id="faculty_id" class="form-control">
        <option value="0" selected="true" disabled="true">Choose Faculty</option>
        @foreach ($faculties as $key => $faculty)
    <option value="{{$faculty->faculty_id}}">{{$faculty->faculty_name}}</option>
        @endforeach
    </select>

</div>
<!-- Department Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('department_description', 'Department Description:') !!}
    {!! Form::text('department_description', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-danger" data-dismiss="modal">Class</button>
    {!! Form::submit('Register Teacher', ['class' => 'btn btn-success']) !!}
</div>
</form>
</div>
</div>
</div>
