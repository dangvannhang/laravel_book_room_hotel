<div class="main-header">
    <div class="logo-header">
        <a href="{{route('dieukhien')}}" class="logo">
       <img src="/./Img/logo.png" alt="">
        </a>
        <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <button class="topbar-toggler more"><i class="fa fa-ellipsis-v"></i></button>
    </div>
    <nav class="navbar navbar-header navbar-expand-lg">
        <div class="container-fluid">
            <form class="navbar-left navbar-form nav-search mr-md-3" action="">
                <div class="input-group">
                    <input type="text" placeholder="Tìm kiếm ..." class="form-control">
                    <div class="input-group-append">
                        <span class="input-group-text">
                            <i class="fa fa-search search-icon"></i>
                        </span>
                    </div>
                </div>
            </form>
            <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                <li class="nav-item dropdown">
                    <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                        <b>Administrator<b>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li>
                            <div class="user-box">
                                <div class="u-text">
                                    @if(Auth::user())
                                    <h4>{{Auth::user()->name}}</h4>
                                    <p class="text-muted">{{Auth::user()->email}}</p><a href="profile.html" class="btn btn-rounded btn-danger btn-sm">View Profile</a>
                                    @endif
                                </div>
                            </div>
                        </li>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"><i class="ti-user"></i> My Profile</a>
                        <a class="dropdown-item" href="#"></i> My Balance</a>
                        <a class="dropdown-item" href="#"><i class="ti-email"></i> Inbox</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"><i class="ti-settings"></i> Account Setting</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item"  href="{{ route('signOut') }}"><i class="fa fa-power-off"></i> Logout</a>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</div>
<div class="sidebar">
    <div class="scrollbar-inner sidebar-wrapper">
        <ul class="nav" style="margin-top:50px">
            <li class="nav-item active">
                <a href="{{ route('dieukhien') }}">
                    <i class="fa fa-dashboard"></i>
                    <p>Thống kê</p>
                    <!-- <span class="badge badge-count">5</span> -->
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('nguoidung') }}">
                    <i class="fa fa-table"></i>
                    <p>Người dùng</p>
                    <!-- <span class="badge badge-count">14</span> -->
                </a>
            </li>
            <li class="nav-item">
                <a class="dropdown-toggle" type="" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-th"></i>
                    <p>Phòng</p>
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="{{ route('room') }}">
                        <i class="fa fa-th"></i>
                        <p>Hiển thị phòng</p>
                    </a>
                    <a class="dropdown-item" href="{{ route('addRoom') }}">
                        <i class="fa fa-th"></i>
                        <p>Thêm phòng</p>
                    </a>
                </div>
            </li>

            <li class="nav-item">
                <a class="dropdown-toggle" type="" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-th"></i>
                    <p>Dịch vụ</p>
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="{{route('service') }}">
                        <i class="fa fa-th"></i>
                        <p>Hiển thị dịch vụ</p>
                    </a>
                    <a class="dropdown-item" href="{{route('addService') }}">
                        <i class="fa fa-th"></i>
                        <p>Thêm dịch vụ</p>
                    </a>
                </div>
            </li>

            <li class="nav-item">
                <a class="dropdown-toggle" type="" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-th"></i>
                    <p>Đặt phòng</p>
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                    <a class="dropdown-item" href="{{route('bookRoom') }}">
                        <i class="fa fa-th"></i>
                        <p>Danh sách đặt phòng</p>
                    </a>
                    <a class="dropdown-item" href="{{ route('chooseTime') }}">
                        <i class="fa fa-th"></i>
                        <p>Thêm đặt phòng
                    </a>
                </div>
            </li>


        </ul>
    </div>
</div>
