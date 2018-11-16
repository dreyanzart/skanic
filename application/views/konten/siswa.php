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
            <li class="active"><a href="<?php echo base_url()?>Page/siswa"><i class="fa fa-fw fa-user"></i> Siswa</a></li>
            <li><a href="<?php echo base_url()?>Page/guru"><i class="fa fa-fw fa-user"></i> Guru</a></li>
			<li><a href="<?php echo base_url()?>Page/matpel"><i class="fa fa-fw fa-book"></i> Matpel</a></li>
        </ul>
    </nav>
    
	<div class="content p-4">
        <h3 class="page-header">Siswa</h3>
			<a href="#" class="btn btn-success" data-toggle="modal" data-target="#ModalaAdd">
		<span class="fa fa-plus"></span> Tambah Siswa</a>
		
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
							<th>NIS</th>
							<th>Nama</th>
							<th>Kelas</th>
							<th>Jurusan</th>
							<th>Gender</th>
							<th width="70px;">Option</th>
						</tr>
						</thead>
						<tbody id="show_data">
						
						</tbody>
						<tfoot>
						<tr>
							<th>NIS</th>
							<th>Nama</th>
							<th>Kelas</th>
							<th>Jurusan</th>
							<th>Gender</th>
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
				<h5 class="modal-title" id="myModalLabel">Tambah Siswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
					<form class="form-horizontal">
					<div class="modal-body">
						<div class="form-group">
							<label>NIS:</label>
							<input name="nis" id="nis" type="text" class="form-control" placeholder="Masukan NIS" required="">
						</div>
						<div class="form-group">
							<label>Nama:</label>
							<input name="nama" id="nama" type="text" class="form-control" placeholder="Masukan Nama" required="">
						</div>
						<div class="form-group">
							<label>Kelas:</label>
							<input name="kelas" id="kelas" type="text" class="form-control" placeholder="Masukan Kelas" required="">
						</div>
						<div class="form-group">
							<label>Jurusan:</label>
							<input name="jurusan" id="jurusan" type="text" class="form-control" placeholder="Jurusan" required="">
						</div>
						<div class="form-group">
							<label>Gender:</label>
							<input name="gender" id="gender" type="text" class="form-control" placeholder="Jenis Kelamin" required="">
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
		
		<!--MODAL HAPUS-->
        <div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
						<h5 class="modal-title" id="myModalLabel">Hapus Siswa</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                    </div>
                    <form class="form-horizontal">
                    <div class="modal-body">
                                          
                            <input type="hidden" name="nis" id="nis" value="">
                            <div class="alert alert-warning"><p style="margin:0px;">Apakah anda yakin ingin menghapus?</p></div>
                                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                        <button class="btn_hapus btn btn-danger" id="btn_hapus">Hapus</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!--END MODAL HAPUS-->
		
		<!-- MODAL EDIT -->
        <div class="modal fade" id="ModalaEdit" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
				<h5 class="modal-title" id="myModalLabel">Edit Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                
            </div>
            <form class="form-horizontal">
					<div class="modal-body">
						<div class="form-group">
							<label>NIS:</label>
							<input name="nis_edit" id="nis2" type="text" class="form-control" disabled="">
						</div>
						<div class="form-group">
							<label>Nama:</label>
							<input name="nama_edit" id="nama2" type="text" class="form-control" placeholder="Masukan Nama" required="">
						</div>
						<div class="form-group">
							<label>Kelas:</label>
							<input name="kelas_edit" id="kelas2" type="text" class="form-control" placeholder="Masukan Kelas" required="">
						</div>
						<div class="form-group">
							<label>Jurusan:</label>
							<input name="jurusan_edit" id="jurusan2" type="text" class="form-control" placeholder="Jurusan" required="">
						</div>
						<div class="form-group">
							<label>Gender:</label>
							<input name="gender_edit" id="gender2" type="text" class="form-control" placeholder="Jenis Kelamin" required="">
						</div>
						</div>
						<div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-primary" id="btn_update" type="submit">Update</button>
                </div>
			</form>
            </div>
            </div>
        </div>
        <!--END MODAL EDIT-->
	
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
		//tampil siswa
		function tampil_data(){
		    $.ajax({
		        type  : 'ajax',
		        url   : '<?php echo base_url()?>C_siswa/data_siswa',
		        async : false,
		        dataType : 'json',
		        success : function(data){
		            var html = '';
		            var i;
		            for(i=0; i<data.length; i++){
		                html += '<tr>'+
		                  		'<td>'+data[i].nis+'</td>'+
		                        '<td>'+data[i].nama+'</td>'+
		                        '<td>'+data[i].kelas+'</td>'+
								'<td>'+data[i].jurusan+'</td>'+
								'<td>'+data[i].gender+'</td>'+
		                        '<td align="center">'+
                                    '<a href="javascript:;" class="btn btn-primary item_edit" data="'+data[i].nis+'"><span class="fa fa-pencil-alt"></span></a>'+' '+
                                    '<a href="javascript:;" class="btn btn-danger  item_hapus" data="'+data[i].nis+'"><span class="fa fa-trash"></span></a>'+
                                '</td>'+
		                        '</tr>';
		            }
		            $('#show_data').html(html);
		        }

		    });
		}
		
		//Simpan siswa
		$('#btn_simpan').on('click',function(){
            var nis=$('#nis').val();
            var nama=$('#nama').val();
            var kelas=$('#kelas').val();
			var jurusan=$('#jurusan').val();
			var gender=$('#gender').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('C_siswa/simpan_siswa')?>",
                dataType : "JSON",
                data : {nis:nis , nama:nama, kelas:kelas, jurusan:jurusan, gender:gender},
                success: function(data){
                    $('[name="nis"]').val("");
                    $('[name="nama"]').val("");
                    $('[name="kelas"]').val("");
					$('[name="jurusan"]').val("");
					$('[name="gender"]').val("");
                    $('#ModalaAdd').modal('hide');
                    tampil_data();
                }
            });
            return false;
        });
		
		//Get hapus
		$('#show_data').on('click','.item_hapus',function(){
            var nis=$(this).attr('data');
            $('#ModalHapus').modal('show');
            $('[name="nis"]').val(nis);
        });
		
		//Hapus siswa
        $('#btn_hapus').on('click',function(){
            var nis=$('#nis').val();
            $.ajax({
            type : "POST",
            url  : "<?php echo base_url('C_siswa/hapus_siswa')?>",
            dataType : "JSON",
                    data : {nis: nis},
                    success: function(data){
                            $('#ModalHapus').modal('hide');
                            tampil_data();
                    }
                });
                return false;
        });
		
		//Get Update
		$('#show_data').on('click','.item_edit',function(){
            var id=$(this).attr('data');
            $.ajax({
                type : "GET",
                url  : "<?php echo base_url('C_siswa/get_siswa')?>",
                dataType : "JSON",
                data : {id:id},
                success: function(data){
                	$.each(data,function(nis, nama, kelas, jurusan, gender){
                    	$('#ModalaEdit').modal('show');
            			$('[name="nis_edit"]').val(data.nis);
            			$('[name="nama_edit"]').val(data.nama);
            			$('[name="kelas_edit"]').val(data.kelas);
						$('[name="jurusan_edit"]').val(data.jurusan);
						$('[name="gender_edit"]').val(data.gender);
            		});
                }
            });
            return false;
        });
		
		//UPDATE
		$('#btn_update').on('click',function(){
            var nis=$('#nis2').val();
            var nama=$('#nama2').val();
            var kelas=$('#kelas2').val();
			var jurusan=$('#jurusan2').val();
			var gender=$('#gender2').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('C_siswa/update_siswa')?>",
                dataType : "JSON",
                data : {nis:nis , nama:nama, kelas:kelas, jurusan:jurusan, gender:gender},
                success: function(data){
                    $('[name="nis_edit"]').val("");
                    $('[name="nama_edit"]').val("");
                    $('[name="kelas_edit"]').val("");
					$('[name="jurusan_edit"]').val("");
					$('[name="gender_edit"]').val("");
                    $('#ModalaEdit').modal('hide');
                    tampil_data();
                }
            });
            return false;
        });
		
	});
</script>
</body>
</html>
