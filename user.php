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
			
			
		
					
					<h3 >User Details</h3><br>
					
        <div class="section">
			<?php
								
								$sql="select * from user where isAdmin=0";
								$re=$connect->query($sql);
								if($re->num_rows>0)
								{
									echo"<table  class='table table-striped mb-5'>
									<thead>
										<tr>
										<th >User Id</th>
										<th >Name</th>
										<th >Gender</th>							
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
										<th >{$row["ID"]}</th>
										<td>{$row["Name"]}</td>
										<td>{$row["Gender"]}</td>
										<td><a href='user_view.php?id={$row["ID"]}' class='btnv'>View</a></td>
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
				


			?>
    </div>
</div>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	
	</body>
</html>




