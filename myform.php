<html xmlns="http://www.w3.org/1999/xhtml">

 
<head>
<title>Form Administrator</title>
</head>
<body>
<?php
if(($_POST['user']=='endrakilla') AND ($_POST['pass']=='1234')) {
echo 'Selamat datang anda memasuki Form Administrator dengan menggunakan ID user :'.$_POST['user'];
echo '<br><br>Selamat menjalankan dan mengerjakan tugas anda' . $_POST['user'];
}
else {
echo "<br><br><br><body text='red'><strong><center>Maaf! Terjadi kesalahan saat anda mencoba untuk Log in! Periksa kembali identitas anda<br><br><a href='form.html'><h4>Kembali Ke Login</h4></a></center></strong></body>";
}
?>
</body>

</html>
