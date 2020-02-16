@extends('layouts.master')

@section('content')
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        <a href="{{ url('/admin/department') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        @if(Session::has('viewIndex'))
                            @include('admin.action')
                        @endif
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                <tr>
                                    <th> DepartmentName</th>
                                    <td> {{ $item->departmentName }} </td>
                                </tr>
                                <tr>
                                    <th> DeptShortName</th>
                                    <td> {{ $item->deptShortName }} </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>

@endsection
