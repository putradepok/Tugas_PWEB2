<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Nilai mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <h3>Form nilai mahasiswa</h3>
    <hr>
<?php
    $_ar_matkuls = [
        "DDP" => "Dasar-dasar pemrograman",
        "WEB1" => "Pemrograman web 1",
        "WEB2" => "Pemrograman web 2",
        "SB" => "Sistem basis data",
        "BD" => "Basis data",
        "AI" => "Kecerdasan Buatan",
        "JK" => "Jaringan komputer",
        "UI/UX" => "User interface/user experience",
    ]
?>
<form method="post" action ="<?php echo $_SERVER['PHP_SELF'];?>">
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="nama" name="nama" type="nama" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="select" class="col-4 col-form-label">Mata kuliah</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select">
        <option value="matkul">-- Pilih mata kuliah --</option></option>
<?php
        foreach($_ar_matkuls as $kode=>$nama){
            echo "<option value='$kode'>$nama</option>";
        }
?>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="text3" class="col-4 col-form-label">Nilai uts</label> 
    <div class="col-8">
      <input id="nilai_uts" name="nilai_uts" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text4" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <input id="nilai_uas" name="nilai_uas" type="#" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text5" class="col-4 col-form-label">Nilai Praktikum/Tugas</label> 
    <div class="col-8">
      <input id="nilai_tugas" name="nilai_tugas" type="#" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
<hr>
Hasil Input Data Nilai mahasiswa: <hr>
<?php
    $_nama = $_POST['nama'];
    $_matkul = $_POST['matkul'];
    $_nilai_uts = $_POST['nilai_uts'];
    $_nilai_uas = $_POST['nilai_uas'];
    $_nilai_tugas = $_POST['nilai_tugas'];
    $_rata_rata = ($_nilai_uts * 0.3)+($_nilai_uas * 0.3)+($_nilai_tugas * 0.4);
    $_keterangan = keterangan ($_rata_rata);
    $_grade = grade ($_rata_rata);
?>
<?php
    function keterangan ($_rata_rata){
        if ($_rata_rata >= 80) {
            return "Lulus";
        }
        else {
            return "Tidak Lulus";
        }
}

function grade ($_rata_rata){
  if ($_rata_rata >= 85 && $_rata_rata <= 100) {
    return "A; (sangat baik)";
  }
  elseif ($_rata_rata >= 60 && $_rata_rata < 85) {
    return "B; (baik)";
  }
  elseif ($_rata_rata >= 40 && $_rata_rata < 59) {
    return "C; (cukup)";
  }
  elseif ($_rata_rata >= 20 && $_rata_rata < 39) {
    return "D; (kurang)";
  }
  elseif ($_rata_rata >= 0 && $_rata_rata < 19) {
    return "E; (sangat buruk)";
    }
  }
?>

Nama Mahasiswa : <?=$_nama;?><br>
Mata Kuliah : <?=$_matkul;?><br>
Nilai UTS : <?=$_nilai_uts;?><br>
Nilai UAS : <?=$_nilai_uas;?><br>
Nilai Praktikum/Tugas : <?=$_nilai_tugas;?><br>
keterangan : <?=$_keterangan;?><br>
grade : <?=$_grade;?><br>

</body>
</html>