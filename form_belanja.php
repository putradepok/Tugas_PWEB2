<!DOCTYPE html>
<html lang="en">
<head>
    <title>FORM BELANJA</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <h3> FORM BELANJA</h3>
    <hr>
<form method ="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <div class="form-group row">
    <label for="customer" class="col-2 col-form-label">customer</label> 
    <div class="col-5">
      <input id="customer" name="customer" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-2">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="barang" id="barang" type="radio"value="televisi"> 
        <label for="televisi">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="barang" id="barang" type="radio"value="kulkas"> 
        <label for="kulkas">Kulkas</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="barang" id="barang" type="radio"value="mesin_cuci"> 
        <label for="mesin_cuci">Mesin cuci</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-2 col-form-label">Jumlah</label> 
    <div class="col-2">
      <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
    <div class="flex-1 md:ml-6 mt-6 md:mt-0">
                <div class="bg-blue-100 p-4 rounded">
                    <h2 class="text-lg font-bold mb-2">Daftar Harga</h2>
                    <ul class="list-disc pl-5">
                        <li>TV : 4.200.000</li>
                        <li>Kulkas : 3.100.000</li>
                        <li>MESIN CUCI : 3.800.000</li>
                    </ul>
                    <div class="bg-blue-500 text-white text-center mt-4 p-2 rounded">
                        Harga Dapat Berubah Setiap Saat
                    </div>
                </div>
            </div>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $customer = $_POST["customer"];
        $barang = $_POST["barang"];
        $jumlah = $_POST["jumlah"];
    }
    // DAFTAR HARGA LIST 
    $list_harga = [
        "televisi" => 4200000,
        "kulkas" => 3100000,
        "mesin_cuci" => 3800000,
    ];
    // HARGA TOTAL
    $harga_total = $list_harga[$barang] * $jumlah;
?>
<hr>
<!-- Tampilkan hsil -->
<strong>Hasil laporan pembeli</strong><br>
Nama Customer : <?=$customer;?><br>
Barang pilihan : <?=$barang;?><br>
Jumlah Beli : <?=$jumlah;?><br>
Total Belanja : Rp.<?=$harga_total;?><br>
</body>
</html>