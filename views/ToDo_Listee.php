<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>To-do-List</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="media/css/style.css">
	
</head>
<body class='body' hide>
	<?php include 'header_naz.php';?>
	<div class="wrap">
		<div class="sidebar">
			<ul>
				<li class="li1">О нас</li>
			</ul>
		</div>
	<?php include 'validationpole.php';?>
		<form  method="post">
			<div id='inputss'>
				<input id='txtx' placeholder="Название задачи" maxlength="20" id="Zadacha" type="text" name="string_input" required>	
				<input id='vremya' placeholder="Время" maxlength="20" id="DateTime" type="date" name="date_input" required>
			</div>	
			<div id='btsss'>
				<button	id="bts_add">Добавить</button>
				<button id="bts_del">Удалить</button>
				<button id="bts_filtr">Фильтровать по</button>
			</div>				
		</form>
		<div id='tb'>
			<table class="table table-dark table-sm">
				<thead>
					<tr>
						<th>Название задачи</th>
						<th>Время когда нужно выполнить</th>
					</tr>
				</thead>
					<tbody id="tablebody">
					</tbody>
			</table>
		</div>
		<div class="wr_information hide">
			<div id='close_wr_information'><button id='close_wr_information'>X</button></div>
				<span id="H1">Информация о приложении</span>
					<div id="txt_format">Сейчас наш продукт — это надежный цифровой блокнот. Но мы создаем не просто блокнот, мы создаем личного продуктивного ассистента будущего!
						Представьте:
						Мы внедряем революционную систему аналитики продуктивности. Пользователь больше не просто видит список задач — он видит свою эффективность в динамике! Мы дадим ему инсайты и дата-драйвен подход к управлению своим временем.
						Вместо скучного перечня дел — интерактивная панель управления днем с визуализацией прогресса, умными напоминаниями, основанными на его активности, и прогнозами по завершению целей.
					</div>
		</div>
		<script src="media/js/set.js"></script>
		<script src="media/js/models_window.js"></script>
	</div>	
</body>
</html>