<!doctype html>
<html lang="en">

<head>

</head>

<body>
    <?php
    include("konek.php");
    $cari = mysqli_query($konek, "select * from mobil1 where id_admin=$_SESSION[id_admin]");

    ?>
    <div class="card">
        <h5 class="card-header">Tambah Data Order</h5>
        <div class="card-body">
            <form method="post" action="?x=sorder">
                <div class="form-group">
                    <label>Nomo Polisi</label>
                    <select name="polisi" class="form-control">
                        <option value="">--Pilih--</option>
                        <?php
                        while ($data = mysqli_fetch_array($cari)) {
                            ?>
                            <option value="<?php echo $data['id_mobil']; ?>"><?php echo $data['no_polisi'] . " - " . $data['merk']; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Nomor KTP</label>
                    <input type="text" class="form-control" name="txtKTP">
                </div>
                <div class="form-group">
                    <label>Nama Peminjam</label>
                    <input type="text" class="form-control" name="txtNama">
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select name="jenkel" class="form-control">
                        <option value="">--Pilih--</option>
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Alamat Lengkap</label>
                    <input type="text" class="form-control" name="txtAlamat">
                </div>
                <div class="form-group">
                    <label>Tlp/HP</label>
                    <input type="text" class="form-control" name="txtTlp">
                </div>
                <div class="form-group">
                    <label>Tujuan</label>
                    <input type="text" class="form-control" name="txtTujuan">
                </div>
                <div class="form-group">
                    <label>Tanggal Pinjam</label>
                    <input type="date" class="form-control" name="txtMulai">
                </div>
                <div class="form-group">
                    <label>Tanggal Selesai</label>
                    <input type="date" class="form-control" name="txtSelesai">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</body>

</html>