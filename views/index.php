<?php include 'header.php';?>
	<div class="main-container">
		<?php if (!isset($_SESSION['id_a'])):?>
		<div class="main form">
			<div>
				<form action="" method="post">
					<label for="name">Ваше имя:</label><br>
					<input type="text" name="name_r" id="name"><br>
					<label for="text">Ваш отзыв:</label><br>
					<textarea type="text" name="text_r" id="text"></textarea><br>
					<button type="submit">Отправить</button>
				</form>
			</div>
		</div>
		<?php endif;?>	
		<?php foreach ($text as $item):?>
			<div class="main">
				<div class="item1">
					<h2><?=$item['name_r']?></h2>
				</div>
				<div class="item2">
					<p><?=$item['data_r']?></p>
				</div>
				<div class="item3">
					<?php if (isset($_SESSION['id_a'])):?>
						<a class="button" href="index.php?option=index&id_r=<?=$item['id_r']?>">Удалить</a>
					<?php endif;?>
				</div>
			</div>
			<div class="main_p">
				<p><?=$item['text_r'];?></p>
			</div>
		<?php endforeach;?>
	</div>
<?php include 'footer.php';
