<!DOCTYPE HTML>
<html>
	<head>
		<title>Studi Kasus 1 Modul 2</title>
	</head>

	<body>
		
		<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
		Hobi Anda di Rumah:
		<select name="hoby">
			<option value="Baca Buku">Baca Buku
			<option value="Menonton Film"Selected>Menonton Film
			<option value="Main Game">Main Game
			<option value="Tidur">Tidur
		</select> <br />
		
		<input type="submit" value="ok" />
		</form>
		
		<?php
			if (isset($_POST['hoby'])) {
				echo $_POST['hoby'];
			}
		?>
		
	</body>
</html>