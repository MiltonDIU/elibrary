@extends('layouts.master')

@section('content')

        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ url('/admin/sister-concern') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />


                        {!! Form::open(['url' => '/admin/sister-concern', 'class' => 'form-horizontal', 'files' => true]) !!}

                            @include ('admin.sister-concern.form')

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>

@endsection
