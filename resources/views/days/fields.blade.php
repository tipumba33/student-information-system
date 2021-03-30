<!-- Modal-->
<div class="modal fade left" id="day-add-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-ms modal-right modal-success" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-sun-o" aria-hidden="true"> Add New Day</i></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

<!-- Year Field -->
<div class="input-group col-md-12">
    <span class="input-group-addon">Days</span>
    {!! Form::text('name', null, ['class' => 'form-control','placeholder'=>'Enter Day Here']) !!}
</div>


        </div>

<div class="modal-footer">
    <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
    {!! Form::submit('Create Day', ['class' => 'btn btn-primary']) !!}
</div>
</div>
</div>
</div>
</div>
