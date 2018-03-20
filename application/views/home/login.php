
  <div class="container" >
    <div class="row">
      <div class="col-md-12" style="margin:100px 0 0 0">
        
        <div class="well">
          <div class="container-fluid">
            <div class=" col-md-6 align-content-center">
              <img class="img-fluid" src="<?php echo base_url('rental_logo.png'); ?>" alt="Logo">
            </div> 
          <div class="col-md-6">
            <div class="well">
              <div class="container-fluid">
                <form action="<?php base_url('Login'); ?>" method="post">
              <div class="form-title-row">
                <h3>Log In</h3>
              </div>

              <a href=" <?php echo $authUrl?>">
                <img src=" <?php echo base_url('assets/images/flogin.png')?>" alt="facebooklogin" style="width:210px;height:40px;float: right;"/>
              </a>
              <hr>
              <?php
                if ( $this->session->flashdata('error')) {
                  echo $this->session->flashdata('error');
                }
                ?>
              <div class="form-group">
                <label for="email"><h3>Email:</h3></label>
                <input type="text" name="email" class="form-control" id="email" required 
                style="height: 50px; width:100%">
               </div> 

              <div class="form-group">
                <label for="password"><h3>Password:</h3></label>
                <input type="password" name="password" class="form-control" id="password" required 
                style="height: 50px"> 
              </div>
              <div class="form-group">
                <a href="" >Forgot Password?</a>
              </div>
              <input class="btn btn-primary" type="submit" name="Login" value="Login" id="Login_button" style="float: right;">
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
 
 </div>
