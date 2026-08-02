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
    
    if (!isset($_COOKIE['user_id'])) {
        die(" <div class='d-flex justify-content-center align-items-center flex-column' <p> Ошибка! </p> <a href='../pages/reguser.php'>Вам необходимо войти как заказчик.</a> </div>");        
    }
    
    ?>
    <main class="pb-5">
        <div class="d-flex container">
            <form class="row g-3 needs-validation mx-5" novalidate action="/php/add-ser.php" method="POST" id="reg-after">
  <div class="col-md-6">
    <label for="validationCustom21" class="form-label">Название заказа *</label>
    <input type="text" name="title" class="form-control" id="validationCustom01" required>
    <div class="invalid-feedback">
        Вы должны ввести корректные данные.
    </div>
  </div>
  <div class="col-md-12">
    <label for="validationCustom21" class="form-label">Категория*</label>
    <select name="category" id="validationCustom21" class="select-filter form-select" required>
            <option value="web" selected disabled>Выберите...</option>
            <option value="Веб-разработка">Веб-разработка</option>
            <option value="Программирование">Программирование</option>
            <option value="Техническая документация">Разработка технической документации</option>
            <option value="Системное администрирование">Системное администрирование</option>
            <option value="Техническая поддержка">Техническая поддержка</option>
            </select>
    <div class="invalid-feedback">
        Вы должны ввести корректные данные.
    </div>
  </div>
  <div class="col-md-12">
    <label for="validationCustom02" class="form-label">Обязательные требования *</label>
    <textarea type="text" name="req" class="form-control" id="validationCustom22" required style="max-height: 100px;" maxlength="255"></textarea>
    <div class="invalid-feedback">
        Вы должны ввести корректные данные.
    </div>
  </div>
  <div class="col-md-12">
    <label class="form-label" for="exampleFormControlInput1">Дополнительная информация</label>
    <textarea type="text" name="adds" class="form-control" id="exampleFormControlInput1" style="max-height: 100px;" maxlength="255"></textarea>
    <div class="invalid-feedback">
        Вы должны ввести корректные данные.
    </div>
  </div>
  <!-- <div class="col-md-12">
    <label for="validationCustom25" class="form-label">Ваше фото</label>
    <input type="file" accept="image/png, image/jpeg" name="pic" class="form-control" id="validationCustom25" style="width: 320px;">
    <div class="invalid-feedback">
        Вы должны ввести корректные данные.
    </div>
  </div> -->
  <div class="col-12 mt-5">
    <button class="button-form" type="submit">Разместить услугу</button>
  </div>
</form>
    <div>
      <div class="border-container mx-5">
      <div class="info-service px-3">
        <h4 class="py-3">Памятка</h4>
        <h5 class="pb-1">Название заказа</h5>
        <h6 class="pb-3">Вам необходимо описать цель вашего заказа, например: Создать сайт</h6>
        <h5 class="pb-1">Обязательные требования</h5>
        <h6 class="pb-3">Вам необходимо описать задачи, которые должны быть реализованы, например:         </h6>
          <ul class="pb-3" style="margin: 0">
            <li>Слайдер на главной странице с 3-4 слайдами;</li>
            <li>Адаптивная верстка;</li>
            <li>Модальные окна регистрации и авторизации.</li>
          </ul>
          <h5 class="pb-1">Дополнительная информация</h5>
          <h6 class="pb-3">Здесь вы можете указать любую информацию, которая могла бы помочь в реализации вашего заказа.</h6>
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