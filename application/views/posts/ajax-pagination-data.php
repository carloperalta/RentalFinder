<?php if(!empty($posts)): foreach($posts as $post): ?>
    <div class="list-item"><a href="<?php echo base_url().'post/'.$post['title']; ?>"><h2><?php echo $post['title']; ?></h2></a></div>
<?php endforeach; else: ?>
<p>Post(s) not available.</p>
<?php endif; ?>
<?php echo $this->ajax_pagination->create_links(); ?>