<?php if(!empty($unit)): foreach($unit as $uni): ?>
        <div class="list-item"><a href="<?php echo base_url().'rent/'.$uni['Unit_Name']; ?>"><h2><?php echo $uni['Unit_Name']; ?></h2></a></div>
<?php endforeach; else: ?>
<p>Post(s) not available.</p>
<?php endif; ?>
<?php echo $this->ajax_pagination->create_links(); ?>