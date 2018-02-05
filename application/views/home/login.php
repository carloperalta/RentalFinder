
<div class="row" style="background-image: url('<?php echo base_url();?>bootstrap2/images/slide_2.jpg'); height: 600px; width: 101%;">
  <div class="container" >
    <div class="col-md-5" style="margin: 200px 0 0 0">
        <div class="well">
          <form class="" action="<?php echo base_url();?>Login/validate" method="post">
              <input type="text" name="username" class="form-control"placeholder="Username">
              <input type="password" name="password" class="form-control"placeholder="Password">
              <button type="submit" name="button" class="btn btn-default">Log In</button>
          </form>
          <div class="col-span-md-4">

          </div>

          <div class="col-span-md-4">
            <a href=" <?php echo base_url('Register');?> ">Create an Account</a>
          </div>
        </div>

    </div>
  </div>
</div>
