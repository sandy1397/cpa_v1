<?php
$link=mysqli_connect("localhost","root","","pcassembler");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$result = mysqli_query($link,"SELECT username FROM users where lin=1");
$row = mysqli_fetch_assoc($result);

$processor = mysqli_query($link,"SELECT * FROM component where Type='Processor'");
$motherboard = mysqli_query($link,"SELECT * FROM component where Type='Motherboard'");
$ram = mysqli_query($link,"SELECT * FROM component where Type='RAM'");
$storage = mysqli_query($link,"SELECT * FROM component where Type='Storage'");
$gc = mysqli_query($link,"SELECT * FROM component where Type='Graphic Card'");
$cabinet = mysqli_query($link,"SELECT * FROM component where Type='Cabinet'");
$od = mysqli_query($link,"SELECT * FROM component where Type='Optical Drive'");
$monitor = mysqli_query($link,"SELECT * FROM component where Type='Monitor'");
$keyb = mysqli_query($link,"SELECT * FROM component where Type='Keyboard'");
$mouse = mysqli_query($link,"SELECT * FROM component where Type='Mouse'");
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
		  <li><a href="uhome.php">Build Rig</a></li>
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
		<h2 style="text-align: center;"> Start building your rig by choosing from various types of parts and models below </h2>
<br><br>
<!-- PROCESSOR -->
		<h4> <b><u> PROCESSOR </u></b></h4>
		<table border="1" style="width: 100%; table-layout: auto;">	
			<tr>
				<th> Names</th>
				<th>Features</th>
				<th>Price per unit</th>
				<!-- <th>Quantity</th> -->
				<th>Cart</th>
			</tr>
			<?php
				$id=$row;
				while ($result1 =  mysqli_fetch_assoc($processor)) {
				    $part=$result1['ID']; 
				echo "<tr>";
					echo "<td>".$result1['Name']."</td>";
					echo "<td>".$result1['Feature']."</td>";
					echo "<td>".$result1['Price']."</td>";
						echo "<td>"."<a href='cart.php?id=$part'><button class='btn btn-success'>Add</button></a>"."</td>";
				echo "</tr>";
					
				echo "</tr>";
				}
			?>

			</table>
<!-- MOTHERBOARD -->
			<br>
		<h4> <b><u> MOTHERBOARD </u></b></h4>
		<table border="1" style="width: 100%; table-layout: auto;">	
			<tr>
				<th> Names</th>
				<th>Features</th>
				<th>Price per unit</th>
				<!-- <th>Quantity</th> -->
				<th>Cart</th>
			</tr>
			<?php
				while ($result2 =  mysqli_fetch_assoc($motherboard)) {
				echo "<tr>";
				$part=$result2['ID']; 
					echo "<td>".$result2['Name']."</td>";
					echo "<td>".$result2['Feature']."</td>";
					echo "<td>".$result2['Price']."</td>";
					// echo "<td>"."<input type='number' name='quan'>"."</td>";
					echo "<td>"."<a href='cart.php?id=$part'><button class='btn btn-success'>Add</button></a>"."</td>";
				echo "</tr>";
				}
			?>
			</table>
<!-- RAM -->
			<br>
		<h4> <b><u> RAM </u></b></h4>
		<table border="1" style="width: 100%; table-layout: auto;">	
			<tr>
				<th> Names</th>
				<th>Features</th>
				<th>Price per unit</th>
				<!-- <th>Quantity</th> -->
				<th>Cart</th>
			</tr>
			<?php
			$id=$row["id"];
				while ($result3 =  mysqli_fetch_assoc($ram)) {
					$part=$result3['ID']; 
				echo "<tr>";
					echo "<td>".$result3['Name']."</td>";
					echo "<td>".$result3['Feature']."</td>";
					echo "<td>".$result3['Price']."</td>";
					// echo "<td>"."Quantity"."</td>";
					echo "<td>"."<a href='cart.php?id=$part'><button class='btn btn-success'>Add</button></a>"."</td>";
				echo "</tr>";
				}
			?>
			</table>
<!-- STORAGE -->
			<br>
		<h4> <b><u> STORAGE </u></b></h4>
		<table border="1" style="width: 100%; table-layout: auto;">	
			<tr>
				<th> Names</th>
				<th>Features</th>
				<th>Price per unit</th>
				<!-- <th>Quantity</th> -->
				<th>Cart</th>
			</tr>
			<?php
				while ($result4 =  mysqli_fetch_assoc($storage)) {
					$part=$result4['ID']; 
				echo "<tr>";
					echo "<td>".$result4['Name']."</td>";
					echo "<td>".$result4['Feature']."</td>";
					echo "<td>".$result4['Price']."</td>";
					// echo "<td>"."Quantity"."</td>";
				echo "<td>"."<a href='cart.php?id=$part'><button class='btn btn-success'>Add</button></a>"."</td>";
				echo "</tr>";
				}
			?>
			</table>
<!-- GRAPGIC CARD -->
			<br>
		<h4> <b><u> GRAPHIC CARD </u></b></h4>
		<table border="1" style="width: 100%; table-layout: auto;">	
			<tr>
				<th> Names</th>
				<th>Features</th>
				<th>Price per unit</th>
				<!-- <th>Quantity</th> -->
				<th>Cart</th>
			</tr>
			<?php
				while ($result5 =  mysqli_fetch_assoc($gc)) {
					$part=$result5['ID']; 
				echo "<tr>";
					echo "<td>".$result5['Name']."</td>";
					echo "<td>".$result5['Feature']."</td>";
					echo "<td>".$result5['Price']."</td>";
					// echo "<td>"."Quantity"."</td>";
					echo "<td>"."<a href='cart.php?id=$part'><button class='btn btn-success'>Add</button></a>"."</td>";
				echo "</tr>";
				}
			?>
			</table>
<!-- CABINET -->
			<br>
		<h4> <b><u> CABINET </u></b></h4>
		<table border="1" style="width: 100%; table-layout: auto;">	
			<tr>
				<th> Names</th>
				<th>Features</th>
				<th>Price per unit</th>
				<!-- <th>Quantity</th> -->
				<th>Cart</th>
			</tr>
			<?php
				while ($result6 =  mysqli_fetch_assoc($cabinet)) {
					$part=$result6['ID']; 
				echo "<tr>";
					echo "<td>".$result6['Name']."</td>";
					echo "<td>".$result6['Feature']."</td>";
					echo "<td>".$result6['Price']."</td>";
					// echo "<td>"."Quantity"."</td>";
					echo "<td>"."<a href='cart.php?id=$part'><button class='btn btn-success'>Add</button></a>"."</td>";
				echo "</tr>";
				}
			?>
			</table>
<!-- OPTICAL DRIVE -->
			<br>
		<h4> <b><u> OPTICAL DRIVE </u></b></h4>
		<table border="1" style="width: 100%; table-layout: auto;">	
			<tr>
				<th> Names</th>
				<th>Features</th>
				<th>Price per unit</th>
				<!-- <th>Quantity</th> -->
				<th>Cart</th>
			</tr>
			<?php
				while ($result7 =  mysqli_fetch_assoc($od)) {
					$part=$result7['ID']; 
				echo "<tr>";
					echo "<td>".$result7['Name']."</td>";
					echo "<td>".$result7['Feature']."</td>";
					echo "<td>".$result7['Price']."</td>";
					// echo "<td>"."Quantity"."</td>";
					echo "<td>"."<a href='cart.php?id=$part'><button class='btn btn-success'>Add</button></a>"."</td>";				echo "</tr>";
				}
			?>
			</table>
<!-- MONITOR -->
			<br>
		<h4> <b><u> MONITOR </u></b></h4>
		<table border="1" style="width: 100%; table-layout: auto;">	
			<tr>
				<th> Names</th>
				<th>Features</th>
				<th>Price per unit</th>
				<!-- <th>Quantity</th> -->
				<th>Cart</th>
			</tr>
			<?php
				while ($result8 =  mysqli_fetch_assoc($monitor)) {
					$part=$result8['ID']; 
				echo "<tr>";
					echo "<td>".$result8['Name']."</td>";
					echo "<td>".$result8['Feature']."</td>";
					echo "<td>".$result8['Price']."</td>";
					// echo "<td>"."Quantity"."</td>";
					echo "<td>"."<a href='cart.php?id=$part'><button class='btn btn-success'>Add</button></a>"."</td>";
				echo "</tr>";
				}
			?>
			</table>
<!-- KEYBOARD -->
			<br>
		<h4> <b><u> KEYBOARD </u></b></h4>
		<table border="1" style="width: 100%; table-layout: auto;">	
			<tr>
				<th> Names</th>
				<th>Features</th>
				<th>Price per unit</th>
				<!-- <th>Quantity</th> -->
				<th>Cart</th>
			</tr>
			<?php
				while ($result9 =  mysqli_fetch_assoc($keyb)) {
					$part=$result9['ID']; 
				echo "<tr>";
					echo "<td>".$result9['Name']."</td>";
					echo "<td>".$result9['Feature']."</td>";
					echo "<td>".$result9['Price']."</td>";
					// echo "<td>"."Quantity"."</td>";
					echo "<td>"."<a href='cart.php?id=$part'><button class='btn btn-success'>Add</button></a>"."</td>";
				echo "</tr>";
				}
			?>
			</table>
<!-- MOUSE -->
			<br>
		<h4> <b><u> MOUSE </u></b></h4>
		<table border="1" style="width: 100%; table-layout: auto;">	
			<tr>
				<th> Names</th>
				<th>Features</th>
				<th>Price per unit</th>
				<!-- <th>Quantity</th> -->
				<th>Cart</th>
			</tr>
			<?php
				while ($result10 =  mysqli_fetch_assoc($mouse)) {
					$part=$result10['ID']; 
				echo "<tr>";
					echo "<td>".$result10['Name']."</td>";
					echo "<td>".$result10['Feature']."</td>";
					echo "<td>".$result10['Price']."</td>";
					// echo "<td>"."Quantity"."</td>";
					echo "<td>"."<a href='cart.php?id=$part'><button class='btn btn-success'>Add</button></a>"."</td>";
				echo "</tr>";
				}
			?>
			</table>

			
</div>

<br><br>
<hr>
</body>
</html>