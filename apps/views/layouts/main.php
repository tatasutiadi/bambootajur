<?php
$this->load->library('Layouts');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Green Bamboo Terrace</title>
  <meta name="description" content="Green Bamboo terrace adalah sebuah cluster hunian seluas 1.7 ha yang hijau dan nyaman berlokasi di wilayah Kota Tajur-Bogor. Rumah Tinggal Keluarga yang Harmonis akan menciptakan fondasi dan filosofi yang utuh seperti halnya tanaman bambu yang menjadi konsep utama dari perumahan Green Bamboo Terace">
  <meta name="keywords" content="Green Bamboo,rumah huni,properti,green bamboo, bamboo tajur">
  <meta name="author" content="tsar">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="icon" href="<?php echo base_url();?>assets/images/ico16.png" type="image/gif" sizes="16x16">
  <!-- Stylesheet -->
  <?php echo $this->layouts->print_includes('css'); ?>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <!-- End Stylesheet-->
</head>
<body>
  <?= $content?>
  <?php echo $this->layouts->print_includes('js'); ?>
</body>
</html>
