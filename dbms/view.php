<?
	include 'conn.php';
	$query="SELECT * FROM `table`";
	$result=mysqli_query($con,$query);
	echo "<th>id</th<th>name</th><th>email</th><th>phone</th><th>age</th>"
	while($result=mysql_fetch_assoc($result)) {
		echo "<tr>""<td>" .$row['id']."</td>";
		echo "<td>" .$row['name']."</td>";
		echo "<td>" .$row['email']."</td>";
		echo "<td>" .$row['phone']."</td>";
		echo "<td>" .$row['age']."</td>";
	}
	?>
	