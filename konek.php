<?php
$konek = mysqli_connect("localhost", "root", "", "rental1");
if (mysqli_connect_errno()) {
    echo "Koneksi Gagal " . mysqli_connect_error();
}
