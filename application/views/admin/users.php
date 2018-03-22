
    <?php if ($this->session->flashdata('message')) {?>
            <?php echo $this->session->flashdata('message'); ?>
    <?php } ?>

<div class="col-md-12">

    <div class="col-md-6">
        <button class="btn btn-success" data-toggle="modal" data-target="#addusermodal">Add New <i class="icon-plus icon-white"></i></button>    
    </div>
</div>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Usertype</th>
                <th>Properties</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody id = show_data>
            <?php foreach ($users as $user => $row) {?>
            <tr>
                <td><?php echo $row->id ?> </td>
                <td><?php echo $row->name ?> </td>
                <td><?php echo $row->email ?></td>
                <td><?php echo $row->user_type ?></td>
                <td><?php echo $row->Number ?> </td>
                <td>
                    <?php if($row->user_type == "ADMIN"){ ?>
                        <?php if($id == $row->id){ ?>
                            <button class="btn btn-danger disabled">Delete</button>
                        <?php }else{ ?>
                            <button class="btn btn-danger">Delete</button>
                        <?php } ?>
                    <?php }else{ ?>
                        <a href="<?php echo base_url('Admin/Users/').$row->id?>" class="btn btn-info">
                            View
                        </a> 
                        <button class="btn btn-primary">Edit</button>
                        <button class="btn btn-danger">Delete</button>
                    <?php } ?>
                </td>       
            </tr>
            <?php } ?>      
        </tbody>
</table>

        