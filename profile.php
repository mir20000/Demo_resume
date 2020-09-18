<?php 
session_start();
if(!(isset($_SESSION['username'])))
{
	echo "<script> location.href='new_url'; </script>";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>


<div class="container">
	<div class="row" style="padding-top: 20px">
		<div class="col-md-1" style="background-color:#ecf0ff"></div>
		<div class="col-md-2" style="background-color:#ecf0ff">
			<?php 
		if($_SESSION['username']!=NULL) 
		{  
   			 echo " Welcome :".$_SESSION['username']; 
		} 

	?>
		</div>
		<div class="col-md-3" style="background-color:#ecf0ff"></div>
		<div class="col-md-3"></div>
		<div class="col-md-2" align="right">
			<a href="logout.php">Logout</a>
		</div>
		<div class="col-md-1"></div>
	</div>
</div>

	<br><br>

</body>
</html>