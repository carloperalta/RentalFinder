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


<div class="modal fade" id="addPropertyModal" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content" >
            <?php echo form_open_multipart('User/do_upload');?>
                <div class="modal-header">
                    <h1>Add Property</h1>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        
                        <div class="form-group">
                            <label for="propertytype">Property Type</label>
                            <select name="propertytype" class="form-control border-input" id="propertytype">
                            
                            <?php foreach ($types as $type => $name){
                                echo "<option value=".$name->type_name.">". $name->type_name ."</option>";
                             } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="propertyname">Property Name</label>
                            <input type="text" name="propertyname" required="" class="form-control border-input">
                        </div>
                        <div class="form-group">
                            <label>Picture</label>
                            <input type="file" name="userfile" class="form-control-file">                       
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" class="form-control border-input" rows="5" id="description" required=""></textarea>
                        </div>
                        <div class="form-group">
                            <label for="houserules">House Rules</label>
                            <textarea name="houserules" class="form-control border-input" rows="5" id="houserules" required=""></textarea>
                        </div>
                        <div class="form-group">
                          <label for="amenities">Amenities</label>
                          <textarea class="form-control border-input" rows="5" name="amenities"id="amenities" required=""></textarea>
                        </div>
                        <div class="form-group">
                            <label for="capacity">Capacity</label>
                            <input type="number" name="capacity" class="form-control border-input" required="">
                        </div> 
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="number" name="price" class="form-control border-input" required="">
                        </div>   
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" name="register" class="btn btn-primary float-left" value="Confirm">
                    <button class="btn btn-danger" data-dismiss="modal">Cancel</button>
                </div>
            </div>
            <?php echo form_close(); ?>

            </div>
          </div>
    </div>


    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Are you sure you want to logout?</h4>
                </div>
                <div class="modal-footer">
                    <a href="<?php echo base_url('User/logout'); ?>" class="btn btn-warning">Logout</a>
                    <button type="button" class="btn btn-default" data-dismiss="modal">
                            Cancel
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>

    <!--   Core JS Files   -->
    <script src="<?php echo base_url('assets/js/jquery.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>" type="text/javascript"></script>

    <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>" type="text/javascript"></script>
    <!--  Checkbox, Radio & Switch Plugins -->
    <script src="<?php echo base_url('assets/js/bootstrap-checkbox-radio.js'); ?>"></script>

    <!--  Charts Plugin -->
    <script src="<?php echo base_url('assets/js/chartist.min.js'); ?>"></script>

    <!--  Notifications Plugin    -->
    <script src="<?php echo base_url('assets/js/bootstrap-notify.js'); ?>"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
    <script src="<?php echo base_url('assets/js/paper-dashboard.js'); ?>"></script>

    <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
    <script src="<?php echo base_url('assets/js/demo.js'); ?>"></script>


</html>
