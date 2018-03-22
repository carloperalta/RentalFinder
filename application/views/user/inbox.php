<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Invoice <small>Your rent status</small></h4>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-striped">
                            <thead>
                                <th>Propertyname</th>
                                <th>Start Date</th>
                                <th>Due Date</th>
                                <th>Total amount</th>
                                <th>Status</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                <?php foreach ($invoice as $key => $secret): ?>
                                    <tr>
                                    <td><?php echo $secret->Unit_Name; ?></td>
                                    <td><?php echo $secret->startdate; ?></td>
                                    <td><?php echo $secret->duedate; ?></td>
                                    <td>Php <?php echo $secret->totalamount; ?></td>
                                    <td><?php echo $secret->status; ?></td>
                                    <?php if ($secret->status="PENDING"): ?>
                                    <td>
                                        <button class = "btn btn-primary">Pay</button>
                                    </td>
                                        <?php else: ?>
                                    <td>
                                        <button class = "btn btn-danger">Delete</button>
                                    </td>
                                    <?php endif ?>
                                </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>       
