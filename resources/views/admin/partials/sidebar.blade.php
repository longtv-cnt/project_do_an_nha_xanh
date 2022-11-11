<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->


    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="adminlte/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">
                 @if (Auth::check())
                    {{ Auth::user()->name }}
                    @else
                    Admin
                 @endif

                </a>




            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <div class="container">
            <nav class="mt-4">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <li class="nav-header"></li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fa fa-align-justify"></i>
                            <p>
                                Quản Lý Danh Mục
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('duan') }}" class="nav-link">
                                    <i class="fab fa-buffer"></i>
                                    <p>Dự Án</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('khachhang') }}" class="nav-link">
                                    <i class="fa fa-users" aria-hidden="true"></i>
                                    <p>Khách Hàng</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('phanhoi') }}" class="nav-link">
                                    <i class="fa fa-comment"></i>
                                    <p>Phản Hổi</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('phieuthu') }}" class="nav-link">
                                    <i class="fas fa-file-powerpoint"></i>
                                    <p>Phiếu Thu</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('contact') }}" class="nav-link">
                                    <i class="fa fa-phone"></i>
                                    <p>Contact</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('banners') }}" class="nav-link">
                                    <i class="fa fa-align-center"></i>
                                    <p>Banners</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('tintuc') }}" class="nav-link">
                                    <i class="fa fa-newspaper"></i>
                                    <p>Tin Tức</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('sanpham_bds') }}" class="nav-link">
                                    <i class="fas fa-server"></i>
                                    <p>Sản Phẩm</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('gallery') }}" class="nav-link">
                                    <i class="fa fa-id-card-o"></i>
                                    <p>Gallery</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="fa fa-user-o" aria-hidden="true"></i>
                                    <p>Tài Khoản</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="fas fa-stream"></i>
                                    <p>
                                        Loại
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ route('loaikhach') }}" class="nav-link">
                                            <i class="fa-solid fa-people-group"></i>
                                            <p>Loại Khách Hàng</p>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{ route('loaisp_bds') }}" class="nav-link">
                                            <i class="fa-solid fa-people-group"></i>
                                            <p>Loại Sản Phẩm Bất Động Sản</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('loaitintuc') }}" class="nav-link">
                                            <i class="fa-solid fa-people-group"></i>
                                            <p>Loại Tin Tức</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-chart-bar"></i>
                            <p>
                                Báo Cáo Thống Kê
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('baocao') }}" class="nav-link">
                                    <i class="fab fa-buffer"></i>
                                    <p>Báo Cáo</p>
                                </a>
                            </li>
                        </ul>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-users"></i>
                            <p>
                                User và phân quyền
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('role.index') }}" class="nav-link">
                                    <i class="fab fa-buffer"></i>
                                    <p>Vai trò</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('user.index') }}" class="nav-link">
                                    <i class="fab fa-u"></i>
                                    <p>Tài khoản</p>
                                </a>
                            </li>
                        </ul>
            </nav>
        </div>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
