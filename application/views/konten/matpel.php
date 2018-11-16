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
			<li class="active"><a href="<?php echo base_url()?>Page/matpel"><i class="fa fa-fw fa-book"></i> Matpel</a></li>
        </ul>
    </nav>
    
	<div class="content p-4">
        <h3 class="page-header">Mata Pelajaran</h3>
			<a href="#" class="btn btn-success" data-toggle="modal" data-target="#ModalaAdd">
			<span class="fa fa-plus"></span> Tambah Mata Pelajaran</a>
			
			<!-- MODAL VIEW -->
			<div class="panel panel-admin col-lg-12">
				<div class="panel-heading">
					<h3 class="panel-title">Data Table</h3>
				</div>
				<div class="panel-body">
				<div id="reload">
					<div class="table-responsive">
						<table class="table table-striped table-bordered table-hover" id="dataTables-example">
						<thead>
						<tr>
							<th>Nama Pelajaran</th>
							<th width="70px;">Option</th>
						</tr>
						</thead>
						<tbody id="show_data">
						
						</tbody>
						<tfoot>
						<tr>
							<th>Nama Pelajaran</th>
							<th width="70px;">Option</th>
						</tr>
						</tfoot>
						</table>
					</div>
				</div>
				</div>
			</div>
			<!-- END MODAL VIEW -->
			
			<!-- MODAL ADD -->
        <div class="modal fade" id="ModalaAdd" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
				<h5 class="modal-title" id="myModalLabel">Tambah Mata Pelajaran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
					<form class="form-horizontal">
					<div class="modal-body">
						<div class="form-group">
							<label>Pelajaran:</label>
							<input name="matpel" id="matpel" type="text" class="form-control" placeholder="Masukan Matpel" required="">
						</div>
						</div>
						<div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-primary" id="btn_simpan" type="submit">Simpan</button>
                </div>
					</form>
            
            </div>
            </div>
        </div>
        <!--END MODAL ADD-->
		
			
	
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
		tampil_data();
		$('#dataTables-example').dataTable();
		//tampil matpel
		function tampil_data(){
		    $.ajax({
		        type  : 'ajax',
		        url   : '<?php echo base_url()?>C_matpel/data_matpel',
		        async : false,
		        dataType : 'json',
		        success : function(data){
		            var html = '';
		            var i;
		            for(i=0; i<data.length; i++){
		                html += '<tr>'+
		                        '<td>'+data[i].matpel+'</td>'+
		                        '<td align="center">'+
                                    '<a href="javascript:;" class="btn btn-primary item_edit" data="'+data[i].kd_matpel+'"><span class="fa fa-pencil-alt"></span></a>'+' '+
                                    '<a href="javascript:;" class="btn btn-danger  item_hapus" data="'+data[i].kd_matpel+'"><span class="fa fa-trash"></span></a>'+
                                '</td>'+
		                        '</tr>';
		            }
		            $('#show_data').html(html);
		        }

		    });
		}
		
		//Simpan matpel
		$('#btn_simpan').on('click',function(){
            var kd_matpel=$('#kd_matpel').val();
            var matpel=$('#matpel').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('C_matpel/simpan_matpel')?>",
                dataType : "JSON",
                data : {kd_matpel:kd_matpel , matpel:matpel},
                success: function(data){
                    $('[name="kd_matpel"]').val("");
                    $('[name="matpel"]').val("");
                    $('#ModalaAdd').modal('hide');
                    tampil_data();
                }
            });
            return false;
        });
			
		
	});
</script>
</body>
</html>
