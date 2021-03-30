@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Batch
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($batch, ['route' => ['batches.update', $batch->batch_id], 'method' => 'patch']) !!}

                        <!-- Name Field -->
                    <div class="form-group col-md-6">
                        {!! Form::label('year', 'Batch Year:') !!}
                        {!! Form::text('year', null, ['class' => 'form-control']) !!}
                    </div>
                </div>

                    <div class="form-group col-sm-12">
                        {!! Form::submit('Update Batch Year', ['class' => 'btn btn-info']) !!}
                        <a href="{{ route('batches.index') }}" class="btn btn-default">Cancel</a>
                    </div>

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
