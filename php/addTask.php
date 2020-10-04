<?php

require_once('./connect.php');
$title = (string)$_POST['title'];
$description = (string)$_POST['description'];
$dateoftask = $_POST['dateoftask'];
$id = null;
if (isset($_POST['id'])) {
    $id = $_POST['id'];
}


//  in php CAST is function to comvert data type

$insert_query = "INSERT INTO app(title,decription,taskofdate) VALUES('$title','$description',CAST('" . $dateoftask . "' AS DATE))";
$update_query = "UPDATE app SET title = '$title' , decription = '$description' ,  taskofdate = CAST('" . $dateoftask . "' AS DATE) WHERE  id = '$id' ";

try {
    //code...
    if ($id) {
        $result = $db->query($update_query);
        echo "<h1>Data  Updated</h1>";
    } else {
        # code...
        $result = $db->query($insert_query);
        echo "<h1>Data inserted successfuly</h1>";
    }


    if (!$result) {
        echo $result;
        echo "<h1>Data inserted unsuccessfuly</h1>" . $db->error;
    }
    echo "<br>";
    echo "<a href='../index.html'>Go to home</a>";
} catch (Exception $th) {
    echo $th;
}

$db->close();
