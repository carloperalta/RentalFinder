<div class="properties-area recent-property" style="background-image: url(<?php echo base_url();?>assets/rent/images/s6.jpg);  padding-top: 60px;">
    <div class="container">  
        <div class="row">
            <div class="col-md-3 p0 padding-top-40">
                <div class="blog-asside-right pr0">
                    <div class="panel panel-default sidebar-menu wow fadeInRight animated" >
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
                                        <img src='<?php echo base_url().'propertyimages/'.$un['Unit_Picture']?>' style="height: auto; width: 100%;">
                                        </div>
                                        <div class="item-entry overflow">
                                            <h5>
                                                <a href=""> 
                                                    <?php echo $un['Unit_Name']; ?> 
                                                </a>
                                            </h5>
                                        <div class="dot-hr"></div>
                                <span class="proerty-price pull-right">
                                    PHP<?= $un['Unit_Price']?>
                                </span>
                                <p style="display: none;">
                                    <?= $un['Unit_Description']?>
                                </p>
                                <p style="display: none;">
                                    <?= $un['Unit_Houserules']?>
                                </p>
                                <p style="display: none;">
                                    <?= $un['Unit_Amenities']?>
                                </p>
                            <div class="property-icon">
                                <form action="<?php echo base_url('Rent/occupy/')?>" method="post">
                                    <input type="hidden" name="Unit_ID" value="<?php echo $un['Unit_ID']?>">
                                    <input type="hidden" name="Unit_Price" value="<?php echo $un['Unit_Price']?>">
                                    <input type="submit" 
                                        name="Rent" value="Rent" class="btn btn-primary btn-sm" style="border-style: none;" >
                                </form>
                            </div>
                                        </div>
                                    </div>
                                </div> 
<?php endforeach; else: ?>
    <p>No Available Propertie.</p>
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