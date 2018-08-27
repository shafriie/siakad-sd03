<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	              	<font style="font-family: Goudy Stout;color:white;font-size: 30px"><?php echo $this->session->userdata('nama_sekolah'); ?></font>
	                 <!-- <h1 style="font-family: "><a href="">SDN ANCOL 03</a></h1> -->
	              </div>
	           </div>
	           <div class="col-md-5">
	              <div class="row">
	                <div class="col-lg-12">
	                  <!-- <div class="input-group form">
	                       <input type="text" class="form-control" placeholder="Search...">
	                       <span class="input-group-btn">
	                         <button class="btn btn-primary" type="button">Search</button>
	                       </span>
	                  </div> -->
	                </div>
	              </div>
	           </div>
	           <div class="col-md-2">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account <b class="caret"></b></a>
	                        <ul class="dropdown-menu">
	                          <li><a data-toggle="modal" data-target="#modal-profile">Profile</a></li>
	                          <li><a href="<?php echo base_url('Logout'); ?>">Logout</a></li>
	                        </ul>
	                      </li>
	                    </ul>
	                  </nav>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>


	<!-- Modal -->
<div id="modal-profile" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Profile</h4>
      </div>
      <div class="modal-body">
        <div class="row">
        	<div class="col-md-12">
        		<div class="form-group">
        			<label for="">Username</label>
        			<input type="text" readonly value="<?php echo $this->session->userdata('username'); ?>" class="form-control">
        		</div>
        	</div>


        	<div class="col-md-12">
        		<div class="form-group">
        			<label for="">Full Name</label>
        			<input class="form-control" type="text" readonly value="<?php echo $this->session->userdata('nama_lengkap'); ?>">
        		</div>
        	</div>

        	<div class="col-md-12">
        		<div class="form-group">
        			<label for="">Status</label>
        			<input class="form-control" type="text" readonly value="<?php echo ($this->session->userdata('status') == '1')?'Admin':'Siswa' ?>">
        		</div>
        	</div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- end modal -->