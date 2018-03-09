<!DOCTYPE HTML>
<html lang="en">
<head>
</head>
<body>
<?php
if(!empty($authUrl)) {
	echo '<a href="'.$authUrl.'"><img src="'.base_url().'assets/images/flogin.png" alt=""/></a>';
}else{
?>
<div class="wrapper">
		<p><a href="<?php echo $userData['profile_url']; ?>" target="_blank">Click to Visit Facebook Page</a></p>
		<p><b>Want to logout? <a href="<?php echo $logoutUrl; ?>">Logout</a></b></p>
    </div>
</div>
<?php } ?>
</body>
</html>