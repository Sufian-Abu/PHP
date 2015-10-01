
<html>
	<head>
	<title>Retrieve data from database </title>
	</head>
	<body>

	<?php
	// Connect to database server
	  $con=mysql_connect("localhost","root","");
      mysql_select_db("assignment3",$con);

	// SQL query
	$strSQL = "SELECT * FROM student";

	// Execute the query (the recordset $rs contains the result)
	$rs = mysql_query($strSQL);
	
    echo "<table><tr><th>Name</th><th>Email</th><th>Student Id</th><th>Section</th></tr>";
    // output data of each row
    while($row = mysql_fetch_array($rs)) {
       
       
       echo "<tr><td>".$row["fname"]." ".$row["lname"]."</td><td>".$row["email"]."</td><td>".$row["sid"]."</td><td>".$row["slot"]."</td></tr>";
    }
    echo "</table>";


	  

	// Close the database connection
	mysql_close();
	?>
	</body>
	</html>
	
	