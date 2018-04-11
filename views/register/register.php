<?php include('server.php') ?>
<?php echo Form::open('/register/register'); ?>
   	<div class="panel panel-default">
	  	<div class="panel-heading">
	 	</div>
	  	<div class="panel-body">
	    	<form action="register.php" method="POST" accept-charset="UTF-8" role="form">
                  <fieldset>
	    	  	<div class="form-group">
	    		    <input class="form-control" placeholder="Username" name="username" value="<?php echo $username; ?>" type="text" required>
	    		</div>
	    		<div class="form-group">
	    		    <input class="form-control" placeholder="Email" name="email" value="<?php echo $email; ?>" type="email" required>
	    		</div>
	    		<div class="form-group">
	    			<input class="form-control" placeholder="Password" name="password1" type="password" value="" required>
	    		</div>
	    		<div class="form-group">
	    			<input class="form-control" placeholder="Confirm Password" name="password2" type="password" value="" required>
	    		</div>
	    		<div class="actions">
					
	    		<?php echo Form::submit('send'); ?> </div>
	    		
	   	   	<p>
	   	   	Already a member? <a href="login.php">Sign in</a>
	   	   	</p>
	   	   	<p>Forgot password? <a href="<?=Uri::create('/reset/grabemail');?>">Click here to reset</a></p>
	    	</fieldset>
	      	</form>
	    </div>
	</div>
	<?php echo Form::close(); ?>
	

