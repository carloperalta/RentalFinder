<div class="col-md-12 clear"> 
<?php foreach ($properties as $key => $property) {?>
<div id="list-type" class="proerty-th">
    <div class="col-sm-6 col-md-4 p0">
        <div class="container-fluid">
            <div class="well">

        <div class="box-two proerty-item">
            <div class="item-thumb">
              <img src="<?php echo base_url() ?>assets/img/demo/property-1.jpg" alt="Property picture" class="img-responsive">
            </div>

            <div class="item-entry overflow">
                <h5><?php echo $property->Unit_Name; ?></h5>
                <div class="dot-hr"></div>
                <span class="pull-left"><b> Description :</b></span>
                 <p>
                     <?php echo $property->Unit_Description ?>
                 </p>
                 <span class="pull-left"><b> Houserules :</b></span>
                 <p>
                     <?php echo $property->Unit_Houserules ?>
                 </p>
                 <span class="pull-left"><b> Amenities :</b></span>
                 <p>
                     <?php echo $property->Unit_Amenities ?>
                 </p> 
                 <span class="pull-left"><b>Rate :</b></span>
                 <p>
                    Php<?php echo $property->Unit_Price;?> per month
                 </p>
                 <div class="row">
                     <p>
                         <button class="btn btn-primary float-left">View</button>
                         <button class="btn btn-warning float-right">Delete</button>
                     </p>   
                 </div>
            </div>
        </div>
                
            </div>
            
        </div>
    </div> 
</div>
<?php } ?>
</div>

