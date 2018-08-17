<html lang="en">
<head>
    <title>View</title>
    </head>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
<body class="view">
<!--   <div class="container">-->
    <header >
        <img src="images/memory.jpg" alt="" width="100%" height="200px">
<!--        <h2 class="link-title" href="home.html">AJKV Tours & Travels  </h2>-->
    </header>
    
    <div class="menu" >
        <a href="home.html">Home</a> &emsp; &emsp;  &emsp; &emsp;    
         <a href="tours.html">Tours</a> &emsp;  &emsp;  &emsp; &emsp;  
         <a href="other facilities.html">Other Facilities</a>  &emsp;  &emsp;  &emsp;  &emsp; 
         <a href="about.html">About Us</a> &emsp;  &emsp;  &emsp;  &emsp; 
         <a href="contact.html">Contact Us</a> &emsp;  &emsp;  &emsp;  &emsp; 
        <a href="view.php">View Feedback</a>
    </div>    
<?php
	$c = mysqli_connect ('localhost','root','');
	if(!$c)
		exit("Error in connecting to mysql");
	$db = mysqli_select_db($c,'tours');
	if (!$db)
		exit("Error in connecting to database");
	$query = "SELECT * from CONTACT";
	$result = mysqli_query($c, $query);
	$num_rows = mysqli_num_rows($result);
	print '<table border = "1" align="center" cellpadding = "25" cellspacing = "2" >
		<caption><h2>FEEDBACK</h2></caption>';
	print '<tr>
		<th>S.No. </th>
		<th>Name </th>
		<th>Mobile No.</th>
		<th>Email id</th>
        <th>Feedback</th>
	         </tr>';
	for($i=1;$i<=$num_rows;$i++)
	{
		$row = mysqli_fetch_array($result);
		print '<tr> <td>';
			echo $i; 
        print '</td> <td>';
			echo $row[0];
		print '</td> <td>';
			echo $row[1];
		print '</td> <td>';
			echo $row[2];
        print '</td> <td>';
			echo $row[3];	
	}
	print '</table>';
	mysqli_close($c);
?>
</body>
</html>