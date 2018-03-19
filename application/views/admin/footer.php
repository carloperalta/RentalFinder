

       <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>

                        <li>
                            <a href="http://www.RentalFinder.com">
                                Group 7
                            </a>
                        </li>
                        <li>
                            <a href="http://www.twitter.com/RentalFinder">
                               Twitter
                            </a>
                        </li>
                        <li>
                            <a href="http://www.creative-tim.com/license">
                                Licenses
                            </a>
                        </li>
                    </ul>
                </nav>
                </div>
        </footer>


    </div>
</div>

<div class="modal fade" id="addpropertymodal" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <form method="post" action="">
                <div class="modal-header">
                    <h1>Add Property Type</h1>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="propertytype">Property Type</label>
                        <input type="text" name="propertytype" required="" class="form-control">
                    </div>
                </div>
                
                <div class="modal-footer">
                    <button class="btn btn-primary float-right">Confirm</button>
                </div>
            </div>
            </form>

            </div>
          </div>
    </div>

<div class="modal fade" id="addusermodal" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <form method="post" action="">
                <div class="modal-header">
                    <h1>Add new user</h1>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Fullname</label>
                        <input type="text" name="name" required="" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" required="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" name="password" required="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="usertype">Usertype</label>
                        <select name="usertype" class="form-control">
                            <option>ADMIN</option>
                            <option>USER</option>
                        </select>
                    </div>
                </div>
                
                <div class="modal-footer">
                    <button class="btn btn-primary float-right">Confirm</button>
                </div>
            </div>
            </form>

            </div>
          </div>
    </div>
    
</body>



    <!--   Core JS Files   -->
    <script src="<?php echo base_url();?>assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="<?php echo base_url();?>assets/js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<script src="<?php echo base_url();?>assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="<?php echo base_url();?>assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="<?php echo base_url();?>assets/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
    <script src="<?php echo base_url();?>assets/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>

	<script src="<?php echo base_url();?>assets/js/demo.js"></script>
    <script src="<?php echo base_url();?>assets/js/scripts.js"></script>
    <script>$(function(){});</script>

</html>
