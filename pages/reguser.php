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
    <?php 
    
    if (isset($_COOKIE['user_id'])) {
        die(" <div class='d-flex justify-content-center align-items-center flex-column' <p> Вы уже зарегистрировались! </p> <a href='../index.php'>Вернуться на главную страницу.</a> </div>");  
  }
    
    ?>
        <div class="d-flex justify-content-center">
            <h2 class="mt-3 mb-5" style="color: #6F7071;" >Регистрация заказчика</р>
        </div>
        <div class="d-flex justify-content-center align-items-center">
        <div class="choose-border" style="width:700px;">
            <div class="form-container pt-2">
                <form class="row g-3 py-5 needs-validation d-flex justify-content-center align-items-center flex-column" action="/php/reguser.php" method="POST" novalidate>
  <div class="col-md-4 my-2 d-flex justify-content-center align-items-center flex-column" style="width: 80%;">
    <label for="validationCustom10" class="form-label">Электронная почта</label>
    <input type="email" name="email" class="form-control" id="validationCustom10" required>
    <div class="valid-feedback">
    </div>
  <div class="invalid-feedback">
        Вы должны ввести корректные данные.
    </div>
    </div>
  <div class="col-md-4 my-2 d-flex justify-content-center align-items-center flex-column" style="width: 80%;">
    <label for="validationCustom12" class="form-label">Пароль</label>
    <input type="password" name="pass" class="form-control" id="validationCustom12" required>
    <div class="valid-feedback">
    </div>
    <div class="invalid-feedback">
        Вы должны ввести корректные данные.
    </div>
  <div class="col-12 my-5 d-flex justify-content-center align-items-center flex-column" style="width: 80%;">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Я согласен с <a href="/pages/Prav.php">пользовательским соглашением </a>
      </label>
      <div class="valid-feedback">
      </div>
      <div class="invalid-feedback">
        Для регистрации вы должны быть согласны с пользовательским соглашением.
    </div>
    </div>
  </div>
  <div class="col-12 d-flex mb-2 justify-content-center align-items-center flex-column" style="width: 80%;">
    <button class="button-form" type="submit">Зарегистрироваться</button>
  </div>
  <div class="col-12 d-flex justify-content-center align-items-center flex-column" style="width: 80%;"><a href="/pages/authuser.php">Есть аккаунт?</a></div>
</form>
            </div>
        </div>
        </div>
    </main>
    <?php
    include $_SERVER['DOCUMENT_ROOT'].'/components/footer.php';
    ?>
    <script defer src="/js/validate.js"></script>
    <script defer src="/js/script.js"></script>
</body>
</html>