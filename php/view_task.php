<!DOCTYPE html>
<?php
require_once('connect.php');

$sql_query = "SELECT * FROM app";

$result = $db->query($sql_query);


?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task</title>
</head>

<body>
    <div>
        <table border="1" style="text-align: center;">
            <tr>
                <td>Sr no</td>
                <td>Name Of Task</td>
                <td>Task Details
                <td>Date Of Task</td>
                <td colspan="2">Actions</td>
            </tr>
            <?php
            $i = 1;
            while ($row = $result->fetch_assoc()) {
            ?>
            <tr>
            <td><?php echo $i++;?></td>
                <td><?php echo $row['title']?></td>
                <td><?php echo $row['decription']?></td>
                <td><?php echo $row['taskofdate']?></td>
                <td><a  href="add task.php?id=<?php echo $row['id'];?>" ><button style="background-color:white; color: blue;">Update</button></a></td>
                <td><a  href="delete_task.php?id=<?php echo $row['id'];?>" ><button style="background-color:red; color: white;">Delete</button></a></td>
            </tr>
               
            
               
            <?php
                $i++;
            }

            ?>

        </table>

    </div>

</body>

</html>