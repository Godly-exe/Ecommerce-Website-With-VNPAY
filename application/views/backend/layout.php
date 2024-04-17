<!DOCTYPE html>
<html>
<head>
	<base href="<?php echo base_url(); ?>"></base>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title ?></title>
  <link rel="icon" type="image/x-icon" href="public/images/iconu.png">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="public/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="public/css/font-awesome.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="public/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="public/css/AdminLTE.css">
  <link rel="stylesheet" href="public/css/ionicons.min.css">
  <meta property="fb:app_id" content="659513967881060">
  
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="public/css/_all-skins.min.css">

  
   <script src="public/js/loader.js"></script>
   <script src="public/ckeditor/ckeditor.js"></script>
   <style>
    .content-header h1, th, label{
      color: #333;
    }
    label{font-weight: 600 !important;}
    .maudo{color: red}
    .mauxanh18{color: green;}
  </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <!-- Vung Header -->
    <?php $this->load->view('backend/modules/header'); ?>


    <!-- ./Vung Header -->
    <?php $this->load->view('backend/modules/menu'); ?>
    <?php 
    if(isset($com, $view))
    {
      $this->load->view('backend/components/'.$com.'/'.$view);
    }

    ?>

  </div><!-- ./wrapper -->
  <!-- jQuery 2.2.3 -->
  <script src="public/js/jquery-2.2.3.min.js"></script>
  <!-- Bootstrap 3.3.6 -->
  <script src="public/js/bootstrap.js"></script>
  <!-- AdminLTE App -->
  <script src="public/js/app.min.js"></script>
</body>
</html>
