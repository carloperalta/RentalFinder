<<<<<<< HEAD
  <?php $bgimage = base_url('assets/images/new2.jpg'); ?>
 
 <div style="background-image: url('<?php echo $bgimage?>');background-attachment:fixed;height:100%; max-width: 100%; overflow-x: hidden;">
<div class="row" >
  <div class="container" >
    <div class="row">
      <div class="col-md-12" style="margin:100px 0 0 0">
        
        <div class="well">
          <div class="container-fluid">
            <div class=" col-md-6 align-content-center">
              <img src="<?php echo base_url('rental_logo.png'); ?>" alt="Logo">
            </div> 
          <div class="col-md-6">
            <div class="well">
              <div class="container-fluid">

              <form action="<?php base_url('Register/validate'); ?>" method="post">

              <div class="form-title-row">
                <h3>Sign up</h3>
              </div>
              <hr>
              <?php
                if ( $this->session->flashdata('error')) {
                  echo $this->session->flashdata('error');
                }
                ?>
              <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" class="form-control" id="email" required >
               </div> 

               <div class="form-group">
                <label for="name">Full Name:</label>
                <input type="text" name="name" class="form-control" id="name" required >
               </div> 

            
              <div class="form-group">
                <label for="gender">Gender:</label> <br>
                <input type="radio" name="gender" value="male" checked> Male<br>
                <input type="radio" name="gender" value="female"> Female<br>
              </div>

              <div class="form-group">
                <label for="password"> Password: </label>
                <input type="password" name="password" class="form-control" id="password" required> 
              </div>

              <div class="form-group">
                <label for="confirmpassword">Confirm Password:</label>
                <input type="password" name="confirmpassword" class="form-control" id="confirmpassword" required>
              </div>
              <input type="checkbox" name="terms" required > 
                I accept the 
              <a href=""  data-toggle="modal" data-target="#termsandconditions">Terms and Conditions</a>
              <div class="clearfix">
                <br/>
                <input type="submit" name="register" class="btn btn-primary" style="float: right;" value="Confirm">
              </div>
              </form>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
=======
  <?php $bgimage = base_url('assets/images/new2.jpg'); ?>
 
 <div style="background-image: url('<?php echo $bgimage?>');background-attachment:fixed;height:100%; max-width: 100%; overflow-x: hidden;">
<div class="row" >
  <div class="container" >
    <div class="row">
      <div class="col-md-12" style="margin:100px 0 0 0">
        
        <div class="well">
          <div class="container-fluid">
            <div class=" col-md-6 align-content-center">
              <img src="<?php echo base_url('rental_logo.png'); ?>" alt="Logo">
            </div> 
          <div class="col-md-6">
            <div class="well">
              <div class="container-fluid">

              <form action="<?php base_url('Register/validate'); ?>" method="post">

              <div class="form-title-row">
                <h3>Sign up</h3>
              </div>
              <hr>
              <?php
                if ( $this->session->flashdata('error')) {
                  echo $this->session->flashdata('error');
                }
                ?>
              <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" class="form-control" id="email" required >
               </div> 

               <div class="form-group">
                <label for="name">Full Name:</label>
                <input type="text" name="name" class="form-control" id="name" required >
               </div> 

            
              <div class="form-group">
                <label for="gender">Gender:</label> <br>
                <input type="radio" name="gender" value="male" checked> Male<br>
                <input type="radio" name="gender" value="female"> Female<br>
              </div>

              <div class="form-group">
                <label for="password"> Password: </label>
                <input type="password" name="password" class="form-control" id="password" required> 
              </div>

              <div class="form-group">
                <label for="confirmpassword">Confirm Password:</label>
                <input type="password" name="confirmpassword" class="form-control" id="confirmpassword" required>
              </div>
              <input type="checkbox" name="terms" required > 
                I accept the 
              <a href=""  data-toggle="modal" data-target="#termsandconditions">Terms and Conditions</a>
              <div class="clearfix">
                <br/>
                <input type="submit" name="register" class="btn btn-primary" style="float: right;" value="Confirm">
              </div>
              </form>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
>>>>>>> 7a6b8c9065a2e0f3c92edb110091570377228c0f
</div>