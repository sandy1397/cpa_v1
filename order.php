<?php
//$link=mysqli_connect("remotemysql.com","V1HwKqbZg5","nasykhl0YZ","V1HwKqbZg5");
require_once "config.php";
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$result = mysqli_query($link,"SELECT username FROM users where lin=1");
$row = mysqli_fetch_assoc($result);

    $conn=mysqli_connect('localhost','root','','pcassembler');
    $records=mysqli_query($conn,"select id from users where lin=1");
    $loggedin=mysqli_fetch_assoc($records);
    $cid=$loggedin['id'];
    mysqli_query($conn,"delete from cart where Cid=$cid");
?>

<!DOCTYPE html>
<html>
<head>
	<title>CPA</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/styling.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">

	<!-- JS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
 	<style type="text/css">
 		table{
 			text-align: center;
 		}
 		th{
 			text-align: center;
 		}
 	</style>


</head>
<body bgcolor=#88836D>

<h1> <b>CUSTOM PC ASSEMBLER </b></h1>
<hr>

	<ul>
		<div class="custom-container container">
		  <li><a href="uhome.php">Home</a></li>
		  <li><a href="uhome.php">Products</a></li>
		  <li><a href="about.php">About</a></li>
		  <li><a href="https://goo.gl/forms/B1CG496RHPVRFG753">Feedback</a></li>

		  <li style="float:right"><a class="active" href="logout.php">Logout</a></li>
		  <li style="float:right; color: white;"><a class="active" href="profile.php">
		  	<?php echo $row['username'];?>
		</a></li>
		  <li style="float:right"><a href="car.php"><span class="glyphicon glyphicon-shopping-cart"></span></a></li>
		</div>
	</ul>

<br>
	<div class="custom-container container">
		<h2> Your Order will be delivered to your address in 3-4 days </h2>


</div>

<br><br>
<hr>
</body>
</html>
