<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="">
                <a href="{!!  route( 'dashboard') !!}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="fa fa-th"></i>
                    <span>Teachers</span>
                </a>
                <ul class="treeview-menu">
                    <li class=""><a href="{{ route('teacher.data') }}"><i class="fa fa-circle-o"></i> All Teachers List </a></li>
                    <li class=""><a href="{{ route('teacher.create') }}"><i class="fa fa-plus-square-o"></i> Add New Teacher</a></li>
                </ul>
            </li>

            <li>
                <a href="#">
                    <i class="fa fa-th"></i>
                    <span>Semesters</span>
                </a>
                <ul class="treeview-menu">
                    <li class=""><a href="{{ route('semester.data') }}"><i class="fa fa-circle-o"></i> All Semester Data </a></li>
                    <li class=""><a href="{{ route('semester.create') }}"><i class="fa fa-plus-square-o"></i> Add New Semester</a></li>
                </ul>
            </li>

            <li>
                <a href="#">
                    <i class="fa fa-th"></i>
                    <span>Courses</span>
                </a>
                <ul class="treeview-menu">
                    <li class=""><a href="{{ route('course.data') }}"><i class="fa fa-circle-o"></i> All Courses List </a></li>
                    <li class=""><a href="{{ route('course.create') }}"><i class="fa fa-plus-square-o"></i> Add New Course</a></li>
                    <li class=""><a href="{{ route('course-type.create') }}"><i class="fa fa-plus-square-o"></i> Add New Course Type</a></li>
                </ul>
            </li>

            <li>
                <a href="#">
                    <i class="fa fa-th"></i>
                    <span>Batch</span>
                </a>
                <ul class="treeview-menu">
                    <li class=""><a href="{{ route('batch.data') }}"><i class="fa fa-circle-o"></i> All Batch Data </a></li>
                    <li class=""><a href="{{ route('batch.create') }}"><i class="fa fa-plus-square-o"></i> Add New Batch</a></li>
                </ul>
            </li>

            {{--<li>
                <a href="#">
                    <i class="fa fa-th"></i>
                    <span>Courses</span>
                </a>
                <ul class="treeview-menu">
                    <li class=""><a href="{{ route('course.data') }}"><i class="fa fa-circle-o"></i> All Data </a></li>
                    <li class=""><a href="{{ route('course.create') }}"><i class="fa fa-circle-o"></i> New Entry</a></li>
                </ul>
            </li>

            <li>
                <a href="#">
                    <i class="fa fa-th"></i>
                    <span>Batch</span>
                </a>
                <ul class="treeview-menu">
                    <li class=""><a href="{{ route('batch.data') }}"><i class="fa fa-circle-o"></i> All Data </a></li>
                    <li class=""><a href="{{ route('batch.create') }}"><i class="fa fa-circle-o"></i> New Entry</a></li>
                </ul>
            </li>

            <li>
                <a href="#">
                    <i class="fa fa-th"></i>
                    <span>Result</span>
                </a>
                <ul class="treeview-menu">
                    <li class=""><a href="{{ route('result.data') }}"><i class="fa fa-circle-o"></i> All Data </a></li>
                    <li class=""><a href="{{ route('result.create') }}"><i class="fa fa-circle-o"></i> New Entry</a></li>
                </ul>
            </li>--}}


            <li>
                <a href="#">
                    <i class="fa fa-th"></i>
                    <span>Additional Options</span>
                </a>
                <ul class="treeview-menu">
                    <li class="">
                        <a href="{{ route('department.create') }}">
                            <i class="fa fa-plus-square-o"></i> Add New Department
                        </a>
                    </li>
                    <li class="">
                        <a href="{{ route('assign.courseTeacher') }}">
                            <i class="fa fa-circle-o"></i> Assign course to teacher
                        </a>
                    </li>
                    <li class="">
                        <a href="{{ route('semester.create') }}">
                            <i class="fa fa-circle-o"></i> Assign teacher to committee
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>