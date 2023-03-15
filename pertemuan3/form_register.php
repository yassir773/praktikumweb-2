<?php
$majors=['sistem informasi', 'teknik informatika','Bisnis digital'];
$skills=[
  'HTML'=> 10,
  'CSS' => 10,
  'javascript'=>20,
  'RWD boostrap'=>20,
  'PHP'=>30,
  'PYTHON'=>30,
  'JAVA'=>50,
];
$domisilis=['jakarta','depok','bogor','tanggerang','bekasi','lainnya'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>from register</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>from register IT club </h2>
        <hr>
<form method="post" action= "proses_register.php">
  <div class="form-group row">
    <label for="nim" class="col-4 col-form-label">NIM</label> 
    <div class="col-8">
      <input id="nim" name="nim" placeholder="Masukkan NIM" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">NAMA</label> 
    <div class="col-8">
      <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="Laki-Laki"> 
        <label for="gender_0" class="custom-control-label">Laki-Laki</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="Perempuan"> 
        <label for="gender_1" class="custom-control-label">perempuan</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Program studi</label> 
    <div class="col-8">
      <select id="matkul" name="prodi" class="custom-select">
        <?php  foreach ($majors as $majors):?>
          <option value="<?php echo $majors?>"><?php echo $majors?></option>
          <?php endforeach?>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Skill Programming</label> 
    <div class="col-8">
      <?php foreach($skills as $key=>$value):?>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="<?php echo $key?>" type="checkbox" class="custom-control-input" value="<?php echo $key?>"> 
        <label for="<?php echo $key?>" class="custom-control-label"><?php echo $key?></label>
      </div>
      <?php endforeach?>
    </div>
  </div>
  <div class="form-group row">
    <label for="domisili" class="col-4 col-form-label">Tempat Domisili</label> 
    <div class="col-8">
      <select id="domisili" name="domisili" class="custom-select">
        <?php foreach($domisilis as $domisili):?>
        <option value="<?=$domisili?>"><?=$domisili?> </option>
        <?php endforeach?>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <input id="email" name="email" placeholder="Masukkan Email" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
        <div>
</body>
</html>