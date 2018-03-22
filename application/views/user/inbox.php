<div class="content">
    <div class="container-fluid">
<<<<<<< HEAD
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Inbox</h4>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-striped">
                            <thead>
                                <th>Propertyname</th>
                                <th>Starting Date</th>
                                <th>Due Date</th>
                                <th>Unit Type</th>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>       
=======
        <div class="card">
            <div class="header">
                <h4 class="title">Notifications</h4>
            </div>

            <div class="content">
                <div class="row">



                </div>    
            </div>
        </div>
                        <div id="list-type" class="proerty-th-list">
<?php foreach($notifications as $notif){?>
          <div class="col-sm-6 col-md-4 p0">
                                                                            <div class="box-two proerty-item" >
                                                                                <div class="item-thumb">
                                                                                    <a href="property-1.html" > <img src='<?php echo base_url().'propertyimages/'.$notif['Unit_Picture']?>' style="height: auto; width: 100%;"></a>
                                                                                </div>

                                                                                <div class="item-entry overflow">
                                                                                    <h5><a href=""> <?php echo $notif['Unit_Name']; ?> </a></h5>
                                                                                    <div class="dot-hr"></div>
                                                                                    <span class="pull-left"><b> Area :</b> 120m </span>
                                                                                    <span class="proerty-price pull-right">$<?= $notif['Unit_Price']?></span>
                                                                                    <p style="display: none;"><?= $notif['Unit_Houserules']?></p>
  <p style="display: none;"><?= $notif['Unit_Amenities']?></p>
                                                                                    <div class="property-icon">
                                                                                        <img src="<?php echo base_url();?>assets/rent/assets/img/icon/bed.png">(5)|
                                                                                        <img src="<?php echo base_url();?>assets/rent/assets/img/icon/shawer.png">(2)|
                                                                                        <img src="<?php echo base_url();?>assets/rent/assets/img/icon/cars.png">(1)  
                                  
                                                                                    </div>
                                                                                </div>


                                                                            </div>
                                                                        </div> 
        <?php }?>
    </div>
    </div>
</div>


>>>>>>> 7a6b8c9065a2e0f3c92edb110091570377228c0f
