<header class="main-header">

    <!-- Logo -->
    <a href="{{ route('home') }}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b><i class="fa fa-home"></i></b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Examination Paper Status</b></span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">

            <ul class="nav navbar-nav">



            {{--  @include('admin.includes.inboxMenu') --}}
            {{-- @include('admin.includes.notificationMenu')  --}}
            {{-- @include('admin.includes.taskMenu')  --}}
            {{--@include('admin.includes.profileMenu')--}}
            <!-- Control Sidebar Toggle Button -->
                <!-- <li>
                  <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li> -->

            </ul>
        </div>

    </nav>
</header>