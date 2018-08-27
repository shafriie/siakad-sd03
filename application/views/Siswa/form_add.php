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
	  					<div class="panel-title ">Siswa</div>
						
						<div class="panel-options">
							<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
							<a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
						</div>
		  			</div>
		  			<div class="content-box-large box-with-header">
              <form method="POST" action="<?php echo base_url('Siswa/insert_data'); ?>">
              <div class="row"> 
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="">Username</label>
                    <input placeholder="Username" type="text" name="username" id="username" required class="form-control" autofocus >
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <label for="">Password</label>
                    <input placeholder="Password" type="password" name="password" id="password" required class="form-control" >
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <label for="">Nama</label>
                    <input placeholder="Nama" type="text" name="nama" id="nama" required class="form-control">
                  </div>
                </div>


                <div class="col-md-12">
                  <div class="form-group">
                    <label for="">Nisn</label>
                    <input placeholder="Nisn" type="text" name="nisn" id="nisn" required class="form-control" >
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
                    <select class="form-control" name="kelamin" id="kelamin" required>
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
                    <label for="">Status</label>
                    <textarea class="form-control" name="status" id="status" placeholder="Status"></textarea>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <label for="">Alamat</label>
                    <input placeholder="Alamat" type="text" name="alamat_siswa" id="alamat_siswa" required class="form-control"  >
                  </div>
                </div>



                <div class="col-md-12">
                  <div class="form-group">
                    <label for="">Kelas</label>
                    <input placeholder="Kelas" type="text" name="kelas" id="kelas" required class="form-control"  >
                  </div>
                </div>

                
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="">Ayah</label>
                    <input placeholder="Ayah" type="text" name="ayah" id="ayah" required class="form-control"  >
                  </div>
                </div>


                <div class="col-md-12">
                  <div class="form-group">
                    <label for="">Ibu</label>
                    <input placeholder="Ibu" type="text" name="ibu" id="ibu" required class="form-control"  >
                  </div>
                </div>


                <div class="col-md-12">
                  <div class="form-group">
                    <label for="">Alamat Ortu</label>
                    <input placeholder="Alamat Ortu" type="text" name="alamatortu" id="alamatortu" required class="form-control"  >
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <label for="">Hp Ortu</label>
                    <input placeholder="HP Ortu" type="text" name="hportu" id="hportu" required class="form-control"  >
                  </div>
                </div>


                <div class="col-md-12">
                  <div class="form-group">
                    <label for="">Pekerjaan Ayah</label>
                    <input placeholder="Pekerjaan Ayah" type="text" name="pekerjaanayah" id="pekerjaanayah" required class="form-control"  >
                  </div>
                </div>


                <div class="col-md-12">
                  <div class="form-group">
                    <label for="">Pekerjaan Ibu</label>
                    <input placeholder="Pekerjaan Ibu" type="text" name="pekerjaanibu" id="pekerjaanibu" required class="form-control"  >
                  </div>
                </div>

                 <div class="col-md-12">
                  <div class="form-group">
                    <label for="">Wali</label>
                    <input placeholder="Wali" type="text" name="wali" id="wali" required class="form-control"  >
                  </div>
                </div>

                 <div class="col-md-12">
                  <div class="form-group">
                    <label for="">Alamat Wali</label>
                    <input placeholder="Alamat Wali" type="text" name="alamatwali" id="alamatwali" required class="form-control"  >
                  </div>
                </div>

                 <div class="col-md-12">
                  <div class="form-group">
                    <label for="">Hp Wali</label>
                    <input placeholder="Hp Wali" type="text" name="hpwali" id="hpwali" required class="form-control"  >
                  </div>
                </div>

                 <div class="col-md-12">
                  <div class="form-group">
                    <label for="">Pekerjaan Wali</label>
                    <input placeholder="Pekerjaan Wali" type="text" name="pekerjaanwali" id="pekerjaanwali" required class="form-control"  >
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
