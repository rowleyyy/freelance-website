<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/reg.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Site</title>
</head>

<body>
    <?php
    include $_SERVER['DOCUMENT_ROOT'] . '/components/header.php';
    ?>
    <main class="mb-5">
        <div class="d-flex justify-content-center">
            <h2 class="my-3" style="color: #6F7071;">Личный кабинет исполнителя</р>
        </div>
        <div class="d-flex flex-column align-items-center justify-content-center">
            <div class="main-info container-fluid d-flex justify-content-around align-items-center mb-3">
                <?php

                include "../php/db.php";

                $id = $_COOKIE['worker_id'];

                $query = "SELECT * from `profiles` WHERE `worker_id` = '$id'";
                $result = $mysql->query($query);
                ?>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <div class="d-flex justify-content-around align-items-center name-photo-container" style="width: 100%:">
                        <div class="photo-container d-flex justify-content-center align-items-center">
                            <img src="../img/<?=$row['pic']?>" alt="" style="width: 200px; height:200px; border-radius: 10px;">
                        </div>
                        <div><p><?=$row['name']?> <?=$row['surname']?></p></div>
                    </div>
                    <div class="specs-account d-flex flex-column align-items-center justify-content-center">
                        <p><?=$row['skills']?></p>
                    </div>
                    <div class="account-button-container d-flex justify-content-center align-items-center">
                        <button class="button-account" id="openModalContacts">Контакты</button>
                    </div>
                    <!-- <div id="modal1" class="modal">
        <div class="modaldisplay">
        <div class="modal-content">
            <span class="close" id="closeBtn">&times;</span>
        </div>
        </div>
            </div> -->
        <?php endwhile; ?>
        </div>
        <div class="d-flex justify-content-evenly align-items-center container-fluid">
            <div class="border-account">
                <a href=""><button>Профиль</button></a>
            </div>
            <div class="border-account">
                <a href="/pages/settings.php"><button>Настройки</button></a>
            </div>
            <div class="border-account">
                <a href="/pages/offers_worker.php"><button>Мои заказы</button></a>
            </div>
            <div class="border-account">
                <a href="/pages/specs.php"><button style="color:black">Обо мне</button></a>
            </div>
        </div>
        </div>
    </main>
    <?php
    include $_SERVER['DOCUMENT_ROOT'] . '/components/footer.php';
    ?>
    <!-- <script>
        var body = document.body;
var modal = document.getElementById("modal1");
var openBtn = document.getElementById("openModalContacts");
var closeBtn = document.getElementById("closeBtn");

openBtn.onclick = function(){
  modal.style.display = "block";
  body.style.overflow = "hidden";
}
closeBtn.click = function(){
  modal.style.display = "none";
  body.style.overflow = "auto";
}
    </script> -->
</body>

</html>