<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		html, body{
			height: 100%;
		}
	</style>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
	<div class="col-12  p-3" style="background-color: #171A21;">
		<div class="col-8 mx-auto" >
			<div class="row">
				<div class="col-3" >
					<a href="index.html">
						<img src="logo.png" class="w-100">
					</a>
				</div>
				<div class="col-9 pt-4" >
					<a href="" class="text-light ms-4 text-uppercase">Магазин</a>
					<a href="" class="text-light ms-4 text-uppercase">Сообщество</a>
					<a href="" class="text-light ms-4 text-uppercase">O STEAM</a>
					<a href="" class="text-light ms-4 text-uppercase">Поддержка</a>					
				</div>
			</div>			
		</div>
	</div>
	<div class="col-12" style="background-color: #212429; height: 100%;">
		<div class="col-8 mx-auto p-5 row" style="background-color: #222431; height: 100%;">
			<div class="col-3">
				<img src="profile.jfif">
			</div>

			<div class="col-4 text-white">
				<h1>Имя: <?php echo $_GET['profileName'] ?></h1>
				<p>Электронная почта: <?php echo $_GET['gmail'] ?></p>
				<p>Возраст: <?php echo $_GET['age'] ?></p>
				<p class="text-success">
					<?php 
						if($_GET["age"]>=18){
							echo "<p class='text-success'>Ограничений нет</p>";
						} else {
							echo "<p class='text-danger'>Ограничения есть</p>";
						}
					?>

			</div>

			<div class="col text-white">
				<h1>Уровень 1</h1>
				<p>Вы можете отобразить один из вашх значков здесь. Выберите его на страницу редактирования профиля.</p>
				<form action="edit.php" method="GET">
					<input type="" name="passs" value=<?php echo $_GET['pass'] ?>>
					<button class="btn btn-dark">Редактировать профиль</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>