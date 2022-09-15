<nav class="navbar navbar-expand-sm navbar-success navbar-nav-scrol mt-4" style="width:96vw;">
    <a class="navbar-brand" href="#"><img src="{{ asset('image/logo.jpg') }}" alt="bds Hoàng Long" width="40rem"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">

      <span ><i class="fa fa-bars" aria-hidden="true"></i></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExample03">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item dropdown ">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Giới thiệu</a>
            <div class="dropdown-menu" aria-labelledby="dropdown03 ">
              <a class="dropdown-item" href="#">Thư ngỏ</a>
              <a class="dropdown-item" href="#">Ban lãnh đạo </a>
              <a class="dropdown-item" href="#">Sứ mệnh</a>
            </div>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="#">Bất động sản</a>
              </li>
        <li class="nav-item">
          <a class="nav-link " href="#">Tin tức</a>
        </li>

          <li class="nav-item">
            <a class="nav-link " href="#">Liên hệ</a>
          </li>
      </ul>
        <div class="collapse navbar-collapse" id="navbarsExample03" >
            <input type="text" name="country_name" id="country_name" class="form-control input-lg" placeholder="tu khoa" />
            {{ csrf_field() }}
        </div>
    </div>
  </nav>
