<!doctype html>
<html lang="en">

<head>

</head>

<body>
    <?php
    include("konek.php");
    $id = $_GET['id'];
    $cari = mysqli_query($konek, "select * from mobil1 where id_mobil='$id'");
    $data = mysqli_fetch_array($cari);
    ?>
    <div class="card">
        <h5 class="card-header">Ubah Data Mobil</h5>
        <div class="card-body">
            <form method="post" action="?x=umobil">
                <input type="hidden" name="kode" value="<?php echo $data['id_mobil']; ?>">
                <div class="form-group">
                    <label>Nomo Polisi</label>
                    <input type="text" class="form-control" name="txtPolisi" value="<?php echo $data['no_polisi']; ?>">
                </div>
                <div class="form-group">
                    <label>Merk Mobil</label>
                    <input type="text" class="form-control" name="txtMerk" value="<?php echo $data['merk']; ?>">
                </div>
                <div class="form-group">
                    <label>Tahun Keluaran</label>
                    <input type="text" class="form-control" name="txtTahun" value="<?php echo $data['tahun']; ?>">
                </div>
                <div class="form-group">
                    <label>Harga</label>
                    <input type="text" class="form-control" name="txtHarga" value="<?php echo $data['harga']; ?>">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</body>

</html>