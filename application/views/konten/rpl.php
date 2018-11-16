<!doctype html>
<html lang="en">
<head>
    <title>SKANIC PROJECT</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/dreyanz.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/panel.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/komponen/Ionicons/css/ionicons.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/dataTables.bootstrap4.min.css"/>
</head>
<body>
<div class="wrapper">
<nav class="navbar navbar-expand navbar-dark bg-danger">
    <a class="sidebar-toggle text-light mr-3"><i class="fa fa-bars"></i></a>

    <a class="navbar-brand" href="<?php echo base_url()?>Page"><i class="fa fa-cubes"></i> SKANIC PROJECT</a>

    <div class="navbar-collapse collapse">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown">
                    <i class="fa fa-cog"></i> Pengaturan
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="<?php echo base_url()?>Page/akun">Akun</a>
                    <a class="dropdown-item" href="<?php echo site_url('Welcome/logout') ?>">Keluar</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
<div class="d-flex">
	<nav class="sidebar bg-dark">
	<div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url()?>assets/images/andre.png" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Andre Yansyah</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
        <ul class="list-unstyled">
            <li class="judul"><a href="#"> MENU NAVIGASI</a></li>
            <li><a href="<?php echo base_url()?>Page"><i class="fa fa-fw fa-home"></i> Beranda</a></li>
            <li>
                <a href="#submenu1" data-toggle="collapse"><i class="fa fa-fw fa-book"></i> Absensi Siswa</a>
                <ul id="submenu1" class="list-unstyled collapse nav-menu">
                    <li class="active"><a href="<?php echo base_url()?>Page/rpl"><i class="fa fa-circle text-primary"></i>	RPL</a></li>
                    <li><a href="<?php echo base_url()?>Page/tkr"><i class="fa fa-circle text-danger"></i> TKR</a></li>
                    <li><a href="<?php echo base_url()?>Page/anm"><i class="fa fa-circle text-warning"></i> ANM</a></li>
					<li><a href="<?php echo base_url()?>Page/tpl"><i class="fa fa-circle text-success"></i> TPL</a></li>
					<li><a href="<?php echo base_url()?>Page/bc"><i class="fa fa-circle"></i> BC</a></li>
                </ul>
            </li>
            <li>
                <a href="#submenu2" data-toggle="collapse"><i class="fa fa-fw fa-user"></i> Absensi Guru</a>
                <ul id="submenu2" class="list-unstyled collapse">
                    <li><a href="<?php echo base_url()?>Page/nothing">Nothing</a></li>
                    <li><a href="<?php echo base_url()?>Page/nothing">Nothing</a></li>
					<li><a href="<?php echo base_url()?>Page/nothing">Nothing</a></li>
					<li><a href="<?php echo base_url()?>Page/nothing">Nothing</a></li>
					<li><a href="<?php echo base_url()?>Page/nothing">Nothing</a></li>
                </ul>
            </li>
            <li><a href="<?php echo base_url()?>Page/absen"><i class="fa fa-fw fa-user"></i> GDS</a></li>
            <li class="judul"><a href="#"> TAMBAH DATA</a></li>
            <li><a href="<?php echo base_url()?>Page/siswa"><i class="fa fa-fw fa-user"></i> Siswa</a></li>
            <li><a href="<?php echo base_url()?>Page/guru"><i class="fa fa-fw fa-user"></i> Guru</a></li>
        </ul>
    </nav>
    
	<div class="content p-4">
        <h3 class="page-header">Rekayasa Perangkat Lunak</h3>
			
		
			
	
	</div>
</div>
</div>
<script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url()?>assets/js/sidebar.min.js"></script>
<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>assets/js/dreyanz.js"></script>
<script src="<?php echo base_url()?>assets/js/jquery-1.10.2.js"></script>
<script src="<?php echo base_url()?>assets/js/jquery.dataTables.js"></script>
<script src="<?php echo base_url()?>assets/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function () {
    $('#dataTables-example').dataTable();
	});
</script>
</body>
</html>
