<?php 
include "conection.php";
// consulta para obtener todos los productos anillos de plata 
$AnilloP = "SELECT * FROM Productos WHERE Id_CategoriaProd = 1";
$EAnilloP = $conexion->query($AnilloP);
$TotalAniP = $EAnilloP->num_rows;




?>