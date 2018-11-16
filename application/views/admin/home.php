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
            <li class="active"><a href="<?php echo base_url()?>Page"><i class="fa fa-fw fa-home"></i> Beranda</a></li>
            <li>
                <a href="#submenu1" data-toggle="collapse"><i class="fa fa-fw fa-book"></i> Absensi Siswa</a>
                <ul id="submenu1" class="list-unstyled collapse">
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
                    <li><a href="<?php echo base_url()?>Page/absen_guru">Input</a></li>
                    <li><a href="<?php echo base_url()?>Page/list_absen_guru">List Absen</a></li>
                </ul>
            </li>
            <li><a href="<?php echo base_url()?>Page/absen"><i class="fa fa-fw fa-user"></i> GDS</a></li>
            <li class="judul"><a href="#"> TAMBAH DATA</a></li>
            <li><a href="<?php echo base_url()?>Page/siswa"><i class="fa fa-fw fa-user"></i> Siswa</a></li>
            <li><a href="<?php echo base_url()?>Page/guru"><i class="fa fa-fw fa-user"></i> Guru</a></li>
			<li><a href="<?php echo base_url()?>Page/matpel"><i class="fa fa-fw fa-book"></i> Matpel</a></li>
        </ul>
    </nav>
    
	<div class="content p-4">
        <h3 class="page-header">Beranda</h3>

        <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="widget-box bg-primary">
            <div class="inner">
              <h3>250</h3>

              <p>Pemasukan</p>
            </div>
            <div class="icon">
              <i class="ion ion-android-archive"></i>
            </div>
            <a href="#" class="widget-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="widget-box bg-success">
            <div class="inner">
              <h3>60<sup style="font-size: 20px">%</sup></h3>

              <p>Grafik</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="widget-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="widget-box bg-warning">
            <div class="inner">
              <h3>300</h3>

              <p>Siswa</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-stalker"></i>
            </div>
            <a href="#" class="widget-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="widget-box bg-danger">
            <div class="inner">
              <h3>6</h3>

              <p>Video</p>
            </div>
            <div class="icon">
              <i class="ion ion-social-youtube"></i>
            </div>
            <a href="#" class="widget-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
	 <div class="main-kontent"> 
<div class="panel panel-admin half1">
				<div class="panel-heading">
					<h3 class="panel-title">Input Data</h3>
				</div>
				<div class="panel-body">
					<form>
						<div class="form-group">
							<label>NIS:</label>
							<input type="text" class="form-control" placeholder="Masukan NIS">
						</div>
						<div class="form-group">
							<label>Nama:</label>
							<input type="text" class="form-control" placeholder="Masukan Nama">
						</div>
						<div class="form-group">
							<label>Kelas:</label>
							<input type="text" class="form-control" placeholder="Masukan Kelas">
						</div>
						<div class="form-group">
							<label>Jurusan:</label>
							<input type="text" class="form-control" placeholder="Jurusan">
						</div>
						<div class="form-group">
							<label>Jenis Kelamin:</label>
							<input type="text" class="form-control" placeholder="Jenis Kelamin">
						</div>
						<button type="submit" class="btn btn-danger">Submit</button>
 
					</form>
				</div>
				</div>
				
				<div class="panel panel-admin half2">
				<div class="panel-heading">
					<h3 class="panel-title">Data Table</h3>
				</div>
				<div class="panel-body">
					<div class="table-responsive">
						<table class="table table-striped table-bordered table-hover" id="dataTables-example">
						<thead>
						<tr>
							<th>NIS</th>
							<th>Nama</th>
							<th>Kelas</th>
							<th>Pembimbing</th>
							<th>Status</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td>3005</td>
							<td>Andre</td>
							<td>12 RPL 1</td>
							<td>Hasrul Harahap</td>
							<td>Berjalan</td>
						</tr>
						<tr>
							<td>3006</td>
							<td>Maul</td>
							<td>12 RPL 1</td>
							<td>Heru Setiawan</td>
							<td>Selesai</td>
						</tr>
						<tr>
							<td>3007</td>
							<td>Ade</td>
							<td>12 RPL 1</td>
							<td>Hasrul Harahap</td>
							<td>Berjalan</td>
						</tr>
						<tr>
							<td>3008</td>
							<td>Harsa</td>
							<td>12 RPL 1</td>
							<td>Ahmad Faisol</td>
							<td>Selesai</td>
						</tr>
						</tbody>
						<tfoot>
						<tr>
							<th>NIS</th>
							<th>Nama</th>
							<th>Kelas</th>
							<th>Pembimbing</th>
							<th>Status</th>
						</tr>
						</tfoot>
						</table>
					</div>
				</div>
			</div>
	</div>		
</div>
	
</div>
</div>