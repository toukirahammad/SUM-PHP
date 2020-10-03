<?php 


if(isset($_POST['Submit'])){
	
	$first = $_POST['first_number'];
	$second = $_POST['second_number'];

	$sum= $first + $second;
	
	echo $sum;
	


}
 ?>
 <a href="index.php"> back</a>