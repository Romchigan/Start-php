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
	$multiple_select = (isset($_POST['multiple_select']))?implode(", ", $_POST['multiple_select']):"";
	$email = $_POST['email'];
	$spam = (isset($_POST['spam']))?implode(",", $_POST['spam']):"";
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

  function complexityToUkr($complexity) {
      switch ($complexity) {
          case 'not at all':
              return 'Зовсім ні';
              break;
          case 'So-so':
              return 'Так собі';
              break;
          case 'difficult':
              return 'Важко';
              break;
      }
  };

  switch ($family_status) {
      case 'Не женат':
          $familyStatusWord = 'Не женат';
          break;
      case 'Женат':
          $familyStatusWord = 'Женат';
          break;
      case 'За мужем':
          $familyStatusWord = 'За мужем';
          break;
      case 'Помолвлен':
          $familyStatusWord = 'Помолвлен';
          break;
      case 'Помолвлена':
          $familyStatusWord = 'Помолвлена';
          break;
      case 'Есть девушка':
          $familyStatusWord = 'Есть девушка';
          break;
      case 'Есть парень':
          $familyStatusWord = 'Есть парень';
          break;
      case 'Один':
          $familyStatusWord = 'Один';
          break;
      case 'Одна':
          $familyStatusWord = 'Одна';
          break;
  }

  echo "$familyStatusWord";

  $gender1 = ($gender1 == 'm')? '1' : '2';
  $gender2 = ($gender2 == 'm')? '1' : '2';
  if ($gender1 == $gender2) {
      echo "This ok!";
  }
  else {
      echo "Oppps you have a problem";
  }

	?>
</body>
</html>


