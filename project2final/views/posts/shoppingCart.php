<?php ?>
<form method="post" action = <?php echo Uri::create('index.php/shoppingcart/shoppingCart/'.$demo->id)?>>
       
		
		<label for="id">Email:</label>
       <input id="emailAddress" type="email" name ="emailAdd" required>
		<br>
	
	<label for="id">Quantity:</label>
		<input type="text"  name="Quantity" value = "0" > <br>
			<label for="id">Address:</label>
		<input type="text"  name="Address"> <br>
   <input type ="submit" value ="Order" name ="Order" >
       
</form>

<?php

?>
