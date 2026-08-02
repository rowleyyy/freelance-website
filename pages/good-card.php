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
        include "../php/db.php";
        $id = $_GET['id'];
        $query = "SELECT * from `goods` WHERE `id` = '$id'";
        $result = $mysql->query($query);
        $row = $result->fetch_assoc();
    ?>
    <main class="pb-5">
        <div>
        <?php if($result->num_rows > 0):?>
            <div class="d-flex justify-content-center align-items-center flex-column good-card container-fluid">
                <h2 class="mb-5"><?=$row['name']?></h2>
                <div class="d-flex justify-content-center align-items-start flex-column container-fluid">
                <h4>Основные требования</h4>
                <p class="mb-3"><?=$row['req']?></p>
                <h4>Дополнительная информация</h4>
                <p class="mb-3"><?=$row['adds']?></p>
                <h4>Статус</h4>
                <p><?=$row['status']?></p>
                <!-- <img src="/img/<?=$row['pic']?>" alt=""> -->
            </div>
            <?php if(!isset($_COOKIE['user_id']) && isset($_COOKIE['worker_id'])):?>
                <?php
                    $query = ("SELECT `status` from `goods` WHERE `id`= '$id'");
                $check_status = $mysql->query($query);
                $check = $check_status->fetch_assoc();
             if($check['status'] == 'В работе'):?>
                <a href="/php/check_good.php?id=<?=$row['id']?>"><button class="button-form mt-5" style="width: 400px; height: 50px;">Отправить на рассмотрение</button></a>
            </div>
            <?php elseif($check['status'] == 'На рассмотрении'):?>
            <?php else:?>
                <a href="/php/get-good.php?id=<?=$row['id']?>"><button class="button-form mt-5" style="width: 400px; height: 50px;">Взять заказ</button></a>
            <?php endif;?>
                <?php else:?>
                    <?php if($check['status'] == 'На рассмотрении'):?>
                        <a href="/php/approve-good.php?id=<?=$row['id']?>"><button class="button-form mt-5" style="width: 400px; height: 50px;">Подтвердить выполнение</button></a>
                        <?php else:?>
            <?php endif;?>
            <?php endif;?>
            <?php endif;?>
        </div>
    </main>
    <?php
    include $_SERVER['DOCUMENT_ROOT'].'/components/footer.php';
    ?>
    <script defer src="/js/validate.js"></script>
</body>
</html>