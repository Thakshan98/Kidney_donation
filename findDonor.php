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
	
					<h3 >Find a Donar</h3><br>
		<div class="section">
			<form  method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">

				<label>Bllod Group</label><br>
					<select name="blood" required class="input">
			
					<?php 
						 $sql="SELECT DISTINCT(Blood_G) FROM blood";
						 $re=$connect->query($sql);
							if($re->num_rows>0)
								{
									echo"<option value=''>Select</option>";
									while($r=$re->fetch_assoc())
									{
										echo "<option value='{$r["Blood_G"]}'>{$r["Blood_G"]}</option>";
									}
								}
					?>					
				</select><br><br>
				
				<button type="submit" class="btn" name="view"> View Details</button>
			</form>			
					
		
			<?php
							if(isset($_POST["view"]))
							{

								echo "<h4>Donor Details</h4><br>";
								$sl="SELECT DISTINCT(Blood_ID) FROM blood  WHERE Blood_G ='{$_POST['blood']}'";
								$r=$connect->query($sl);
								$ro=$r->fetch_assoc();
							
								$sql="select * from user where Blood_ID='{$ro["Blood_ID"]}' AND isDonor=1";
								$re=$connect->query($sql);
								if($re->num_rows>0)
								{
									echo"<table  class='table table-striped mb-5'>
									<thead>
										<tr>
										<th >D.No</th>
										<th >Name</th>
										<th >Gender</th>
										<th >Blood Group</th>
										<th >View</th>
										</tr>
									</thead>
													";
				$i=0;
				while($row=$re->fetch_assoc())
				{
					$i++;
						echo  	"<tbody>
										<tr>
										<th >{$i}</th>
										<td>{$row["Name"]}</td>
										<td>{$row["Gender"]}</td>
										<td>{$_POST['blood']}</td>
										<td><a href='donor_view.php?id={$row["ID"]}' class='btnv'>View</a></td>
										</tr>
								</tbody>
							";			
						}
					}
				else
				{
					echo "No record Found";
				}
					echo "</table>";
				}


			?>
    	</div>
    </div>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	
	</body>
</html>




