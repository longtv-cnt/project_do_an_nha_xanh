@extends('admin.layouts.admin')
@section('title')
    <title>Contact</title>
@endsection
@section('content')
<section class="content">
    <div class="content-wrapper">
    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Contact</h3>
        <div class="card-tools">
        </div>
      </div>
        <div class="card-body p-0">
            <table class="table table-striped projects">
                <form method="post" action="/contact/update/{{ $contact->id }}">
                    @method('PATCH')
                    @csrf
                <thead>
                    <tr>
                        <th>
                            ID
                         </th>
                         <th>
                            Subject
                         </th>
                         <th>
                            Tên
                         </th>
                         <th>
                            Số Điện Thoại
                         </th>
                         <th>
                            Message
                         </th>
                    </tr>
                </thead>
                <tbody>
                        <input type="hidden" name="id" value="{{ $contact->id }}">
                        <td>
                            <input type="text" name="id" value="{{ $contact->id }}">
                        </td>
                        <td>
                            <input type="text" name="subject" value="{{ $contact->subject }}">
                        </td>
                        <td>
                            <input type="text" name="ten" value="{{ $contact->ten }}">
                        </td>
                        <td>
                            <input type="text" name="sdt" value="{{ $contact->sdt }}">
                        </td>
                        <td>
                            <input type="text" name="message" value="{{ $contact->message }}">
                        </td>

                        <td>
                            <button type="submit">Sửa</button>
                        </td>

                </tbody>

                    </form>
            </table>
        </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
    </div>
  </section>
@endsection

