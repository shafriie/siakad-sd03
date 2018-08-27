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
	  					<div class="panel-title ">Guru</div>
						
						<div class="panel-options">
							<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
							<a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
						</div>
		  			</div>
		  			<div class="content-box-large box-with-header">
              <form method="POST" action="<?php echo base_url('Guru/insert_data'); ?>">
              <div class="row"> 
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="">Nip</label>
                    <input placeholder="NIP" type="text" name="nip" id="nip" required class="form-control" autofocus >
                  </div>
                </div>


                <div class="col-md-12">
                  <div class="form-group">
                    <label for="">Nama</label>
                    <input placeholder="Nama Guru" type="text" name="nama" id="nama" required class="form-control" >
                  </div>
                </div>


                <div class="col-md-12">
                  <div class="form-group">
                    <label for="">Tempat Lahir</label>
                    <input placeholder="Tempat Lahir" type="text" name="tempat_lahir" id="tempat_lahir" required class="form-control" autofocus >
                  </div>
                </div>


                <div class="col-md-12">
                  <div class="form-group">
                    <label for="">Tanggal Lahir</label>
                    <input placeholder="Tanggal Lahir" type="date" name="tgl_lahir" id="tgl_lahir" required class="form-control" autofocus >
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <label for="">Jenis Kelamin</label>
                    <select class="form-control" name="jenis_kelamin" id="jenis_kelamin" required>
                      <option value="">-- Select --</option>
                      <option value="Laki-laki">Laki-laki</option>
                      <option value="Perempuan">Perempuan</option>
                    </select>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <label for="">Agama</label>
                      <select name="agama" id="agama" class="form-control" required>
                      <option value="">-- Select --</option>
                      <option value="Islam">Islam</option>
                      <option value="Kristen">Kristen</option>
                      <option value="Buddha">Buddha</option>
                      <option value="Hindu">Hindu</option>
                      <option value="Konghucu">Konghucu</option>

                    </select>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <label for="">Alamat</label>
                    <textarea class="form-control" name="alamat" id="alamat" placeholder="Alamat"></textarea>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <label for="">Pendidikan</label>
                    <input placeholder="Pendidikan" type="text" name="pendidikan" id="pendidikan" required class="form-control"  >
                  </div>
                </div>


                <div class="col-md-12">
                  <div class="form-group">
                    <label for="">Jabatan</label>
                    <input placeholder="Jabatan" type="text" name="jabatan" id="jabatan" required class="form-control"  >
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