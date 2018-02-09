<div class="row" style="background-image: url('<?php echo base_url();?>bootstrap/images/slide_2.jpg'); height: 100%; width: 100% 100%;">

<div class="row" style="margin: 150px 0 0 0">
  <div class="col-md-4">
  </div>

  <div class="container">
    <div class="col-md-6">

        <div class="well">

          <h1>Owner Registration</h1>

          <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>

          <form class="" action="" method="POST">

              <div class="form-group">
                <label for="firstname"><b>First Name:</b></label>
                <input type="text" name="firstname" id="firstname" class="form-control" required placeholder="Enter First Name">
              </div>

              <div class="form-group">    
                <label for="middlename"><b>Middle Name:</b></label>
                <input type="text" name="middlename" id="middlename" class="form-control" required placeholder="Enter Middle Name">
              </div>

              <div class="form-group">
                <label for="lastname"><b>Last Name:</b></label>
                <input type="text" name="lastname" id="lastname" class="form-control" required placeholder="Enter Last Name">
              </div>

              <div class="form-group">
                <label for="gender">Gender:</label>
                <select name="gender" class="form-control" id="gender" required>
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                </select>
              </div>

              <div class="form-group">
                <label for="birthdate"><b>Birthdate:</b></label>
                <input type="date" name="birthdate" id="birthdate" class="form-control" required>
              </div>

              <div class="form-group">
                <label for="contact"><b>Contact Number:</b></label>
                <input type="number" id="contact" name="contact" class="form-control" required placeholder="Enter Contact Number">
              </div>

              <div class="form-group">
                <label for="email"><b>Email Address:</b>  </label>
                <input type="email" name="email" id="email" class="form-control" required placeholder="Enter Email">
              </div>

              <div class="form-group">
                <label for="username"><b>Username (6-15 characters)</b></label>
                <input type="text" name="username" id="username" class="form-control" required placeholder="Enter Username">
              </div>

              <div class="form-group">
                <label for="password"><b>Password (6-15 characters)</b>  </label>
                <input type="password" name="password" id="password" class="form-control" required placeholder="Enter Password">
              </div>

              <div class="form-group">
                <label for="confirmpassword"><b>Confirm Password:</b></label>
                <input type="password" name="confirmpassword" id="confirmpassword" required class="form-control" placeholder="Confirm Password">
              </div>

              <input type="checkbox" name="terms" required > I accept the <u>Terms and Conditions</u>
              <div class="clearfix">
                <br/>
                <a href="<?php echo base_url('Register')?>" class="btn btn-danger">Cancel</a>
                <button class="btn btn-primary" name="register">Confirm</button>
              </div>
          </form>

    </div>
  </div>
</div>
</div>
