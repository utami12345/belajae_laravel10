<!DOCTYPE html>
<html>
<head>
    <title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <h3 class="text-center">Edit Data Pegawai</h3>
            <a href="/pegawai" class="btn btn-primary mb-3">Kembali</a>
 
            @foreach($pegawai as $p)
            <form action="/pegawai/update" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> 

                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" required="required" value="{{ $p->pegawai_nama }}">
                </div>

                <div class="form-group">
                    <label for="jabatan">Jabatan</label>
                    <input type="text" class="form-control" id="jabatan" name="jabatan" required="required" value="{{ $p->pegawai_jabatan }}">
                </div>

                <div class="form-group">
                    <label for="umur">Umur</label>
                    <input type="number" class="form-control" id="umur" name="umur" required="required" value="{{ $p->pegawai_umur }}">
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea class="form-control" id="alamat" name="alamat" required="required">{{ $p->pegawai_alamat }}</textarea>
                </div>

                <button type="submit" class="btn btn-success">Simpan Data</button>
            </form>
            @endforeach
        </div>
    </div>
</div>

</body>
</html>
