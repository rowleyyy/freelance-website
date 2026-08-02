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
    <main class="pb-5">
        <?php if(!isset($_COOKIE)){
            die(" <div class='d-flex justify-content-center align-items-center flex-column' <p> Ошибка! </p> <a href='../index.php'>Вернуться на главную страницу.</a> </div>");        }
        ?>
        <div class="d-flex justify-content-center align-items-center flex-column">
            <h2 class="mt-3 mb-5" style="color: #6F7071;" >Админ-панель</р>

        <?php

        include "../php/db.php";

        $query = "SELECT workers.id, workers.email, profiles.name, profiles.surname, profiles.age, profiles.about, profiles.spec, profiles.pic FROM workers LEFT JOIN profiles ON workers.id = profiles.user_id WHERE workers.status = 'pending'";
        $result = $mysql->query($query);

        ?>
        <h4 class="mt-3 mb-5" style="color: #6F7071;">Пользователи</h4>
        </div>
        <?php if($result->num_rows > 0):?>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Email</th>
                <th scope="col">Имя</th>
                <th scope="col">Фамилия</th>
                <th scope="col">Возраст</th>
                <th scope="col">О себе</th>
                <th scope="col">Специализация</th>
                <th scope="col">Фото</th>
                <th scope="col">Действия</th>
            </tr>
            </thead>
            <?php while($row = $result->fetch_assoc()): ?>
                <tbody>
            <tr>
                <td><?= $row['email']?></td>
                <td><?= $row['name']?></td>
                <td><?= $row['surname']?></td>
                <td><?= $row['age']?></td>
                <td><?= $row['about']?></td>
                <td><?= $row['spec']?></td>
                <td>
                <img src="<?= '/'.$row['pic']?>">
                </td>
                <td>
                    <a href="/php/approve.php?id=<?=$row['id']?>">Подтвердить</a>
                    /
                    <a href="/php/cancel.php?id=<?= $row['id']?>">Отклонить</a>
                </td>
            </tr>
            </tbody>
            <?php endwhile;?>
        </table>
        <?php else:?>
            <div class="d-flex justify-content-center align-items-center">
                <h4 style="color: #6F7071;">Нет доступных заявок</h4>
            </div>
        <?php endif;?>   
        <div class="d-flex justify-content-center align-items-center flex-column">
        <h4 class="mt-3 mb-5" style="color: #6F7071;">Услуги</h4>
        </div>
        <?php 
            include "../php/db.php";

            $query = "SELECT * from `goods` WHERE `status` = 'pending'";

            $result = $mysql->query($query);
        ?>
        <?php if($result->num_rows > 0):?>
            <table class="table">
            <thead>
            <tr>
                <th scope="col">Название услуги</th>
                <th scope="col">Обязательная информация</th>
                <th scope="col">Дополнительная информация</th>
                <th scope="col">Фото</th>
                <th scope="col">Действия</th>
            </tr>
            </thead>
            <?php while($row = $result->fetch_assoc()): ?>
                <tbody>
            <tr>
                <td><?= $row['name']?></td>
                <td><?= $row['req']?></td>
                <td><?= $row['adds']?></td>
                <td>
                <img src="<?= '/'.$row['pic']?>">
                </td>
                <td>
                    <a href="/php/approve-good.php?id=<?=$row['id']?>">Подтвердить</a>
                    /
                    <a href="/php/cancel-good.php?id=<?= $row['id']?>">Отклонить</a>
                </td>
            </tr>
            </tbody>
            <?php endwhile;?>
        </table>
        <?php else:?>
            <div class="d-flex justify-content-center align-items-center">
                <h4 style="color: #6F7071;">Нет доступных заявок</h4>
            </div>
        <?php endif;?>   
    </main>
    <?php
    include $_SERVER['DOCUMENT_ROOT'].'/components/footer.php';
    ?>
    <script defer src="/js/validate.js"></script>
    <script defer src="/js/script.js"></script>
</body>
</html>