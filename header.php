<!DOCTYPE html>
<html>
	<head>
		<title><?=$title;?></title>
		<link href="style.css" rel="stylesheet">
	</head>
	<body>
		<div class="header-container">
			<div class="header">
				<div class="logo item1">
					<img src="img/logo.png">
				</div>			
				<?php if(!isset($_SESSION['id_a'])):?>
					<div class="welcome item2">
						Привет, гость!
					</div>
					<div class="item3">
						<a href="index.php?option=view">
							<img src="img/enter.png">
						</a>
					</div>
				<?else:?>
					<div class="welcome item2">
						Привет, админ!
					</div>
					<div class="item3">
						<a href="index.php?option=index&id_a=<?=$_SESSION['id_a']?>">
							<img src="img/exit.png">
						</a>
					</div>
				<?endif;?>
			</div>
		</div>
		