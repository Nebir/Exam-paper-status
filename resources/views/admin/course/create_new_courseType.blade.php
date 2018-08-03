@extends('layouts.admin')
@section('content')
    <div class="table-wrapper">
        <h1 class="text-center" style="margin-bottom: 50px;">New Course Type Entry</h1>
        <form class="" method="post" action="{{ action('AdminController@addNewCourseType') }}">
            {{ csrf_field() }}

            <div class="row">
                <div class="col-12 col-md-6 mx-auto">
                    <div class="form-group">
                        <label for="name">Course Type Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Ex: Major, Minor etc." required>
                    </div>
                    <button class="btn btn-primary" style="margin-top:24px;" type="submit">Add</button>
                </div>
            </div>
        </form>
    </div>
@stop

@section('style')

    <link rel="stylesheet" type="text/css"  href="{!! asset('css/dataTables.bootstrap.css') !!}">

@endsection

@section('script')
    <script type="text/javascript" src="{!! asset('js/dashboard-scripts/jquery.dataTables.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('js/dashboard-scripts/dataTables.bootstrap.min.js') !!}"></script>
@endsection
