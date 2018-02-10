<div class="row" style="background-image: url('<?php echo base_url();?>assets/images/new2.jpg');background-attachment:fixed; height:100%; margin:0">

  <div class="row" style="height: 100%;margin: 100px 0 0 0">
    <div class="col-md-4">
      
    </div>

    <div class="col-md-4">
      <div class="row">
        
        <div class="well">
          <h2 style="text-align: center;">Welcome to Rental Finder</h2>

          <?php
              if ($this->session->flashdata('error')) {
                echo '<div class="alert alert-danger">'.$this->session->flashdata('error').'</div>';
              }
            ?>

          <form class="" action="" method="post">
              <input type="text" name="username" class="form-control" placeholder="Username" id="username" required="">
              <input type="password" name="password" class="form-control" placeholder="Password" id="password" required=""> 
              <br>
              <a href=" <?php echo base_url('Register');?>" >Create an Account</a>
              <button class="btn btn-primary" style="margin-right:0; float:right;">Log In</button>
          </form>
        </div>
      </div>


    </div>
  </div>
</div>
