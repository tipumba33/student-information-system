
<!-- Modal -->
<div class="modal fade" id="batch-add-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-ms modal-right modal-success" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle"><i class="fa fa-badge" aria-hidden="true"> Add New Batch</i></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

<div class="input-group col-md-12">
    <span class="input-group-addon">Batch Year</span>
    {!! Form::text('year', null, ['class' => 'form-control']) !!}
</div>

        </div>
<div class="modal-footer">
    <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
    {!! Form::submit('Create Batch', ['class' => 'btn btn-primary']) !!}
</div>
</div>
</div>
</div>
</div>
