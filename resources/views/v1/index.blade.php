<!-- index.blade.php -->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>..:: Mahasiswa PNJ ::..</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        <div class="container">
        <br />
        @if (\Session::has('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
            </div><br />
        @endif
        <table class="table table-striped">
        <thead>
            <tr>
             <th>ID</th>
             <th>Nama</th>
             <th>nim</th>
             <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mhs as $mhs)
            <tr>
             <td>{{$mhs['id']}}</td>
             <td>{{$mhs['nama']}}</td>
             <td>{{$mhs['nim']}}</td>
             <td><a href="{{action('mhsController@edit', $mhs['id'])}}" class="btn btn-warning">Ubah</a></td>
             <td>
                <form action="{{action('mhsController@destroy', $mhs['id'])}}" method="post">
                    {{csrf_field()}}
                    <input name="_method" type="hidden" value="DELETE">
                    <button class="btn btn-danger" type="submit">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
</body>
</html>