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
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/jquery-ui.css">
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
                    <li><a href="<?php echo base_url()?>Page/rpl"><i class="fa fa-circle text-primary"></i>	RPL</a></li>
                    <li><a href="<?php echo base_url()?>Page/tkr"><i class="fa fa-circle text-danger"></i> TKR</a></li>
                    <li><a href="<?php echo base_url()?>Page/anm"><i class="fa fa-circle text-warning"></i> ANM</a></li>
					<li><a href="<?php echo base_url()?>Page/tpl"><i class="fa fa-circle text-success"></i> TPL</a></li>
					<li><a href="<?php echo base_url()?>Page/bc"><i class="fa fa-circle"></i> BC</a></li>
                </ul>
            </li>
            <li>
                <a href="#submenu2" data-toggle="collapse"><i class="fa fa-fw fa-user"></i> Absensi Guru</a>
                <ul id="submenu2" class="list-unstyled collapse">
                    <li class="active"><a href="<?php echo base_url()?>Page/absen_guru">Input</a></li>
                    <li><a href="<?php echo base_url()?>Page/list_absen_guru">List Absen</a></li>
                </ul>
            </li>
            <li><a href="<?php echo base_url()?>Page/absen"><i class="fa fa-fw fa-user"></i> GDS</a></li>
            <li class="judul"><a href="#"> TAMBAH DATA</a></li>
            <li><a href="<?php echo base_url()?>Page/siswa"><i class="fa fa-fw fa-user"></i> Siswa</a></li>
            <li><a href="<?php echo base_url()?>Page/guru"><i class="fa fa-fw fa-user"></i> Guru</a></li>
        </ul>
    </nav>
    
	<div class="content p-4">
        <h3 class="page-header">Absensi Guru</h3>
			
		<div class="main-kontent"> 
<div class="panel panel-admin half1">
				<div class="panel-heading">
					<h3 class="panel-title">Input Data</h3>
				</div>
				<div class="panel-body">
					<form method="POST" action="<?php echo base_url(); ?>C_absen/tambah">
						<div class="form-group">
							<label>Tanggal</label>
							<input type="date" name="tgl" class="form-control" value="<?php echo date("Y-m-d");?>"  required="">
						</div>
						<div class="form-group">
							<label>Nama</label>
							<input type="text" name="nama" class="form-control" id="search" required="">
						</div>
						<div class="form-group">
							<label>NIP</label>
							<input type="text" name="nip" class="form-control" required="">
						</div>
						<div class="form-group">
							<label for="exampleFormControlSelect1">Status</label>
							<select name="status" class="form-control" id="exampleFormControlSelect1" required="">
								<option>Hadir</option>
								<option>Sakit</option>
								<option>Izin</option>
								<option>Alpha</option>
							</select>
						</div>
						<div class="form-group">
							<label for="exampleFormControlTextarea1">Keterangan</label>
							<textarea name="keterangan" class="form-control" id="exampleFormControlTextarea1" rows="3" required=""></textarea>
						</div>
						<div class="form-group">
							<label>Mata Pelajaran</label>
							<input type="text" name="matpel" class="form-control" id="search2" required="">
						</div>
						<div class="form-group">
							<label>Kelas</label>
							<select name="kelas" class="form-control" required="">
								<?php foreach($kls as $k){ ?>
								<option><?php echo $k->nama_kelas; ?></option>
								<?php } ?>
							</select>
						</div>
						<div class="form-group">
							<label>Jam</label>
							<div class="jam">
							<div class="jam-inline1 col-6">
							<select name="jam_mulai" class="form-control" required="">
								<option>Ke 1</option>
								<option>Ke 2</option>
								<option>Ke 3</option>
								<option>Ke 4</option>
								<option>Ke 5</option>
								<option>Ke 6</option>
								<option>Ke 7</option>
								<option>Ke 8</option>
								<option>Ke 9</option>
							</select>
							</div>
							<div class="jam-inline2 col-6">
							<select name="jam_selesai" class="form-control" required="">
								<option>Ke 2</option>
								<option>Ke 3</option>
								<option>Ke 4</option>
								<option>Ke 5</option>
								<option>Ke 6</option>
								<option>Ke 7</option>
								<option>Ke 8</option>
								<option>Ke 9</option>
								<option>Ke 10</option>
							</select>
							</div>
							</div>
						</div>
						<button type="submit" class="btn btn-danger">Submit</button>
 
					</form>
				</div>
				</div>
	</div>	
			
	
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
<script src="<?php echo base_url()?>assets/js/jquery-ui.js"></script>
<script>
    $(document).ready(function(){
	$('#dataTables-example').dataTable();
		    $('#search').autocomplete({
                source: "<?php echo site_url('C_search/get_autocomplete');?>",
     
                select: function (event, ui) {
                    $('[name="nama"]').val(ui.item.label);
					$('[name="nip"]').val(ui.item.nip);
                }
            });
			
			$('#search2').autocomplete({
                source: "<?php echo site_url('C_search/get_autocomplete2');?>",
     
                select: function (event, ui) {
                    $('[name="matpel"]').val(ui.item.label);
                }
            });

		});
</script>
</body>
</html>
