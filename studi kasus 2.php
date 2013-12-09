<!DOCTYPE HTML>
<html>
	<head>
		<title>Studi Kasus 2 Modul 2</title>
	</head>

	<body>
		
		<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
		Hobi
			<input type="checkbox" name="agama[]" value="Islam"Checked
			/>Islam
			
			<input type="checkbox" name="agama[]" value="Keristen"
			/>Keristen
			
			<input type="checkbox" name="agama[]" value="Budha"
			/>Budha
			
			<input type="checkbox" name="agama[]" value="Katolik"
			/>Katolik
			
			<input type="checkbox" name="agama[]" value="Hindu"
			/>Hindu
			
			
			<input type="SUBMIT" value="OK" />
		</form>
		
		<?php
		//Ekstraksi Nilai
		if (isset($_POST['hobby'])){
			foreach ($_POST['hobby'] as $key => $val){
				echo $key . ' -> ' .$val . '<br />';
			}
		}
		?>

	</body>
</html>