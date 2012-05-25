<?php
$cn = mysql_connect("localhost","root","123");
mysql_select_db("gigi25", $cn);

$action = ! empty($_GET['action']) ? $_GET['action'] : '';
 
if($action == 'listFotos'){
 
    $query = mysql_query("SELECT * FROM fotos ORDER BY id_fotos DESC", $cn);
    $query OR die(mysql_error());
    while($row = mysql_fetch_array($query))
    {
        $num = $row['id_fotos'];
        include '../item.php';
    }
 
}else
{
    $destino = "../js/fotos/";
    if(isset($_FILES['image'])){

        $name = $_FILES['image']['name'];

        $query = mysql_query('SELECT MAX(id_fotos) FROM fotos');
        $num = (int) mysql_result($query, 0) + 1;

        // subir imagen al servidor
        if(move_uploaded_file($_FILES['image']['tmp_name'], "$destino/$num.jpg"))
        {
            $query = mysql_query("INSERT INTO fotos(id_fotos) VALUES($num)" ,$cn);
        }
        include '../item.php';
    }
}
?>
