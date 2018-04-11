
<form method="post" action = <?php echo Uri::create('index.php/comment/editComment/'.Input::post('cID'))?>>
        <label for="id">Comment:</label>
        <?php $ctexts =  Input::post('cText'); ?>
		<input type="text"  name="newComment" value = <?php echo $ctexts?> style="width:100px; height:40px;"> 
       
		<br />
   <input type ="submit" value ="Save" name ="Save" >
       
</form>
