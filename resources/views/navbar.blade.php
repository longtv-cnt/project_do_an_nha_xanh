<!-- ======= Header/Navbar ======= -->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="{{ route('home') }}">Nhà<span class="color-b">Xanh</span></a>

      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">

          <li class="nav-item">
            <a class="nav-link active" href="{{route('home')}}">Trang Chủ</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="{{ route('about')}}">Về Chúng Tôi</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="{{route('property-grid')}}">Bất Động Sản</a>
          </li>


          <li class="nav-item">
            <a class="nav-link " href="{{route('blog-grid')}}">Blog</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="{{route('contact')}}">Liên Hệ</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Thêm</a>
            <div class="dropdown-menu">
              <a class="dropdown-item " href="{{route('agents-grid')}}">Cộng Tác Viên</a>
              <a class="dropdown-item " href="{{route('agent-single')}}">Thông Tin Cộng Tác Viên</a>
              <a class="dropdown-item " href="{{route('property-single')}}">Thông Tin Bất Động Sản</a>
              <a class="dropdown-item " href="{{route('blog-single')}}">Thông Tin Blog </a>
            </div>
          </li>

        </ul>
      </div>

        <div>
            <button type="button" class="btn btn-b-n navbar-toggle-box navbar-toggle-box-collapse" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01">Tìm Kiếm
                <i class="bi bi-search"></i>
            </button>
            <button type="button" class="btn btn-b-n navbar-toggle-box navbar-toggle-box-collapse" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01">Thêm Bài Viết
                <i class="bi bi-file-earmark-plus"></i>
            </button>
          </div>
    </div>
  </nav><!-- End Header/Navbar -->
