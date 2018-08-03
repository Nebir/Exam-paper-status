@extends('layouts.admin')
@section('content')
    {{--<div class="table-wrapper">
        <table class="table table-bordered table-responsive table-striped">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>

            @foreach($teacherDatas as $teacherData)
                <tr class="text-center">
                    <td>{{ $teacherData->name }}</td>
                    <td>{{ $teacherData->email }}</td>
                    <td>
                        <div class="btn-group">
                            <a href="#" class="btn btn-primary">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>--}}
@stop

@section('style')

    <link rel="stylesheet" type="text/css"  href="{!! asset('css/dataTables.bootstrap.css') !!}">

@endsection

@section('script')
    <script type="text/javascript" src="{!! asset('js/dashboard-scripts/jquery.dataTables.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('js/dashboard-scripts/dataTables.bootstrap.min.js') !!}"></script>
@endsection