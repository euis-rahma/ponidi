<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
 <title>Aplikasi Untuk Mengupload File PDF Dengan PHP | belajarwebpedia.com</title>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
</head>
<body class="container">
<?php
$id    = mysqli_real_escape_string($koneksi,$_GET['id']);
$query = mysqli_query($koneksi,"SELECT * FROM data_file WHERE id='$id' ");
$data  = mysqli_fetch_array($query);
?>
<h1>Aplikasi Untuk Mengupload File PDF Dengan PHP</h1>
<hr>
<b>Judul:</b> <?php echo $data['judul'];?> | <a href='index.php'> Kembali </a>
<hr>
 <embed src="file/<?php echo $data['nama_file'];?>" type="application/pdf" width="800" height="600" >
</body>
</html>