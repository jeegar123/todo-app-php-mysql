
<?php
    require_once('connect.php');
    $id = $_GET['id'];

    $sql_query="DELETE FROM app WHERE id = '$id'";

    if($db->query($sql_query)==true){
        echo "deleted";
    }else{
        echo "not deleted";
    }
echo    "<br>";
    echo "<a href='../index.html'>Go to home</a>";


?>