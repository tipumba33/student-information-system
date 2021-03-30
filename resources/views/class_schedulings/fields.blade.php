<!-- Modal -->
<div class="modal fade" id="classschedule-show" tabindex="-1" role="dialog"
aria-labelledby="myModelLaber" aria-hidden="true">
    <div class="modal-dialog"  style="width: 90%">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
            &times;</button>
            <h4 class="modal-title">Class Scheduled</h4>
        </div>
        <div class="panel-body" style="border-bottom: 1px solid #ccc;">
            <div class="form-group">



<div class="row"></div>
<!-- Class Id Field -->
<div class="form-group col-sm-4">
    <select class="form-control" name="class_id" id="class_id">
        <option value="">Select Class</option>
        @foreach ($class as $cla)
    <option value="{{$cla->class_id}}">{{$cla->class_name}}</option>
        @endforeach

    </select>
</div>

<!-- Course Id Field -->
<div class="form-group col-sm-4">
    <select class="form-control" name="course_id" id="course_id">
        <option value="">Select Course</option>
        @foreach ($course as $cour)
        <option value="{{$cour->course_id}}">{{$cour->course_name}}</option>
        @endforeach
    </select>
</div>

<!-- Level Id Field -->
<div class="form-group col-sm-4">
    <select class="form-control" name="level_id" id="level_id">
        <option value="">Select Level</option>
        @foreach ($level as $lv)
        <option value="{{$lv->level_id}}">{{$lv->level}}</option>
        @endforeach
    </select>
</div>

<!-- Shift Id Field -->
<div class="form-group col-sm-4">
    <select class="form-control" name="shift_id" id="shift_id">
        <option value="">Select Shift</option>
        @foreach ($shift as $shi)
    <option value="{{$shi->shift_id}}">{{$shi->shift}}</option>
        @endforeach
    </select>

</div>

<!-- Classroom Id Field -->
<div class="form-group col-sm-4">
    <select class="form-control" name="classroom_id" id="classroom_id">
        <option value="">Select Classroom</option>
        @foreach ($classroom as $room)
    <option value="{{$room->classroom_id}}">{{$room->classroom_name}}__{{$room->classroom_code}}</option>
        @endforeach
    </select>
</div>

<!-- Batch Id Field -->
<div class="form-group col-sm-4">
    <select class="form-control" name="batch_id" id="batch_id">
        <option value="">Select Batch</option>
        @foreach ($batch as $bat)
    <option value="{{$bat->batch_id}}">{{$bat->year}}</option>
        @endforeach
    </select>
</div>

<!-- Day Id Field -->
<div class="form-group col-sm-4">
    <select class="form-control" name="day_id" id="day_id">
        <option value="">Select Day</option>
        @foreach ($day as $d)
    <option value="{{$d->day_id}}">{{$d->name}}</option>
        @endforeach
    </select>
</div>

<!-- Time Id Field -->
<div class="form-group col-sm-4">
    <select class="form-control" name="time_id" id="time_id">
        <option value="">Select Time</option>
        @foreach ($time as $ti)
    <option value="{{$ti->time_id}}">{{$ti->time}}</option>
        @endforeach
    </select>
</div>



<!-- Semester Id Field -->
<div class="form-group col-sm-4">
    <select class="form-control" name="semester_id" id="semester_id">
        <option value="">Select Semester</option>
        @foreach ($semester as $sem)
    <option value="{{$sem->semester_id}}">{{$sem->semester_name}}_{{$sem->semester_code}}</option>
        @endforeach
    </select>
</div>

<!-- Start Time Field -->
<div class="form-group col-sm-6">
    {{-- <select class="form-control" name="start_time" id="start_time">
    </select> --}}
    <label>Start Date</label>
        <input type="text" class="form-control" name="start_date" id="start_date">
</div>
</div>
{{-- @section('scripts')
<script type="text/javascript">
$('#start_date').datetimepicker({
    format: 'YYYY-MM-DD HH:mm',
    useCurrent: false
})
</script>
@endsection --}}
@push('scripts')
    <script type="text/javascript">
        $('#start_date').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: false
            // sideBySide: true
        })
    </script>
@endpush

<!-- End Time Field -->
<div class="form-group col-sm-6">
    <label>End Date</label>
    <input type="text" class="form-control" name="end_date" id="end_date">
</div>
{{-- @section('scripts')
<script type="text/javascript">
$('#end_date').datetimepicker({
    format: 'YYYY-MM-DD HH:mm',
    useCurrent: false
})
</script>
@endsection --}}
@push('scripts')
    <script type="text/javascript">
        $('#end_date').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: false

        })
    </script>
@endpush

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('status', 0) !!}
        {!! Form::checkbox('status', '1', null) !!}
    </label>
</div>
</div>

<div class="model-footer">
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Create Schedule', ['class' => 'btn btn-success']) !!}
    <a href="{{ route('classSchedulings.index') }}" class="btn btn-warning">Cancel</a>
</div>
</div>
</div>
</div>

