	<div id = "footer"> Copyright <?php echo date("Y");?>, CMS</div>
				
</body>
</html>

<?php 
	//Close connection
	if(isset($connection)){
		mysqli_close($connection);
	}
?>