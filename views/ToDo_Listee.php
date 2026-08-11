 <?php
	include 'models/iputss.model.php';
	$form = new Form('iputss');
	$form->submit()->validate();
	$txtxx =  $form->setRequiredFields(['txtx', 'vr']);
	$form->setPlaceholder('txtx', 'Название задачи');
	$form->setPlaceholder('vr', 'Дата (ГГГГ-ММ-ДД)');
		
		if (Http::isAjaxRequest('post'))
			{


		asasssssssssssssss
				header('Content-Type: application/json');
				if($form->submit()-> validate(['txtx', 'vr']))
					{
						echo json_encode
						([
							'success'=>true,
							'task' => $form->all(['txtx', 'vr'])
						]);
				}
				else
					{
						echo json_encode([
            					'success' => false,
            					'errors'  => $form->displayErrors()
							]);
					}
					exit();
			} 
            ?>
<!DOCTYPE html>
<html lang="en">
<head>
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
		<form class="iputss" method="post" enctype="multipart/form-data">
            <div id='inputss' class="d-flex gap-3 mb-3">
                <div class="w-100">
                    <?php echo $form->display(['txtx']); ?>
                </div>
                <div class="w-100">
                    <?php echo $form->display(['vr']); ?>
                </div>
            </div>  
            <div id='btsss' class="d-flex flex-wrap gap-2 mb-4">
                <button type="submit" id="bts_add" name="action" value="add" class="btn btn-primary flex-grow-1">Добавить</button>
                <button type="button" id="bts_del" class="btn btn-danger flex-grow-1">Удалить</button>
                <button type="button" id="bts_filtr" class="btn btn-secondary flex-grow-1">Фильтровать по</button>
            </div>              
        </form>

        <div id='tb' class="table-responsive">
            <table class="table table-dark table-sm m-0">
                <thead>
                    <tr>
                        <th style="width">Название задачи</th>
                        <th style="width">Время когда нужно выполнить</th>
                    </tr>
                </thead>
                <tbody id="tablebody">
                    </tbody>
            </table>
        </div>
		<div class="wr_information hide">
			<button id='close_wr_information' type="button" aria-label="Закрыть">&times;</button>
				<span id="H1">Информация о приложении</span>
					<div id="txt_format">Сейчас наш продукт — это надежный цифровой блокнот. Но мы создаем не просто блокнот, мы создаем личного продуктивного ассистента будущего!
						Представьте:
						Мы внедряем революционную систему аналитики продуктивности. Пользователь больше не просто видит список задач — он видит свою эффективность в динамике! Мы дадим ему инсайты и дата-драйвен подход к управлению своим временем.
						Вместо скучного перечня дел — интерактивная панель управления днем с визуализацией прогресса, умными напоминаниями, основанными на его активности, и прогнозами по завершению целей.
					</div>
		</div>
		<script src="media/js/models_window.js"></script>
		<script src="media/js/set.js"></script>
		<script>
			const req = new XMLHttpRequest();
			req.addEventListener("load",()=>{
 				const req = new XMLHttpRequest();
				const parse = new DOMParser();
				const doc = parse.parseFromString(req.responseText, "text/html");
				const content = doc.querySelector("body").textContent;
				console.log(content);
			});
			req.open("GET","https://testlocal.local/to_do_list");
			req.send();
		</script>
	</div>	
</body>
</html>