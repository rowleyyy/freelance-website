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
        <div class="d-flex justify-content-center">
            <h2 class="my-3" style="color: #6F7071;" >Регистрация</р>
        </div>
    <div class="d-flex justify-content-around">
        <div class="choose-border">
        <div class="choose-card">
          <div class="container-fluid pt-3 pb-5 d-flex justify-content-center">
           <div class="choose-container-img d-flex justify-content-center align-items-center">
           <img src="/img/spec.jpg" alt="">
            </div>
            </div>
            <div class="choose-button">
                <a href="/pages/registration.php"><button>Исполнитель</button></a>
            </div>
            </div>
        </div>
        <div class="choose-border">
        <div class="choose-card">
            <div class="container-fluid pt-3 pb-5 d-flex justify-content-center">
           <div class="choose-container-img d-flex justify-content-center align-items-center">
           <img src="/img/user.jpg" alt="">
            </div>
            </div>
            <div class="choose-button">
                <a href="/pages/reguser.php"><button>Заказчик</button></a>
            </div>
        </div>
        </div>
    </div>
    </main>
    <?php
    include $_SERVER['DOCUMENT_ROOT'].'/components/footer.php';
    ?>
    <script defer src="/js/validate.js"></script>
</body>
</html>