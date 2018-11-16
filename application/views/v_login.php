<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <title>Login | Guru Piket</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/fontawesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/login.css">
</head>
<body class="text-center">
    <form class="form-signin" action="<?php echo site_url('Welcome/Ceklogin') ?>" method="post">
		<h3>SKANIC POJECT<h3>
      <img class="mb-4" src="<?php echo base_url()?>assets/images/logo.png" alt="" width="72" height="72">
      <input name="user" type="text" class="form-control" placeholder="Username" required="" autofocus="">
      <input name="pass" type="password" class="form-control" placeholder="Password" required="" autofocus="">
	  <?php echo $this->session->flashdata('message'); ?>
      <button name="login" class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
	<p>© 2018 S1C. All rights reserved | Powered by<a href="#"> SMK NEGERI 1 CIOMAS  </a></p>
    </form>
 </body>
</html>