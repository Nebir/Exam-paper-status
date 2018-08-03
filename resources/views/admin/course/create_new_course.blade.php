@extends('layouts.admin')
@section('content')
    <div class="table-wrapper">
        <h1 class="text-center" style="margin-bottom: 50px;">New Course Entry</h1>
        <form class="" method="post" action="{{ action('AdminController@addNewCourse') }}">
            {{ csrf_field() }}

            <div class="row">
                <div class="col-12 col-md-10 mx-auto">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="name">Course Name</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Name of the course" required>
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
                            <div class="form-group">
                                <label for="semester">Select Semester</label>
                                <select class="form-control" name="semester_id" id="semester" required style="margin-bottom: 10px;">
                                    @foreach($semesters as $semester)
                                        <option value="{{$semester->id}}">{{$semester->name}}({{ $semester->short_form }})</option>
                                    @endforeach
                                </select>
                                <br>
                                <p><span>Can't find desired option? <a href="{{ route('semester.create') }}">Create New Semester</a></span></p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="courseCode">Course Code</label>
                                <input type="text" name="course_code" class="form-control" id="courseCode" placeholder="Code number of this course" required>
                            </div>
                            <div class="form-group">
                                <label for="courseCredit">Course Credit</label>
                                <input type="number" name="course_credit" class="form-control" id="courseCredit" placeholder="Credit of this course" required>
                            </div>
                            <div class="form-group">
                                <label for="courseType">Select Course Type</label>
                                <select class="form-control" name="course_type_id" id="courseType" required style="margin-bottom: 10px;">
                                    @foreach($courseTypes as $courseType)
                                        <option value="{{$courseType->id}}">{{$courseType->name}}</option>
                                    @endforeach
                                </select>
                                <br>
                                <p><span>Can't find desired option? <a href="{{ route('course-type.create') }}">Create New Course Type</a></span></p>
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <button class="btn btn-primary" style="margin-top:24px;" type="submit">Add</button>
                        </div>
                    </div>
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
