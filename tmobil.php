<!doctype html>
<html lang="en">

<head>

</head>

<body>
    <div class="card">
        <h5 class="card-header">Tambah Data Mobil</h5>
        <div class="card-body">
            <form method="post" action="?x=smobil">
                <div class="form-group">
                    <label>Nomor Polisi</label>
                    <input type="text" class="form-control" name="txtPolisi">
                </div>
                <div class="form-group">
                    <label>Merk Mobil</label>
                    <input type="text" class="form-control" name="txtMerk">
                </div>
                <div class="form-group">
                    <label>Tahun Keluaran</label>
                    <input type="text" class="form-control" name="txtTahun">
                </div>
                <div class="form-group">
                    <label>Harga</label>
                    <input type="text" class="form-control" name="txtHarga">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</body>

</html>