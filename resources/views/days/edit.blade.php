@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Day
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($day, ['route' => ['days.update', $day->day_id], 'method' => 'patch']) !!}

                        <div class="form-group col-md-12">
                            <span class="input-group-addon">Days</span>
                            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter Day Here']) !!}
                        </div>
               </div>
                        <div class="form-group col-sm-12">
                            {!! Form::submit('Update Day', ['class' => 'btn btn-info']) !!}
                            <a href="{{ route('days.index') }}" class="btn btn-default">Cancel</a>
                        </div>

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
