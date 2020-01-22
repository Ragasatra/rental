<?php
include "konek.php";
$polisi = $_POST['polisi'];
$nama = $_POST['txtNama'];
$jenkel = $_POST['jenkel'];
$ktp = $_POST['txtKTP'];
$alamat = $_POST['txtAlamat'];
$tlp = $_POST['txtTlp'];
$tujuan = $_POST['txtTujuan'];
$mulai = new DateTime($_POST['txtMulai']);
$selesai = new DateTime($_POST['txtSelesai']);
$selisih = $selesai->diff($mulai);
$x = $selisih->d;
$cari = mysqli_query($konek, "select * from mobil1 where id_mobil='$polisi'");
$data = mysqli_fetch_array($cari);
$harga = $x * $data['harga'];
$simpan = mysqli_query($konek, "insert into sewa1(id_mobil,id_admin,nama_sewa,ktp,jenkel_sewa,alamat,tlp_sewa,tujuan,tgl_sewa,tgl_kembali,lama,harga_total) values ('$polisi','$_SESSION[id_admin]','$nama','$ktp','$jenkel','$alamat','$tlp','$tujuan','$_POST[txtMulai]','$_POST[txtSelesai]','$x','$harga')") or die(mysqli_error());
if ($simpan) {
    header("Location:index.php?x=order");
}
