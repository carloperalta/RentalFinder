<button class="btn btn-success" data-toggle="modal" data-target="#addusermodal">Add New <i class="icon-plus icon-white"></i></button>    
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
                        <button class="btn btn-danger">Delete</button>
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

        