<button class="btn btn-success" data-toggle="modal" data-target="#addpropertymodal">Add New <i class="icon-plus icon-white"></i></button>

<div class="row">
	<div class="col-md-12">
		<table class="table">
			<thead>
				<tr>
					<th>ID</th>
					<th>Property type</th>
					<th>Number of properties</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($unit_types as $key => $value) { ?>
				<tr>
					<td> <?php echo $value->type_id; ?></td>
					<td> <?php echo $value->type_name; ?></td>
					<td> <?php echo $value->Number ?></td>
					<td>
					<a href="<?php echo base_url('Admin/Property_type/'.$value->type_name) ?>" class ="btn btn-primary">
							View
					</a>
					</td>
				</tr>
				<?php } ?>	
			</tbody>
		</table>			
	</div>
</div>	