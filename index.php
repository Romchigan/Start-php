<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Form</title>
	<link rel="stylesheet" type="text/css" href="Form.css">
</head>
<body>
<h1>Урок "Формы": теги и их атрибуты. </h1>
<h2>Расскажите немного о себе...</h2>
<p>Попробуйте создать аналогичную форму. Для целей демонстрации вполне подойдут и вымышленные.  </p>
<form method="POST" action="submit.php" class="margin-form">
	<fieldset class="margin-fieldset">
		<legend class="bold">Коротко о себе</legend>
		<p>
			<label>
				Имя:
				<input type="text" name="first_name" size="30">
			</label>
		</p>
		<p>
			<label>
				Фамилия:
				<input type="text" name="last_name" size="30">
			</label>
		</p>
		<p>
			Пол:
			<label>
				<input type="radio" name="gender1" value="m" checked> мужской
			</label>
			<label>
				<input type="radio" name="gender1" value="g"> женский
			</label>
		</p>
		<p class="no-margin">
			<label>
				Возраст: <input type="text" name="age" size="3"> лет
			</label>
		</p>
	</fieldset>
	<fieldset class="margin-fieldset">
		<legend class="bold">Подробнее о себе</legend>
		<p class="no-margin">
			<label>
				<input type="radio" name="gender2" value="m" checked> Молодой человек
			</label>
		</p>
		<p class="no-margin">
			<label>
				<input type="radio" name="gender2" value="g"> Девушка
			</label>
		</p>
		<label>
			<input type="text" name="your_birthday" size="18">
			Дата рождения
		</label>
		<p class="no-margin">
			<label>
				<input type="text" name="family_status" size="18">
				Семейное положение
			</label>
		</p>
		<p class="no-margin">
			<label>
				<input type="text" name="social_status size="18">
				Социальный статус
			</label>
		</p>
		<p class="no-margin">
			<label>
				<input type="text" name="your_adress" size="18">
				Местожительство
			</label>
		</p>
		<h4 class="margin-input">
			Что вы обычно делаете  на выходных:
		</h4>
		<label>
			<input type="checkbox" name="activities">
			Сплю
		</label>
		<p class="no-margin">
			<label>
				<input type="checkbox" name="activities">
				Гуляю с друзьями
			</label>
		</p>
		<p class="no-margin">
			<label>
				<input type="checkbox" name="activities">
				Хожу на рыбалку
			</label>
		</p>
		<p class="no-margin">
			<label>
				<input type="checkbox" name="activities">
				Играю в игры
			</label>
		</p>
		<h4 class="margin-input">
			Рассказать о формах в книге, посвященной HTML:
		</h4>
		<select name="site_frequency">
			<option>
				Site frequency:
			</option>
		</select>
		<h4 class="margin-input">
			Сколько книг вы прочитали за свою жизнь:
		</h4>
		<p class="no-margin">
			<label>
				<input type="radio" name="books_read" value="0-10">
				0-10
			</label>
		</p>
		<p class="no-margin">
			<label>
				<input type="radio" name="books_read" value="11-20">
				11-20
			</label>
		</p>
		<p class="no-margin">
			<label>
				<input type="radio" name="books_read" value="21-50">
				21-50
			</label>
		</p>
		<p class="no-margin">
			<label>
				<input type="radio" name="books_read" value="50+">
				50+
			</label>
		</p>
		<h4 class="margin-input">
			<label for="comment">
				Ваши комментарии:
			</label>
		</h4>
		<textarea id="comment" name="comments" cols="60" rows="10"></textarea>
		<p class="no-margin">
			<select class="position width-select" name="multiple_select" size="3" multiple>
				<option>
					Первая позиция
				</option>
				<option selected>
					Вторая позиция
				</option>
				<option>
					Третья позиция
				</option>
			</select>
		</p>
	</fieldset>
	<fieldset class="margin-fieldset">
		<legend class="bold">И в заключении</legend>
		<input type="text" class="width-input color-text" value="Это поле было введено до вас" disabled>
		<h4 class="margin-heading bold">
			<label for="email">
				Email:
			</label>
		</h4>
		<input id="email" type="email" name="email" class="width-input">
		<h4 class="margin-heading bold">
			Хотите подписаться на самую модную рассылку спама?
		</h4>
		<p class="italic margin-paragraf">
			Выберите категории
		</p>
		<p class="no-margin">
			<label>
				<input type="checkbox" name="spam">
				Оборудование
			</label>
		</p>
		<p class="no-margin">
			<label>
				<input type="checkbox" name="spam">
				Как приготовить обеды
			</label>
		</p>
		<p class="no-margin">
			<label>
				<input type="checkbox" name="spam">
				Заработай миллион за два дня!
			</label>
		</p>
		<h4 class="margin-input">
			Насколько сложная задача:
		</h4>
		<p class="no-margin">
			<label>
				<input type="radio" name="complexity" value="no" checked>
				Совсем нет
			</label>
		</p>
		<p class="no-margin">
			<label>
				<input type="radio" name="complexity" value="yn">
				Так себе
			</label>
		</p>
		<p class="no-margin">
			<label>
				<input type="radio" name="complexity" value="y">
				Еле справились
			</label>
		</p>
	</fieldset>
	<p class="no-margin">
		<button name="submit">Отправить</button>
	</p>
</form>
</body>
</html>

