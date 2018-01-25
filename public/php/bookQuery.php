<!-- query.php -->
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
	</head>
	<body>
		<?php
		require_once('mysql.con.php');
		echo  $_GET['book_name'];
			echo "
			<table>
				<tr>
					<th>book_id</th>
					<th>book_name</th>
					<th>book_author</th>	
					<th>owner_id</th>
					<th>insert_time</th>	
				</tr>";
				
				$qid = mysql_query("select count(*) as total from ibe_bookinfo");
				$res = mysql_fetch_array($qid);
				$db_num =  $res[0];
				$book_name = $_GET['book_name']; 
				// echo gettype($book_name);
				// echo $book_name;
				// $result = mysql_query("select * from zhaoxin15 where Name ='".$name."'");
				$result = mysql_query("select * from ibe_bookinfo where book_name like '%".$book_name."%'");

				$i = 1;
				while($row = mysql_fetch_array($result)){
					if($i % 2 == 0){
						echo "<tr class='even'>";
					}
					else{
						echo "<tr class='singular'>";
					}
					echo "<td>".$row['book_id']."</td>";
					// echo "<td><a href='/result_detail.php?personId=".$row['PersonId']."'target='_blank'>".$row['Name']."</a></td>";
					// echo "<td><a href='/result_detail.php?personId=".$row['book_owner_message']."'target='_blank'>".$row['Name']."</a></td>";
					echo "<td>".$row['book_name']."</td>";
					echo "<td>".$row['book_author']."</td>";
					echo "<td>".$row['owner_id']."</td>";
					echo "<td>".$row['insert_time']."</td>";
					echo "</tr>";
					$i++;
				}
				echo "</table>";
			?>
	</body>
</html>