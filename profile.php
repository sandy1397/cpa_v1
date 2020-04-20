<?php
$link=mysqli_connect("remotemysql.com","V1HwKqbZg5","nasykhl0YZ","V1HwKqbZg5");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$result = mysqli_query($link,"SELECT username FROM users where lin=1");
$row = mysqli_fetch_assoc($result);

$q1 = mysqli_query($link,"insert into users ('name','phone_no','email_id','address','user_type') values ('uname','pno','email','addr','utype')");

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
		<h3> Enter Your Details </h3>

	<table>
		<tr><td> NAME: </td>
			<td><input type="text" name="uname" placeholder="Enter your Name"> </td>
		</tr>

		<tr><td> Phone No. </td>
			<td> <input type="text" name="pno" placeholder="Enter your Phone Number"> </td>
		</tr>

		<tr><td> Email Address </td>
			<td> <input type="text" name="email" placeholder="Enter your Email ID"> </td>
		</tr>

		<tr><td> Address </td>
			<td> <input type="text" name="addr" placeholder="Enter your Address"></td>
		</tr>

		<tr><td> USER Type </td>
			<td> <select name="utype">
			<option selected="" value="default">
				<i>Please select a option! </i>
			</option>
			<option value="IND">Indvidual</option>
			<option value="COR">Corporation</option>

		</select> </td>
		</tr>


	</table>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
		<input type="submit" name="update">
	</form>
</div>

<br><br>
<hr>
</body>
</html>
