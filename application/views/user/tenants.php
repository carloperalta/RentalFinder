<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Tenant List</h4>
                        <p class="category">Present Tenants</p>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-striped">
                            <thead>
                                <th>Name</th>
                                <th>Starting Date</th>
                                <th>Due Date</th>
                                <th>Property</th>
                                <th>Totalamount</th>
                                <th>Status</th>
                            </thead>
                            <tbody>
                                <?php foreach ($tenants as $key => $value): ?>
                                    <tr>
                                        <td><?php echo $value->name;?></td>
                                        <td><?php echo $value->start;?></td>
                                        <td><?php echo $value->due;?></td>
                                        <td><?php echo $value->Unit_Name;?></td>
                                        <td><?php echo $value->totalamount;?></td>
                                        <td><?php echo $value->status?></td>
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
