<form method="post" enctype="multipart/form-data"  action = <?php echo Uri::create('index.php/posts/addAttraction/')?>>
		<label for="id">Title:</label>
        <input type="text" name="attTitle" required ><br>
        <label for="id">Body:</label>
        <input style="height:200px;"type="text" name="attBody" required><br>
        <label for="id">Upload Image:</label>
        <input type = "file" name ="image"><br>
   <input type ="submit" value ="Add" name ="add" >
       
    </form>
    