
<p> This website is part of a CSU CT310 Project. Our goal was to create a tour attraction website about Kansas and Indiana. We hope that you enjoy our product! </p>
    
    <?php  
    
    foreach($demos as $attid): ?>
		<a href="<?=Uri::create('index.php/posts/attraction/'.$attid->id); ?>">
			<?php echo $attid->title; ?>
		</a><br />
	<?php endforeach; ?>
