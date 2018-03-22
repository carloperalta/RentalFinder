
	<!--
        <div class="page-head"> 
            <div class="container">
                <div class="row">
                    <div class="page-head-content">
                        <h1 class="page-title">List Layout With Sidebar</h1>               
                    </div>
                </div>
            </div>
        </div>-->
        <!-- End page header -->

        <!-- property area -->
    
        <div class="properties-area recent-property" style="background-image: url(<?php echo base_url();?>assets/rent/images/s6.jpg);  padding-top: 60px;">

            <div class="container">  
                <div class="row">
                     
                <div class="col-md-3 p0 padding-top-40">
                    <div class="blog-asside-right pr0">
                        <div class="panel panel-default sidebar-menu wow fadeInRight animated" >
                            <div class="panel-heading">
                                <h3 class="panel-title">Smart search</h3>
                            </div>
                            <div class="panel-body search-widget">
                                <form action="" class=" form-inline"> 
                                    <fieldset>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <input type="text" class="form-control" placeholder="Key word">
                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset >
                                        <div class="row">
                                            <div class="col-xs-12">  
                                                <input class="button btn largesearch-btn" value="Search" type="submit">
                                            </div>  
                                        </div>
                                    </fieldset>                                     
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-9  pr0 padding-top-40 properties-page">
                    <div class="col-md-12 clear"> 
                        <div class="col-xs-10 page-subheader sorting pl0">
                            <ul class="sort-by-list">
                                <li class="active">
                                    <a href="javascript:void(0);" class="order_by_date" data-orderby="property_date" data-order="ASC">
                                        Property Date <i class="fa fa-sort-amount-asc"></i>                 
                                    </a>
                                </li>
                                <li class="">
                                    <a href="javascript:void(0);" class="order_by_price" data-orderby="property_price" data-order="DESC">
                                        Property Price <i class="fa fa-sort-numeric-desc"></i>                      
                                    </a>
                                </li>
                            </ul><!--/ .sort-by-list-->

                            <div class="items-per-page">
                                <label for="items_per_page"><b>Property per page :</b></label>
                                <div class="sel">
                                    <select id="items_per_page" name="per_page">
                                        <option value="3">3</option>
                                        <option value="6">6</option>
                                        <option value="9">9</option>
                                        <option selected="selected" value="12">12</option>
                                        <option value="15">15</option>
                                        <option value="30">30</option>
                                        <option value="45">45</option>
                                        <option value="60">60</option>
                                    </select>
                                </div><!--/ .sel-->
                            </div><!--/ .items-per-page-->
                        </div>

                        <div class="col-xs-2 layout-switcher">
                            <a class="layout-list" href="javascript:void(0);"> <i class="fa fa-th-list"></i>  </a>
                            <a class="layout-grid active" href="javascript:void(0);"> <i class="fa fa-th"></i> </a>                          
                        </div><!--/ .layout-switcher-->
                    </div>

                    <div class="col-md-12 clear"> 
                        <div id="list-type" class="proerty-th">
                                    <?php if(!empty($unit)): foreach($unit as $un): ?>
                                      
                                                                    <div class="col-sm-6 col-md-4 p0">
                                                                            <div class="box-two proerty-item">
                                                                                <div class="item-thumb">
                                                                                    <a href="property-1.html" > <img src='<?php echo base_url().'propertyimages/'.$un['Unit_Picture']?>' style="height: auto; width: 100%;"></a>
                                                                                </div>

                                                                                <div class="item-entry overflow">
                                                                                    <h5><a href=""> <?php echo $un['Unit_Name']; ?> </a></h5>
                                                                                    <div class="dot-hr"></div>
                                                                                    <span class="pull-left"><b> Area :</b> 120m </span>
                                                                                      <span class="proerty-price pull-right">$<?= $un['Unit_Price']?></span>
                                                                                    <p style="display: none;"><?= $un['Unit_Houserules']?></p>
                                                                                    <p style="display: none;"><?= $un['Unit_Amenities']?></p>
                                                                                    <div class="property-icon">
                                                                                        <img src="<?php echo base_url();?>assets/rent/assets/img/icon/bed.png">(5)|
                                                                                        <img src="<?php echo base_url();?>assets/rent/assets/img/icon/shawer.png">(2)|
                                                                                        <img src="<?php echo base_url();?>assets/rent/assets/img/icon/cars.png">(1)  
                                  
                              <form action="<?php echo base_url()?>rent/occupy" method="post">
                                            
                                          <input type="hidden" name="rent_type" value="Monthly">
                                          <input type="hidden" name="Unit_ID" value="<?php echo $un['Unit_ID']?>">
                                          <input type="hidden" name="Unit_Type" value="<?php echo $un['Unit_Type']?>">
                                          <input type="hidden" name="tenant_id" value="<?php echo $id?>">
                                  <input type="submit" value="Rent" class="btn btn-primary btn-sm" style="border-style: none;" >
                                      </form>
                                                                                    </div>
                                                                                </div>


                                                                            </div>
                                                                        </div> 
                                    <?php endforeach; else: ?>
                                        <p>Post(s) not available.</p>
                                    <?php endif; ?>
                        </div>
                    </div>
                   
                </div>  
                </div>              
            </div>
        </div>
    

      <script src="<?php echo base_url()?>assets/rent/assets/js/modernizr-2.6.2.min.js"></script>
        <script src="<?php echo base_url()?>assets/rent/assets/js/jquery-1.10.2.min.js"></script>
        <script src="<?php echo base_url()?>assets/rent/assets/js/icheck.min.js"></script>
        <script src="<?php echo base_url()?>assets/rent/assets/js/main.js"></script>