
<nav class="navbar navbar-expand-sm navbar-success navbar-nav-scrol" style="">
{{--    <a class="navbar-brand" href="#">HL</a>--}}
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExample03">
      <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
              <a class="navbar-brand" href="#">HL</a>
          </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Về chúng tôi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#">Tin tức</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Bất động sản</a>
          <div class="dropdown-menu" aria-labelledby="dropdown03">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
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
