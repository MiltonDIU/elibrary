@extends('layouts.master')

@section('content')
           <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ url('/admin/semester') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                     {!! Form::model($semester, ['method' => 'PATCH','url' => ['admin/semester', $semester->id],'class' => 'form-horizontal','files' => true]) !!}

                            @include ('admin.semester.form', ['submitButtonText' => 'Update'])

                       {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>

@endsection
