
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
	
	</a>
    <button  class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span  class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
     
	<div class="navbar-nav ms-auto">

	
			
<?php

	if(isset($_SESSION["id"])&& $_SESSION['isAdmin']==1 && $_SESSION['isDonor']==1)
	{
		echo'
		<a class="nav-link active" aria-current="page" href="addBlood.php">Add blood group</a>
		<a class="nav-link" href="user.php">User list</a>
		<a class="nav-link" href="findDonor.php">Find a donar</a>
		<a class="nav-link" href="request.php">Request</a>
		<a class="nav-link" href="profile.php">Profile</a>
		<a class="nav-link" href="logout.php">Logout</a>
		';
	}elseif(isset($_SESSION["id"])&& $_SESSION['isAdmin']==1 && $_SESSION['isDonor']==0)
	{
		echo'
		<a class="nav-link active" aria-current="page" href="addBlood.php">Add blood group</a>
		<a class="nav-link" href="user.php">User list</a>
		<a class="nav-link" href="findDonor.php">Find a donar</a>
		<a class="nav-link" href="become.php">Become a donar</a>
		<a class="nav-link" href="profile.php">Profile</a>
		<a class="nav-link" href="logout.php">Logout</a>
		';
	}
	elseif(isset($_SESSION["id"])&& $_SESSION['isAdmin']==0 && $_SESSION['isDonor']==1)
	{
		echo'
		<a class="nav-link active" aria-current="page" href="home.php">Home</a>
		<a class="nav-link" href="findDonor.php">Find a donar</a>
		<a class="nav-link" href="request.php">Request</a>
		<a class="nav-link" href="profile.php">Profile</a>
		<a class="nav-link" href="logout.php">Logout</a>
		';
	}
	else
	{
		echo'
		<a class="nav-link active" aria-current="page" href="home.php">Home</a>
		<a class="nav-link" href="findDonor.php">Find a donar</a>
		<a class="nav-link" href="become.php">Become a donar</a>
		<a class="nav-link" href="profile.php">Profile</a>
		<a class="nav-link" href="logout.php">Logout</a>
		';
	}
	
?>

</div>

    </div>
  </div>
</nav>
