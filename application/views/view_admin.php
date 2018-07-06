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
      	
        <li class="nav-item active" data-toggle="tooltip" data-placement="right" title="Dashboard">
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
	        <li class="breadcrumb-item active">Dashboard</li>
	      </ol>

		    <div class="row">
			  <div id="" class="box-wrap">
	
			    <div class="col-md-4 respon">
			      <div class="bignotepad bignotepad- bignotepad-medium">
			          <div class="bignotepad-inner">
			              <div class="img-notepad">
		                   <i class="fa fa-user"></i>               
			              </div>
			              <div class="img-desc">
			                <h3>SUPLIER</h3>
			              </div>
                    <div class="img-desc">
                      <h3>10</h3>
                    </div>  
			                              
			              <div class="bignotepad-footer btn-position" >
			                 <a href="<?php echo base_url('adminController/page_suplier'); ?>" class="btn btn-direct">
			                    <span>Panel Suplier</span>
			                 </a>
			              </div>     
			          </div>
			      </div>
			    </div>
          <div class="col-md-4 respon">
            <div class="bignotepad bignotepad- bignotepad-medium">
                <div class="bignotepad-inner">
                    <div class="img-notepad">
                       <i class="fa fa-archive"></i>               
                    </div>
                    <div class="img-desc">
                      <h3>Produk</h3>
                    </div>
                    <div class="img-desc">
                      <h3>1000</h3>
                    </div>  
                                    
                    <div class="bignotepad-footer btn-position" >
                       <a href="<?php echo base_url('adminController/page_produk'); ?>" class="btn btn-direct">
                          <span>Panel Produk</span>
                       </a>
                    </div>     
                </div>
            </div>
          </div>
          <div class="col-md-4 respon">
            <div class="bignotepad bignotepad- bignotepad-medium">
                <div class="bignotepad-inner">
                    <div class="img-notepad">
                       <i class="fa fa-cubes"></i>               
                    </div>
                    <div class="img-desc">
                      <h3>KATEGORI</h3>
                    </div>
                    <div class="img-desc">
                      <h3>2</h3>
                    </div>  
                                    
                    <div class="bignotepad-footer btn-position" >
                       <a href="<?php echo base_url('adminController/page_kategori'); ?>" class="btn btn-direct">
                          <span>Panel Kategori</span>
                       </a>
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

