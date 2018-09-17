<?php
$file = $_FILES['uploadfile'];
$nama_file = $file['name'];
$nama_tmp = $file['tmp_name'];
$upload_dir = "upload/";
move_uploaded_file($nama_tmp,$upload_dir.$nama_file);
echo "Gambar berhasil diunggah."
?>
<img src="upload/<?php echo $nama_file; ?>">