<!DOCTYPE html>
<html>
  <head>
    <?php $this->load->view('Layout/title'); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="<?php echo base_url('asset/') ?>bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="<?php echo base_url('asset/') ?>css/styles.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	
  	<?php $this->load->view('Menu/header') ?>

    <div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
		  	<?php $this->load->view('Menu/sidebar'); ?>
		  </div>
		  <div class="col-md-10">
		  	

		  	<div class="row">
		  		<div class="col-md-12 panel-warning">
		  			<div class="content-box-header panel-heading">
	  					<div class="panel-title ">Sekolah</div>
						
						<div class="panel-options">
							<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
							<a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
						</div>
		  			</div>
		  			<div class="content-box-large box-with-header">
              <form method="POST" action="<?php echo base_url('Sekolah/insert_data'); ?>">
              <div class="row"> 
                
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="">Nama</label>
                    <input placeholder="Nama" type="text" name="nama" id="nama" required class="form-control" autofocus >
                  </div>
                </div>


                <div class="col-md-12">
                  <div class="form-group">
                    <label for="">Nss</label>
                    <input placeholder="Nss" type="text" name="nss" id="nss" required class="form-control" >
                  </div>
                </div>


                <div class="col-md-12">
                  <div class="form-group">
                    <label for="">Nis</label>
                    <input placeholder="Nis" type="text" name="nis" id="nis" required class="form-control" >
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <label for="">Ntsn</label>
                    <input placeholder="Ntsn" type="text" name="ntsn" id="ntsn" required class="form-control" >
                  </div>
                </div>


                <div class="col-md-12">
                  <div class="form-group">
                    <label for="">Skpd</label>
                    <input placeholder="Skpd" type="text" name="skpd" id="skpd" required class="form-control" >
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <label for="">Alamat</label>
                    <input placeholder="Alamat" type="text" name="alamat" id="alamat" required class="form-control" >
                  </div>
                </div>


                <div class="col-md-12">
                  <div class="form-group">
                    <label for="">Nomor</label>
                    <input placeholder="Nomor" type="text" name="nomor" id="nomor" required class="form-control" >
                  </div>
                </div>


                <div class="col-md-12">
                  <div class="form-group">
                    <label for="">Fax</label>
                    <input placeholder="Fax" type="text" name="fax" id="fax" required class="form-control" >
                  </div>
                </div>


                <div class="col-md-12">
                  <div class="form-group">
                    <label for="">Email</label>
                    <input placeholder="Email" type="text" name="email" id="email" required class="form-control" >
                  </div>
                </div>


                <div class="col-md-12">
                  <div class="form-group">
                    <label for="">Profile</label>
                    <input placeholder="Profil" type="text" name="profile" id="profile" required class="form-control" >
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <label for="">Tahun</label>
                    <input placeholder="Tahun" type="text" name="tahun" id="tahun" required   class="form-control" >
                  </div>
                </div>


                <div class="col-md-12">
                  <div class="form-group">
                    <label for="">Semeseter</label>
                    <input placeholder="Semeseter" type="text" name="semester" id="semester" required class="form-control" >
                  </div>
                </div>

                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <button type="submit" class="btn btn-danger">Submit</button>
                    <button type="reset" class="btn btn-primary">Clear</button>
                  </div>
                </div>
              </div>
              </form>

						<br /><br />
					</div>
		  		</div>
		  	</div>
		  </div>
		</div>
    </div>

    <!-- footer -->
    <?php $this->load->view('Menu/footer') ?>
    <!-- end footer -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url('asset/') ?>bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url('asset/') ?>js/custom.js"></script>
  </body>
</html>