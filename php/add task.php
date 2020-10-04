<!DOCTYPE html>

<?php
require('connect.php');
    $id=0;
    $data=[
        'title'=>"",
        'decription'=>"",
        'dateoftask'=>null

    ];
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql_query="SELECT * FROM app WHERE id = '$id'";

    $result=$db->query($sql_query);

    $data=$result->fetch_assoc();
    
    $db->close();

}


?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add task</title>
</head>

<body>

    <form action="addTask.php" method="post">


        <input type="text" name="title" placeholder="enter title" value="<?php echo $data['title']?>" required>
        <br>

        <textarea name="description" rows="4" placeholder="enter task details" required><?php echo $data["decription"]?></textarea>
        <br>
        <label for="">Date of Task</label>
        <input type="date" name="dateoftask" value="<?php echo $data['taskofdate']?>" required>
        <br>
        <input type="hidden" name="id" value="<?php echo $id;?>">
        <button type="submit">Add Task</button>

    </form>

</body>

</html>