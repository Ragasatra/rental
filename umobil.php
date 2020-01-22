<?php
include("konek.php");
$nopolisi = $_POST['txtPolisi'];
$merk = $_POST['txtMerk'];
$tahun = $_POST['txtTahun'];
$harga = $_POST['txtHarga'];
$kode = $_POST['kode'];
$simpan = mysqli_query($konek, "update mobil1 set no_polisi='$nopolisi', merk='$merk', tahun='$tahun', harga='$harga' where id_mobil='$kode'");
if ($simpan) {
    header("Location:index.php?x=mobil");
}
