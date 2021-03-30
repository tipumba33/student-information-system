@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left fa fa-user-circle-o ">Teachers Information</h1>
        <h1 class="pull-right">
           <a data-toggle="modal" data-target="#teacher-add-modal"
           class="btn btn-primary pull-right"  >
           <span class="fa fa-plus-circle"> Add New Teacher</span></a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')
        @include('adminlte-templates::common.errors')
        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('teachers.table')
                    {{-- {!! Form::open(['route' => 'teachers.store']) !!} --}}
            <form action="{{route('teachers.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                        @include('teachers.fields')

                    </form>
            </div>
        </div>
        <div class="text-center">

        </div>
    </div>
@endsection

