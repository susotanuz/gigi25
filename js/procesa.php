<?php
$cn = mysql_connect("localhost","root","123");
mysql_select_db("gigi25", $cn);
 
if($_GET['action'] == 'listFotos'){
 
    $query = mysql_query("SELECT * FROM fotos ORDER BY id_foto DESC", $cn);
    while($row = mysql_fetch_array($query))
    {
        echo  '<li>
                <img src="../js/fotos/'.$row['nombre_foto'].'" />
                <span>'.$row['nombre_foto'].'</span>
            </li>';
    }
 
}else
{
    $destino = "../js/fotos/";
    if(isset($_FILES['image'])){
 
        $nombre = $_FILES['image']['name'];
        $temp   = $_FILES['image']['tmp_name'];
 
        // subir imagen al servidor
        if(move_uploaded_file($temp, $destino.$nombre))
        {
            $query = mysql_query("INSERT INTO fotos VALUES('','".$nombre."')" ,$cn);
        }
 
        echo  '<li>
                <img src="../js/fotos/'.$nombre.'" />
                <span>'.$nombre.'</span>
            </li>';
    }
}
?>
