<?php
require_once("php/connect.php"); //CONNECT TO MYSQL
$queri = mysqli_query($connect, "SELECT * FROM `users`"); 
$queri_whose = mysqli_query($connect, "SELECT * FROM `whose_ps`"); 
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>МОДИФИКАЦИЯ И ЦИФРОЗИВАЦИЯ</title>
</head>
<body>
    <h1>
        МОДИФИКАЦИЯ И ЦИФРОЗИВАЦИЯ
    </h1>
    <hr>
    <br>
<!-- 1 -->
    <form action="php/request_to_PS.php" method="POST" id="form">
        <select name="whose" id="" class="select_whose" required="required"> <!-- select PS -->
            <option value="" style="width: 50px;" disabled selected>выбрать</option>
            <?php while($row = mysqli_fetch_array($queri_whose)):;?><option><?= $row['whose_is_ps']; ?></option><?php endwhile;?>
        </select>
        <br>
        <label for="PSvalue">Проф стандарт</label>
        <input type="text" name="PSvalue" placeholder="Проф стандарт" class="valuePS" required="required"> <!--input for write PS-->
        <button type="submit"  class="btn_for_ps">Добавить</button>
    </form>    
    <div id="error-message" class="error"></div>
    <div class="nextpage">
        <div>
            <a href="index2.php"><button>NextPage</button></a>
        </div>
        <div>
            <a href="index3.php"><button>Input for noun and verbs</button></a>
        </div>
        <div>
            <a href="index4.php"><button>WHOSE_PS</button></a>
        </div>
    </div>
    <br>
    <hr>
    <br>
<!-- 2 -->
    <form action="php/request_to_TF.php" method="POST" id="formTF">
        <select name="value_select_tf" id="mySelect" class="select_for_TF" required="required"> <!-- select PS -->
            <option value="v_p" style="width: 50px;" disabled selected>выбрать Проф стандарт</option>
            <?php while($row = mysqli_fetch_array($queri)):;?><option><?= $row['PSS']; ?></option><?php endwhile;?>
        </select>
        <br>
    <div class="TF">
        <label for="TFvalue">Трудовая функция</label>
        <input type="text" placeholder="Трудовая функция" name="TFvalue" class="value_TF" required="required">  <!--textarea for write TF-->
        <button type="submit" class="btn_for_tf">Добавить</button> <!-- button for request to request-TF.php-->
    </div>
    </form>
    <div id="error-message-tf" class="error"></div>
    <br>
<!-- 3-->
    <hr>
    <br>
    <form action="php/request-ZUN.php" method="POST" onsubmit="return saveText()">
        
        <select name="value_select_ps" id="" class="select_ZUN_PS" required="required"> <!-- select PS -->
            <option value="" style="width: 50px;" disabled selected>выбрать Проф стандарт</option>
            <?php $queri1 = mysqli_query($connect, "SELECT * FROM `users`");  ?>
            <?php while($row = mysqli_fetch_array($queri1)):;?><option><?= $row['PSS']; ?></option><?php endwhile;?>
        </select>
        <select name="val_TF_zun"  class="select_ZUN_TF" required="required">   <!-- select TF-->
            <option value=""  style="width: 50px;" hidden selected>выбрать Трудовая функция</option>
        </select>
        <br>
        <br>
        <div class="txtarea">
            <div class="txtarea-2">
                <textarea cols="60" rows="20" id="txt_zn" class="txt"  placeholder="ЗУН" name="zun" required="required"></textarea>
                <div class="div"><input type="button" name="genered" class="for_style" value="Генерировать ->" onclick="copyText()"></div>
                <textarea name="text_gen" id="txt_gen" cols="50" rows="10" class="txt2"></textarea>
                <div class="div"><button class="gen_verbs">Генерировать глагол -></button> </div>
                <textarea name="text_gen_verb" id="txt_verb" class="txt3" cols="50" rows="10"></textarea>
                
            </div>
            <div class="last_btn"><input type="submit" value="Добавить" name="submit-2" class="for_style"></div>
        </div>
    </form>
    <div id="error-message-zn" class="error"></div>
    <br>
    <br>
    <br>
    <div class="additional">
        <form action="project_name/export.php" method="post">
            <input type="submit" value="Экспорт формат .xsls" class="exp">
        </form>
        <form action="php/request-delete.php" method="post">
            <input type="submit" value="Удалить все данные" name="submit" class="delete">
        </form>
    </div>
<!-- JS coding -->


<script src="js/scriptjs.js"></script>
<!-- <script src="js/save_select.js"></script> -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="js/gen_verbs.js"></script>
<script src="js/zapros.js"></script>
<script src="js/gettf.js"></script>
<script src="js/prov.js"></script>

</body>
</html>