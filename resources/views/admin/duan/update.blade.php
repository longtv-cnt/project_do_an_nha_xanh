<h1>{{ $pageName }}</h1>
<form method="post" action="/duan/update/{{ $du_an->maduan }}">
    @method('PATCH')
    @csrf
    <input type="hidden" name="maduan" value="{{ $du_an->maduan }}">
    <p>
        <label for="maduan">Mã Dự Án</label><br>
        <input type="text" name="maduan" value="{{ $du_an->maduan }}">
    </p>

    <p>
        <label for="tenduan">Tên Dự Án</label><br>
        <input type="text" name="tenduan" value="{{ $du_an->tenduan }}">
    </p>

    <<p>
        <label for="chudautu">Chủ Đầu Tư</label><br>
        <input type="text" name="chudautu" value="{{ $du_an->chudautu }}">
    </p>

    <p>
        <button type="submit">Submit</button>
    </p>
</form>
