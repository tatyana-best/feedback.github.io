<?php include '/header.php';?>
<div class="main-container">
	<div class="main form">
		<div>
			<form action="" method="post">
				<label for="login">Логин:</label><br>
				<input type="text" name="login" id="login"><br>
				<label for="password">Пароль:</label><br>
				<input type="text" name="password" id="password"><br><br>
				<button type="submit" >Войти</button>
				<a class="button" href="index.php?option=index">
					Назад
				</a>
			</form>

		</div>
	</div>
<div class="main"><div class="item4"><?php  echo $text;?></div></div>
</div>
<?php include '/footer.php';?>