@extends('layouts.admin')
@section('content')
    <div class="table-wrapper">
        <h1 class="text-center" style="margin-bottom: 50px;">Assign Course Teacher</h1>
        <form class="" method="post" action="{{ action('AdminController@assignCourseTeacher') }}">
            {{ csrf_field() }}

            <div class="row">
                <div class="col-12 col-md-10 mx-auto">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="course">Select Course</label>
                                <select class="form-control" name="course_id" id="course" required style="margin-bottom: 10px;">
                                    @foreach($courses as $course)
                                        <option value="{{$course->id}}">{{$course->name}} - {{ $course->department->name }} </option>
                                    @endforeach
                                </select>
                                <br>
                                <p><span>Can't find desired option? <a href="{{ route('course.create') }}">Create New Course</a></span></p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="batch">Select Batch</label>
                                <select class="form-control" name="batch_id" id="batch" required style="margin-bottom: 10px;">
                                    @foreach($batches as $batch)
                                        <option value="{{$batch->id}}"> {{ $batch->department->name }} : ({{$batch->session}})</option>
                                    @endforeach
                                </select>
                                <br>
                                <p><span>Can't find desired option? <a href="{{ route('batch.create') }}">Create New Batch</a></span></p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 mx-auto">
                            <div class="form-group">
                                <label for="teacher">Select Teacher</label>
                                <select class="form-control" name="teacher_id" id="teacher" required style="margin-bottom: 10px;">
                                    @foreach($teachers as $teacher)
                                        <option value="{{$teacher->id}}">{{$teacher->name}}</option>
                                    @endforeach
                                </select>
                                <br>
                                <p><span>Can't find desired option? <a href="{{ route('teacher.create') }}">Create New Teacher</a></span></p>
                            </div>

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
