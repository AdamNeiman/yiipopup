<?php
?>

<html>
<head>
	<script src="https://popup.myhelper.website/script?id=<?=$id?>"></script>
</head>

<body>
	<h2>Тестовая страница для окна "<?=$name?>"</h2>
	<h2>Окно включено: "<?=$isOn?>"</h2>
	<h2>Контент:</h2>
	<div style="border:1px solid #333;padding:10px;width:50%;">
		<?= $content ?>
	</div>
</body>
</ntml>