<?php
$carpeta="imagenesSubidas/";
opendir($carpeta);
$destino=$carpeta.$_FILES['foto']['name'];
copy($_FILES['foto']['tmp_name'], $destino);
echo "imagen subida correctamente";
$nombre=$_FILES['foto']['name'];
echo "<img src=\"imagenesSubidas/$nombre\">";
?>