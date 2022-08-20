<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <title>Певрая страничка</title>
</head>
<body>
<!-- <script src="based.js"></script> -->
<div class="flex-container">
    <div class="logo">
        <?php include 'Logo.inc.php' ?>
    </div>
    <div class="header">
        <?php include 'menu.inc.php' ?>
    </div>
    <div class="aboutMe">
        <h1> <?php echo $p ?> </h1>
            <div class="data">
                <div class="myImg">
                    <?php
                    echo '<img src="https://c.tenor.com/NF6ixwAmrTMAAAAd/cristiano-ronaldo-drinking.gif" alt="А всё" width="370px">';
                    ?>
                </div>
                <div class="fullName"
                    <p> Меня зовут
                    <?php echo $name, ' ', $surname . '<br>';
                    echo 'Я из города', ' ', $city; ?>
                    </p>
                    <p> Мне
                        <?php echo $age; ?>
                        лет</p>
            </div>
    </div>
    <div class ="knowlege">
        <ol>
        <li> Я научился простейшим операциям с переменными</li>
        <li> Изучил склеивание строк</li>
        <li> Узнал что такое волшебные константы</li>
        <li> Верстать кстати так и не научился, но вставил крутую гифку и уже рад :)</li>
        </ol>
        <?php
        include 'knowlege.inc.php'; ?>
        <div class="daxak">
        <img src="images/daxak.png" alt="daxak" width="100px">
        </div>
    </div>
    <?php include "footer.inc.php" ?>
</div>
</html>
