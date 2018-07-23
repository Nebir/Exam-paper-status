@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h1 class="text-center">This is admin page</h1>
            </div>
        </div>
    </div>
@stop

@section('style')

    <link rel="stylesheet" type="text/css"  href="{!! asset('css/dataTables.bootstrap.css') !!}">

@endsection

@section('script')
    <script type="text/javascript" src="{!! asset('js/dashboard-scripts/jquery.dataTables.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('js/dashboard-scripts/dataTables.bootstrap.min.js') !!}"></script>
@endsection
