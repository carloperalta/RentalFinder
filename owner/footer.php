
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

    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Are you sure you want to logout?</h4>
                </div>
                <div class="modal-footer">
                    <a href="<?php echo base_url('Owner/logout'); ?>" class="btn btn-warning">Logout</a>
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
