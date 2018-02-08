<?php
$sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:'';
if(!empty($sessData['status']['msg'])){
    $statusMsg = $sessData['status']['msg'];
    $statusMsgType = $sessData['status']['type'];
    unset($_SESSION['sessData']['status']);
}
?>
<link rel="stylesheet" href="<?php echo base_url();?>bootstrap/css/owners.css">

<div class="row">

  <div class="col-md-4">
    <div class="container">
      <div class="register">
          <h2>Create a New Account</h2>
          <?php echo !empty($statusMsg)?'<p class="'.$statusMsgType.'">'.$statusMsg.'</p>':''; ?>
          <div class="regisFrm">
              <form action="userAccount.php" method="post">
                  <input type="text" name="first_name" placeholder="First Name" required=""><br/>
                  <input type="text" name="last_name" placeholder="Last Name" required=""><br/>
                  <input type="text" name="middle_name" placeholder="Middle Name" required=""><br/>
                  <input type="email" name="email" placeholder="Email Address" required=""><br/>
                  <input type="text" name="phone" placeholder="Contact Number"required=""><br/>
                  <input type="password" name="password" placeholder="Password" required=""><br/>
                  <input type="password" name="confirm_password" placeholder="Confirm Password" required=""><br/>
                  <div class="send-button">
                      <input type="submit" name="signupSubmit" value="CREATE ACCOUNT"><br/>
                  </div>
              </form>
          </div>
      </div>
    </div>
  </div>

  <div class="col-md-4">
  </div>
</div>
