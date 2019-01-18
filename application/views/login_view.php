<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="<?php echo base_url() ?>assets/images/uin.png" rel="shortcut icon">
<link href="<?php echo base_url('assets/css/bootstrap.css')?>" rel="stylesheet">
<link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet">

<title><?php echo $title ?></title>

</head>
<body>

<section class="login">
<center>
<img src="<?php echo base_url() ?>assets/images/logo_lp2m.png" style="width:450px;height:110px;">
  <br><b style="font-size:20pt">Administrasi Pengajuan Penelitian</b>
  </center>
  <h1>Silahkan Login</h1>
    
     <?php
   // Cetak session
  if($this->session->flashdata('sukses')) {
    echo '<p class="warning" style="margin: 10px 20px;">'.$this->session->flashdata('sukses').'</p>';
  }
  // Cetak error
  echo validation_errors('<p class="warning" style="margin: 10px 20px;">','</p>');
  ?>
    
    <form action="<?php echo base_url('login') ?>" method="post">
      <p>
        <label for="namapengguna">namapengguna</label>
        <input type="text" name="namapengguna" id="namapengguna" class="full">
        
      </p>
      <p>
        <label for="katasandi">katasandi</label>
        <input type="password" name="katasandi" id="katasandi" class="full">
      </p>
      <p>
        <input type="submit" name="submit" id="submit" value="Masuk" class="full">
      </p>
    </form>
    <footer style="color:white"><b>Didukung oleh <a href="http://lp2m.uinsgd.ac.id" target="_blank" style="color:white">lp2m.uinsgd.ac.id<b></a></footer>
</section>
</body>
</html>
