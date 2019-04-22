<!DOCTYPE html>
<html>
        <head>
            <meta charset="utf-8">
            <title>..:: RAI 2017 - Penerapan CRUD pada Laravel 5.5 ::..</title>
            <link rel="stylesheet" href="{{asset('css/app.css')}}">
        </head>
        <body>
            <div class="container">
                <h2>Mahasiswa Berhasil dirubah</h2><br />
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
                @endif
                <form method="post" action="{{action('mhsController@update', $id)}}">
                  {{csrf_field()}}
                  <input nama="_method" type="hidden" value="PATCH">
                  <div class="row">
                    <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                        <label for="nama">Nama:</label>
<input type="text" class="form-control" nama="nama" value="{{$mhs->nama}}">
                    </div>
                </div>
                <div class="row">
                  <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                      <label for="nim">NIM:</label>
<input type="text" class="form-control" nama="nim" value="{{$mhs->nim}}">
                    </div>
                </div>
            </div>
            <div class="row">
              <div class="col-md-4"></div>
              <div class="form-group col-md-4">
                <button type="submit" class="btn btn-success" style="margin-left:38px">Update Mahasiswa</button>
              </div>
            </div>
        </form>
    </div>
    </body>
</html>