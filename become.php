<?php
	include"config.php";
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Kidney Donor Community System</title>
	<link rel="stylesheet" type="text/css" href="css/style.css?v=<?php echo time(); ?>">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	</head>
	<body>

	
		
	
	<?php include"navbar.php";?><br>
		
			
	<div class="container-fluid mt-5">
			
    <?php
		if(isset($_POST["submit"]))
		{
            
			$sq="UPDATE user SET isDonor = 1 WHERE ID ='{$_SESSION['id']}'";
			$connect->query($sq);
		}
		?>
		
					
					<h3 > Become a Donar</h3><br>

<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
 
  <div class="form-check">
  
    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
    <label class="form-check-label" for="exampleCheck1">I agree</label>
  </div>
  
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
					
			
			
    </div>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	
	</body>
</html>




