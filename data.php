<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Start php</title>
</head>
<body>
	<h1>Данные пользователя</h1>
	<table border="2">
		<thead>
		<tr>
			<th>first_name</th>
			<th>last_name</th>
			<th>gender1</th>
			<th>age</th>
			<th>gender2</th>
			<th>your_birthday</th>
			<th>family_status</th>
			<th>social_status</th>
			<th>your_adress</th>
			<th>activities</th>
			<th>site_frequency</th>
			<th>books_read</th>
			<th>comments</th>
			<th>multiple_select</th>
			<th>email</th>
			<th>spam</th>
			<th>complexity</th>
		</tr>
		</thead>
		<tbody>
    <?php
			$db_host = "localhost";
			$db_user = "root";
			$db_password = "";
			$db_table = "start_php";

			$db =  mysqli_connect($db_host, $db_user, $db_password, $db_table);
    	if ($db -> connect_error) {
        die("Ошибка подключения: " . $db->connect_error);
    }
      $sql = "SELECT * FROM inform";
    	$result = $db -> query($sql);
    	if($result) {
    		while($row = $result -> fetch_assoc()) {
    			?>
			<tr>
				<td><?= $row['first_name'] ?></td>
				<td><?= $row['last_name'] ?></td>
				<td><?= $row['gender1'] ?></td>
				<td><?= $row['age'] ?></td>
				<td><?= $row['gender2'] ?></td>
				<td><?= $row['your_birthday'] ?></td>
				<td><?= $row['family_status'] ?></td>
				<td><?= $row['social_status'] ?></td>
				<td><?= $row['your_adress'] ?></td>
				<td><?= $row['activities'] ?></td>
				<td><?= $row['site_frequency'] ?></td>
				<td><?= $row['books_read'] ?></td>
				<td><?= $row['comments'] ?></td>
				<td><?= $row['multiple_select'] ?></td>
				<td><?= $row['email'] ?></td>
				<td><?= $row['spam'] ?></td>
				<td><?= $row['complexity'] ?></td>
			</tr>
				<?php
        }
      }

    ?>
		</tbody>
	</table>



</body>
</html>

