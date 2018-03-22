<a href="" class="btn btn-danger">SEND INVOICE TO ALL</a>
<div class="row">
	<div class="col-md-12">
		<table class="table">
			<thead>
				<tr>
					<th>Name</th>
					<th>Unit</th>
					<th>Start Date</th>
					<th>DueDate</th>
					<th>Status</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($invoices as $key => $invoice): ?>
					
				<tr>
					<td><?php echo $invoice->name ?></td>
					<td><?php echo $invoice->unit ?></td>
					<td><?php echo $invoice->start ?></td>
					<td><?php echo $invoice->due ?></td>
					<td><?php echo $invoice->status ?></td>
					<?php if ($invoice->status=="PENDING"): ?>
						
					<td>
						<a href="" class="btn btn-primary">
							Send Invoice
						</a> 
					</td>
					<?php else: ?>

					<td>
						<a href="" class="btn btn-danger">
							Delte
						</a> 
					</td>
					<?php endif ?>
				</tr>


				<?php endforeach ?>
			</tbody>
		</table>			
	</div>
</div>	