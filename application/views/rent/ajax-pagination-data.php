<?php if(!empty($unit)){ foreach($unit as $un){?>
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
                                    <b>Description:</b>
                                    <?= $un['Unit_Description']?>
                                </p>
                                <p style="display: none;">
                                    <b>Houserules:</b>
                                    <?= $un['Unit_Houserules']?>
                                </p>
                                <p style="display: none;">
                                    <b>Amenities:</b>
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
<?php } } else{ ?>
<div class="well align-content-center">
<p><h1>Property Not Found.</h1></p>
</div>
<?php } ?>
<?php echo $this->ajax_pagination->create_links(); ?>