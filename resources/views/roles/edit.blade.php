@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
           <i class="fa fa-registered">Role</i>
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($role, ['route' => ['roles.update', $role->role_id], 'method' => 'patch']) !!}

                   <!-- Name Field -->
                    <div class="form-group col-md-6">
                        {!! Form::label('name', 'Name:') !!}
                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    </div>
                </div>

                    <div>

                        {!! Form::submit('Update Role', ['class' => 'btn btn-info']) !!}
                        <a href="{{ route('roles.index') }}" class="btn btn-default">Back</a>
                    </div>



                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
