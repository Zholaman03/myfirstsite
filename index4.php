<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="php4/request_whose.php" method="post" id="form">
        <label for="whose">Источник ПС</label>
        <br>
        <input type="text" name="whose" id="" class="value_whose" required>
        <button type="submit" class="btn_whose">Добавить</button>
    </form>
    <div id="error-message" class="error"></div>
    <div style="float: right;">
        <a href="index.php"><button>BackPage</button></a>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js4/get_whose.js"></script>
</body>
</html>