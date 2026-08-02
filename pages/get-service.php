<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/reg.css">
    <title>Document</title>
</head>
<body>
<?php
    include $_SERVER['DOCUMENT_ROOT'].'/components/header.php';
    ?>
    <?php 
    
    if (!isset($_COOKIE['worker_id'])) {
        die(" <div class='d-flex justify-content-center align-items-center flex-column' <p> Ошибка! </p> <a href='../pages/auth.php'>Вам необходимо войти как исполнитель.</a> </div>");        
    }
    include "../php/db.php";

    $id = $_COOKIE['user_id'];

    $query = "SELECT * from `profiles` WHERE `user_id` = '$id'";
    $result = $mysql->query($query);
    ?>
    <main class="pb-5">
    <div class="d-flex justify-content-center my-5">
            <h2 style="color: #6F7071;" >Мои заказы</р>
        </div>
        <div>
                <?php

                $worker_id = $_COOKIE['worker_id'];


                $query = "SELECT * FROM `goods` WHERE `worker_id` = '$worker_id'";
                $result = $mysql->query($query);

                ?>
                <?php if($result->num_rows > 0):?>
                    <?php while ($good = $result->fetch_assoc()):?>
                        <div class="goods d-flex justify-content-center align-items-center flex-column container-fluid">
                        <div class="border-good mb-3">
                        <div class="good px-3" onclick="window.location.href='/pages/good-card.php?id=<?=$good['id']?>'">
                        <h4 class="py-3" style="text-align:center;"><?=$good['name']?></р>
                        <h6 class=""><?=$good['req']?></h6>
                    </div>
                    </div>
                    <?php endwhile;?>
                    <?php else:?>
                        <p style="color: #6F7071; text-align:center">Нет доступных услуг</p>
        <?php endif;?>
            </div>
        </div>
    </main>
    <?php
    include $_SERVER['DOCUMENT_ROOT'].'/components/footer.php';
    ?>
    <script defer src="/js/validate.js"></script>
</body>
</html>