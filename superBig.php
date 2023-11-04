<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Tokopedia</title>
  </head>
  <body>
  <div class="container">
        <div class="judul text-center">
            <h1>BIG SUPER</h1>
        </div>
    <div class="container">
        <form action="" method="POST" name="Penjualan">
    <div class="mb-3">
        <label form="NamaBarang" class="form-label">Nama Barang</label>
        <input type="text" class="form-control" id="nama_brg" name="nama_brg">
    </div>
    <div class="mb-3">
        <label form="Hrg_Barang" class="form-label">Harga Barang</label>
        <input type="text" class="form-control" id="hrg_brg" name="hrg_brg">
    </div>
    <div class="mb-3">
        <label form="JumlahBarang" class="form-label">Jumlah Barang</label>
        <input type="text" class="form-control" id="jml_brg" name="jml_brg">
    </div>
    <div class="mb-3">
            <label for="uang" class="form-label">Uang yang dimiliki</label>
            <input type="text" class="form-control" id="uang" name="uang">
        </div>
    <button type="submit" class="btn btn-primary" name="submit">Hitung</button>
    </form>
    </div>
<?php
if(isset($_POST['submit'])){
    $brg = $_POST['nama_brg'];
    $harga = $_POST['hrg_brg'];
    $jumlah = $_POST['jml_brg'];
    $uang = $_POST["uang"];

    echo"<div class='container'>";
    echo"<hr><h3 class='text-md-start'>Jumlah yang harus dibayarkan</h3>";

    $barang = $jumlah * $harga;
    $pajak = $harga * 0.1;
    $diskon = $barang * 0.2;
    $total = $barang - $diskon + $pajak;
    $kembalian = $uang - $total;

    echo"Nama Barang: $brg <br>";
    echo"Harga Barang: $harga <br>";
    echo"Jumlah Barang: $jumlah<br>";
    echo"Uang anda : $uang<br>";
    echo"Diskon : 20% <br>";
    echo"Pajak : 10% <br>";
    echo"<h3 class='text-md-start'>Rp.$total</h3>";
    echo"<h3 class='text-md-start'>Kembalian</h3>";
    echo"<h4 class='text-md-start'>Rp.$kembalian</h4>";
    echo"</div>";
}
?>

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>