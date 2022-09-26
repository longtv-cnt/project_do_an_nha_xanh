<div class="card-body p-0">
    <table class="table table-striped projects">
        <thead>
            <tr>
                <form method="PUT" action="/duan/update/{{ $du_an->maduan }}">
                    @method('PATCH')
                    @csrf
                    <input type="hidden" name="maduan" value="{{ $du_an->maduan }}">
                    <th>
                        <label for="maduan">Mã Dự Án</label><br>
                        <input type="text" name="maduan" value="{{ $du_an->maduan }}">
                    </th>

                    <th>
                        <label for="tenduan">Tên Dự Án</label><br>
                        <input type="text" name="tenduan" value="{{ $du_an->tenduan }}">
                    </th>

                    <<th>
                        <label for="chudautu">Chủ Đầu Tư</label><br>
                        <input type="text" name="chudautu" value="{{ $du_an->chudautu }}">
                    </th>

                    <th>
                        <button type="submit">Submit</button>
                    </th>
                </form>
            </tr>
        </thead>
    </table>
</div>
