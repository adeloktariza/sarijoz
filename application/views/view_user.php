<?php include 'includes/header.php'; ?>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <img class="logo-sari" src="<?php echo base_url();?>/assets/images/logo_fix.jpg">
    <a class="navbar-brand" href="index.html">PT. SARIJOZ INDONESIA</a>
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
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Laporan">
          <a class="nav-link" href="<?php echo base_url('adminController/page_kategori'); ?>">
            <i class="fa fa-fw fa-cog"></i>
            <span class="nav-link-text">&nbsp;Manajemen Kategori</span>
          </a>
        </li>
        <li class="nav-item active" data-toggle="tooltip" data-placement="right" title="Kategori">
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
	          <a href="#">Admin sarijoz</a>
	        </li>
	        <li class="breadcrumb-item active">Manajemen User</li>
	      </ol>

		    <div class="row">
			  <div id="" class="box-wrap">
	
			  	<div class="col-md-12">
			  		<div class="panel panel-default">
						<div class="panel-body">
							<div class="col-md-6">

								<table class="table list-t" style="border: 1px solid #ccc;">
								  <thead class="thead-dark">
								    <tr>
								      <th scope="col">ID_User</th>
								      <th scope="col">Username</th>
								      <th scope="col">Aksi</th>
								    </tr>
								  </thead>
								  <tbody>
								  	<?php 

	     							if($user != null){
								  	
								  	foreach ($user as $u) { ?>
								    
								    <tr>
								      <th class="id_table"><?php echo $u->id_user?></th>
								      <td><?php echo $u->username?></td>
								      <td class="id_table">
								      	  <button type='button' class='btn btn-danger' data-toggle="modal" data-target="#hapus-user-<?php echo $u->id_user;?>"><i class="fa fa-trash-o" aria-hidden="true"></i>&nbsp;&nbsp;Hapus</button>

								      </td>
								    </tr>

									<?php } } ?>
								  
								  </tbody>
								</table>
							</div>
              <div class="col-md-1"></div>
              <div class="col-md-5 page-b">
              <form role="form" action="<?php echo base_url('AdminController/add_user');?>" method="post">
                <div class="form-group">
                  <label for="exampleInputEmail1">Tambahkan Admin Baru</label>
                  <input type="text" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Masukkan Username Baru" name="username" required autofocus>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="password" placeholder="Password baru" name="password" required>
                </div>

                <button type="submit" class="btn btn-primary" style="width: 100%;">Tambah</button>
              </form>
              </div>
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

    <?php if($user != null){
                    
    foreach ($user as $u) { ?>

    <div class="modal fade" id="hapus-user-<?php echo $u->id_user;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Apakah anda ingin menghapus <?php echo $u->username;?>?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Tidak</button>
            <a class="btn btn-primary" href="<?php echo base_url('adminController/delete_user')?>/<?php echo $u->id_user;?>">Ya</a>
          </div>
        </div>
      </div>
    </div>

  <?php } } ?>


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

