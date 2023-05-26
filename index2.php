<?php
require_once("php/connect.php"); //CONNECT TO MYSQL
$get = mysqli_query($connect, "SELECT * FROM `disp`"); 
$get_op = mysqli_query($connect, "SELECT * FROM `op`");
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <form action="php2/sent_op.php" method="post" id = "formone">
        <label>OP</label>
        <input type="text" class="check1" name="op" required>
        <button type="submit" class="btn2">Добавить</button>
    </form>
    <div id="error-message2" style="color: red;"></div>
    <br>
    <br>
    <form action="php2/Sent_DSP.php" method="post" id="form">
        <select name="selectop" id="" class="select" required>
            <option value="vv"  selected hidden>Выбрать ОП</option>
            <?php $get_op1 = mysqli_query($connect, "SELECT * FROM `op`"); ?>
            <?php while($row = mysqli_fetch_array($get_op1)):;?>
                <option><?= $row['Name_OP']; ?></option>
            <?php endwhile;?>
        </select>
        <br>
        <br>
        <label for="check2">Name_OP</label>
        <input type="text" class="check2" name="DSP" required>
        <button type="submit" class="bb">Добавить</button>
    </form>
    <div id="error-message" style="color: red;"></div>
    <hr>
    <br>
    <div style="float: right;">
        <a href="index.php"><button>BackPage</button></a>
    </div>
    
    <form action="php2/Sent_ZUV.php" method="post">
    <select name="select_op" id="" class="select_1" required>
            <option value="vv"  selected hidden>Выбрать ОП</option>
            <?php while($row = mysqli_fetch_array($get_op)):;?>
                <option><?= $row['Name_OP']; ?></option>
            <?php endwhile;?>
     </select>
    <select name="Select" id="" required class="my-select1">
        <option value="" selected hidden>выбрать Дсп</option>
    </select>
    <div style="display: flex; margin-top: 20px;">
        <div style="margin-right: 20px;">
            Знание. 
            <br>
            <textarea name="Zn" id="Zn" cols="30" rows="10" class="txt" required></textarea>
        </div>
        <div style="margin-right: 20px;">
            Умение:
            <br>
            <textarea name="Un" id="Un" cols="30" rows="10" class="txt2" required></textarea>
        </div>
        <div>
            Владение:
            <br>
            <textarea name="Vn" id="Vn" cols="30" rows="10" class="txt3" required></textarea>
        </div>
    </div>
    <br>
    <input type="submit" value="Добавить" name="submit">
    </form>
    <div style="float: right;">
        <form action="php2/delete.php" method="post">
            <input type="submit" value="Удалить все данные" name="submitdel">
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js2/poisk.js"></script>
    <script src="js2/get.js"></script>
</body>
</html>