<!DOCTYPE html>
<html>
<head>
    <title>Tutorial Laravel #20 : Eloquent Laravel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
 
<div class="container">
    <div class="card mt-3">
        <div class="card-header text-center">
            CRUD Data Karyawan - <a href="https://www.malasngoding.com/category/laravel" target="_blank">www.malasngoding.com</a>
        </div>
            <div class="card-body d-flex justify-content-between align-items-center">
                <a href="/karyawan/tambah" class="btn btn-primary">Tambah Karyawan Baru</a>
            <form action="/karyawan/cari" method="GET" class="form-inline">
            <input class="form-control" type="text" name="cari" placeholder="Cari Karyawan .." value="{{ old('cari') }}">
            <input class="btn btn-primary ml-3" type="submit" value="CARI">
            </form>
            </div>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                <tr>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Umur</th>
                    <th>Alamat</th>
                    <th>Opsi</th>
                </tr>
                @foreach($karyawan as $k)
                <tr>
                    <td>{{ $k->nama }}</td>
                    <td>{{ $k->jabatan }}</td>
                    <td>{{ $k->umur }}</td>
                    <td>{{ $k->alamat }}</td>
                    <td>
                        <a class="btn btn-warning btn-sm" href="/karyawan/edit/{{ $k->id }}">Edit</a>
                        <a class="btn btn-danger btn-sm" href="/karyawan/hapus/{{ $k->id }}">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </table>
            </div>      
            <br/>
            Halaman : {{ $karyawan->currentPage() }} <br/>
            Jumlah Data : {{ $karyawan->total() }} <br/>
            Data Per Halaman : {{ $karyawan->perPage() }} <br/>
            <br/>
            <div class="d-flex justify-content-center mt-3">
            {{ $karyawan->links('pagination::bootstrap-4') }}
        </div>
        </div>
    </div>
</div>
 
</body>
</html>
