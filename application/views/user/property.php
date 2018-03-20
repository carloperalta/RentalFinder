<div class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="header">
                <div class="row">
                    <div class="col-md-10">
                        <h4 class="title">Properties</h4>
                    </div>
                    <div class="col-md-2">
                    <a href="" class="btn btn-primary" data-toggle="modal" data-target="#addPropertyModal" >Add Property</a>
                    </div>
                </div>
                <?php if($this->session->flashdata('message')){?>
                    <div class="row">
                        <div class="col-md-4">
                            <?php echo $this->session->flashdata('message'); ?>                        
                        </div>
                    </div>
                <?php } ?>
            </div>
                <div class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Property Name</th>
                                        <th>Property Type</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($units as $key => $unit) {?>
                                    <tr>
                                        <td> <?php echo $unit->Unit_Name ?></td>
                                        <td> <?php echo $unit->Unit_Type ?></td>
                                        <td>
                                            <a href="" class="btn btn-primary">
                                                View
                                            </a> 
                                            <a href="" class="btn btn-warning">
                                                Edit
                                            </a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>            
                        </div>
                    </div>  
                </div>
        </div>
    </div>
</div>
