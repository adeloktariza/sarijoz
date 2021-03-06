<?php include 'includes/header.php'; ?>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <img class="logo-sari" src="<?php echo base_url();?>/assets/images/logo_fix.jpg">
    <a class="navbar-brand" href="#">PT. SARIJOZ INDONESIA</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="<?php echo base_url('adminController'); ?>">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">&nbsp;Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Laporan">
          <a class="nav-link" href="<?php echo base_url('adminController/page_produk'); ?>">
            <i class="fa fa-fw fa-cog"></i>
            <span class="nav-link-text">&nbsp;Manajemen Produk</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Kategori">
          <a class="nav-link" href="<?php echo base_url('adminController/page_suplier'); ?>">
            <i class="fa fa-fw fa-cog"></i>
            <span class="nav-link-text">&nbsp;Manajemen Suplier</span>
          </a>
        </li>
        <li class="nav-item active" data-toggle="tooltip" data-placement="right" title="Laporan">
          <a class="nav-link" href="<?php echo base_url('adminController/page_kategori'); ?>">
            <i class="fa fa-fw fa-cog"></i>
            <span class="nav-link-text">&nbsp;Manajemen Kategori</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Kategori">
          <a class="nav-link" href="<?php echo base_url('adminController/page_user'); ?>">
            <i class="fa fa-fw fa-cog"></i>
            <span class="nav-link-text">&nbsp;Manajemen User</span>
          </a>
        </li>
       
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
      	<li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal" href="#">
          		Hai <?= $username?>
          </a>
        </li>
		<li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal" href="<?php echo base_url('adminController/logout'); ?>">
            <i class="fa fa-fw fa-sign-out"></i>Keluar
          </a>
        </li>
      </ul>
    </div>
  </nav>
  	<div class="content-wrapper">
	    <div class="container-fluid">
	      <!-- Breadcrumbs-->
	      <ol class="breadcrumb">
	        <li class="breadcrumb-item">
	          <a href="#">Admin Panel</a>
	        </li>
	        <li class="breadcrumb-item active">Manajemen Kategori</li>
	      </ol>

		    <div class="row">
			  <div id="" class="box-wrap">
	
			  	<div class="col-md-12 suplier-p">
			  		<div class="panel panel-default">
            <div class="panel-heading" style="border: none; margin:0 10px;">
                <a class="btn btn-flat btn-labeled btn-primary" href="" data-toggle="modal" data-target="#tambah-kategori">
                  <span class="btn-label icon fa fa-download"></span>&nbsp;&nbsp;Tambah data kategori
                </a>
            </div>
						<div class="panel-body">
								<table class="table list-t" style="border: 1px solid #ccc;">
								  <thead class="thead-dark">
								    <tr>
								      <th scope="col">ID_kategori</th>
								      <th scope="col">Nama Kategori</th>
								      <th scope="col">Keterangan</th>
                      <th scope="col">Aksi</th>
								    </tr>
								  </thead>
								  <tbody>
								  	<?php 

	     							if($kategori != null){
								  	
								  	foreach ($kategori as $k) { ?>
								    
								    <tr>
								      <th class="id_table"><?php echo $k->id_kategori?></th>
								      <td class="id_table"><?php echo $k->nama_kategori?></td>
                      <td class="id_table"><?php echo $k->keterangan_kategori?></td>
								      <td class="id_table">
								      	  <button type='button' class='btn btn-danger' data-toggle="modal" data-target="#hapus-kategori-<?php echo $k->id_kategori;?>"><i class="fa fa-trash-o" aria-hidden="true"></i></button>

                          <button type='button' class='btn btn-primary' data-toggle="modal" data-target="#edit-kategori-<?php echo $k->id_kategori;?>"><i class="fa fa-pencil" aria-hidden="true"></i></button>

								      </td>
								    </tr>

									<?php } } ?>


								  
								  </tbody>
								</table>
							
						</div>
					</div>
					
			  	</div>

			  </div>
		    </div>
			<!-- --------------------------------------------------------- -->
	     
	    </div>


   	</div>
  
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->

    <?php if($kategori != null){
                    
    foreach ($kategori as $k) { ?>

    <div class="modal fade" id="hapus-kategori-<?php echo $k->id_kategori;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Apakah anda ingin menghapus kategori <?php echo $k->nama_kategori;?>?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Tidak</button>
            <a class="btn btn-primary" href="<?php echo base_url('adminController/delete_kategori')?>/<?php echo $k->id_kategori;?>">Ya</a>
          </div>
        </div>
      </div>
    </div>

  <?php } } ?>


    <?php if($kategori != null){
                    
    foreach ($kategori as $k) { ?>

    <div class="modal fade" id="edit-kategori-<?php echo $k->id_kategori;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Data kategori</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>

          <div class='modal-body'>
                <form role="form" action="<?php echo base_url('AdminController/update_kategori');?>/<?php echo $k->id_kategori;?>" method="post">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Kategori</label>
                  <input type="text" class="form-control" id="nama_kategori" aria-describedby="emailHelp" placeholder="Masukkan nama kategori" name="nama_kategori" value="<?php echo $k->nama_kategori?>" required autofocus>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Keterangan</label>
                 <textarea class="form-control" id="keterangan_kategori" rows="4" name="keterangan_kategori" placeholder="Masukkan keterangan"><?php echo $k->keterangan_kategori?></textarea>
                </div>

                <button type="submit" class="btn btn-primary" style="width: 100%;">Simpan</button>
                <button data-dismiss="modal" class="btn btn-secondary" style="width: 100%;">Batal</button>
              </form>
          </div>
          
        </div>
      </div>
    </div>

    <?php } } ?>

    <div class="modal fade" id="tambah-kategori" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Data Kategori</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>

          <div class='modal-body'>
                <form role="form" action="<?php echo base_url('AdminController/add_kategori');?>" method="post">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Kategori</label>
                  <input type="text" class="form-control" id="nama_kategori" aria-describedby="emailHelp" placeholder="Masukkan nama kategori" name="nama_kategori" required autofocus>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Keterangan</label>
                 <textarea class="form-control" id="keterangan_kategori" rows="4" name="keterangan_kategori" placeholder="Masukkan keterangan"></textarea>
                </div>

                <button type="submit" class="btn btn-primary" style="width: 100%;">Tambah</button>
                <button data-dismiss="modal" class="btn btn-secondary" style="width: 100%;">Batal</button>
              </form>
          </div>
          
        </div>
      </div>
    </div>




    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin untuk keluar?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Anda akan dikembalikan ke halaman login.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
            <a class="btn btn-primary" href="<?php echo base_url('login/logout')?>">Keluar</a>
          </div>
        </div>
      </div>
    </div>

  </div>
</body>

<?php include 'includes/footer.php'; ?>

