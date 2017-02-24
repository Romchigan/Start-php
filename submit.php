<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Заполненная форма</title>
</head>
<body>

	<?php
	require_once 'data.php';
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$gender1 = $_POST['gender1'];
		$age = $_POST['age'];
		$gender2 = $_POST['gender2'];
		$your_birthday = $_POST['your_birthday'];
		$family_status = $_POST['family_status'];
		$social_status = $_POST['social_status'];
		$your_adress = $_POST['your_adress'];
		$activities = ((isset($_POST["activities"]))?implode(", ", $_POST["activities"]):"");
		$site_frequency = $_POST['site_frequency'];
		$books_read = $_POST['books_read'];
		$comments = ((isset($_POST["comments"]))?implode(", ", $_POST["comments"]):"");
		$multiple_select = $_POST['multiple_select'];
		$email = $_POST['email'];
		$spam = $_POST['spam'];
		$complexity = $_POST['complexity'];

		$db = mysqli_connect("localhost", "root", "", "start_php");
		$my_bd = "start_php";
		mysqli_select_db($db, $my_bd);

		if (!$db) {
				echo "No connection!";
		}
		if (!mysqli_select_db($db, 'start_php')) {
				echo "NO DataBase selected!";
		}

  	$firstName = mysqli_real_escape_string($db, $firstName);

		$sql = "INSERT INTO `inform` (`first_name`, `last_name`, `gender1`, `age`, `gender2`, `your_birthday`, `family_status`, `social_status`, `your_adress`, `activities`, `site_frequency`, `books_read`, `comments`, `multiple_select`, `email`, `spam`, `complexity`)
						VALUES ('$first_name','Красников', 'info', 'info', 'info', 'info', 'info', 'info', 'info', 'info', 'info', 'info', 'info', 'info', 'info', 'info', 'info');";


      $result = $db->query($sql);
      if ($result) {
          echo "<p>Дані успішно додано в БД";
      } else {
          echo "Виникла помилка:".$db->error;
      }



	?>
</body>
</html>


