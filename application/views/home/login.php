
<div class="row" style="background-image: url('<?php echo base_url();?>bootstrap2/images/slide_21.jpg');background-size: 100% 100%"> 
  <div class="container" >
    <div class="col-md-5" style="margin: 200px 0 0 0">
        <div class="well">
          <h2 style="text-align: center;">Welcome to Rental Finder</h2>

          <?php
              if ($this->session->flashdata('success')) {
                echo '<div class="alert alert-success">'.$this->session->flashdata('success').'</div>';
              }else if ($this->session->flashdata('error')) {
                echo '<div class="alert alert-danger">'.$this->session->flashdata('error').'</div>';
              }
            ?>

          <form class="" action="" method="post">
            <div class="col-md-4">
              
            </div>
              <input type="text" name="username" class="form-control" placeholder="Username" id="username" required="">
              <input type="password" name="password" class="form-control" placeholder="Password" id="password" required=""> 
              <br>
              <a href=" <?php echo base_url('Register');?>" >Create an Account</a>
              <button class="btn btn-primary" style="margin-right:0;float:right;">Log In</button>

          </form>
          <div class="col-md-4">

          </div>
          <br>
          <div class="col-span-md-4">
          </div>
        </div>

    </div>
  </div>
</div>
