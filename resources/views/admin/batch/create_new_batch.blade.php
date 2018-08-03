@extends('layouts.admin')
@section('content')
    <div class="table-wrapper">
        <h1 class="text-center" style="margin-bottom: 50px;">New Batch Entry</h1>
        <form class="" method="post" action="{{ action('AdminController@addNewBatch') }}">
            {{ csrf_field() }}

            <div class="row">
                <div class="col-12 col-md-6 mx-auto">
                    <div class="form-group">
                        <label for="session">Session</label>
                        <input type="text" name="session" class="form-control" id="session" placeholder="Session of the batch" required>
                    </div>

                    <div class="form-group">
                        <label for="department">Select Department</label>
                        <select class="form-control" name="dept_id" id="department" required style="margin-bottom: 10px;">
                            @foreach($departments as $department)
                                <option value="{{$department->id}}">{{$department->name}}</option>
                            @endforeach
                        </select>
                        <br>
                        <p><span>Can't find desired option? <a href="{{ route('department.create') }}">Create New Department</a></span></p>
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
