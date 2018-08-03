@extends('layouts.admin')
@section('content')
    <div class="table-wrapper">
        <h1 class="text-center" style="margin-bottom: 50px;">New teacher Entry</h1>
        <form class="" method="post" action="{{ action('AdminController@addNewTeacher') }}"  enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="row">
                <div class="col-12 col-md-6 mx-auto">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Name of the new teacher" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Email of the new teacher" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password of the new teacher" required>
                    </div>

                    <div class="form-group">
                        <label for="designation">Designation</label>
                        <input type="text" name="designation" class="form-control" id="designation" placeholder="Designation of the new teacher" required>
                    </div>

                    <div class="form-group">
                        <label for="joiningDate">Joining date</label>
                        <input type="date" name="joiningDate" class="form-control" id="joiningDate" required>
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
