<div class="row" style="background-image: url('<?php echo base_url();?>bootstrap2/images/slide_2.jpg'); height: 100%; width: 101%;">

<div class="row" style="margin: 150px 0 0 0">
  <div class="col-md-4">
  </div>

  <div class="container">
    <div class="col-md-5">
        <div class="well">

          <form class="" action="<?php echo base_url();?>Login/validate" method="post">
              <h1>Tenant Registration</h1>

              <label><b>First Name:</b></label>
              <input type="text" name="first name" class="form-control"placeholder="Enter First Name">

              <label><b>Middle Name:</b></label>
              <input type="text" name="middle initial" class="form-control"placeholder="Enter Middle Initial">

              <label><b>Last Name:</b></label>
              <input type="text" name="last name" class="form-control"placeholder="Enter Last Name">

              <label><b>Birthdate:</b></label>
              <input type="date" name="birthdate" class="form-control">

              <label><b>Contact Number:</b></label>
              <input type="text" name="contact number" class="form-control"placeholder="Enter Contact Number">

              <label><b>Email Address:</b></label>
              <input type="text" name="email" class="form-control"placeholder="Enter Email">

              <label><b>Username:</b></label>
              <input type="text" name="username" class="form-control"placeholder="Enter Username">

              <label><b>Password</b></label>
              <input type="password" name="password" class="form-control"placeholder="Enter Password">

              <label><b>Confirm Password:</b></label>
              <input type="password" name="password2" class="form-control"placeholder="Confirm Password">

              <div class="clearfix">
                <button type="button" name="button" class="btn btn-default">Cancel</button>
                <button type="submit" name="button" class="btn btn-default">Sign Up</button>
              </div>
          </form>

    </div>
  </div>
</div>
</div>
