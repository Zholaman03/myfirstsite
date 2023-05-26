<?php
require_once("php/connect.php"); //CONNECT TO MYSQL
$get = mysqli_query($connect, "SELECT * FROM `verbs`"); 
$get_op = mysqli_query($connect, "SELECT * FROM `not_verbs`");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="php3/verbs.php" method="POST" onsubmit="return Click()">
        Noun
        <input type="text" name="noun" id="noun" required>
        verbs
        <input type="text" name="verbs" id="" required>
        <button type="submit">Добавить</button>
    </form>
    
    <br>
    <table border="1px solid black" id="myTable">
            <tr>
                <th>Noun</th>
                <th>Verbs</th>
            </tr>
            
            
            <?php while($row = mysqli_fetch_array($get)):;?>
            <tr>
                <td><?=$row['noun'];?></td>
                <td><?=$row['verb'];?></td>
            </tr>
            <?php endwhile;?>
    </table>
    <br>
    <form action="php3/not_verbs.php" method="POST">
        not_verbs
        <input type="text" name="verbs" id="">
        <button type="submit">Добавить</button>
    </form>
    <br>
    <table border="1px solid black">
            <tr>
                <th>not_verbs</th>
            </tr>
            
            
            <?php while($row = mysqli_fetch_array($get_op)):;?>
            <tr>
                <td><?=$row['not_verb'];?></td>
            </tr>
            <?php endwhile;?>
    </table>

    <script src="php3/js3/js3.js"></script>
</body>
</html>