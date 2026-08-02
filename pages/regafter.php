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
      die(" <div class='d-flex justify-content-center align-items-center flex-column' <p> Ошибка! </p> <a href='../index.php'>Вернуться на главную страницу.</a> </div>");  
  }
    
    ?>
    <main class="pb-5">
        <div class="container">
            <form class="row g-3 needs-validation" novalidate action="/php/regafter.php" method="POST" id="reg-after" enctype="multipart/form-data">
  <div class="col-md-6">
    <label for="validationCustom21" class="form-label">Ваше настоящее имя</label>
    <input type="text" name="name" class="form-control" id="validationCustom01" required>
    <div class="invalid-feedback">
        Вы должны ввести корректные данные.
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustom02" class="form-label">Ваша настоящая фамилия</label>
    <input type="text" name="surname" class="form-control" id="validationCustom22" required>
    <div class="invalid-feedback">
        Вы должны ввести корректные данные.
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom222" class="form-label">Ваш возраст</label>
      <input type="date" name="age" class="form-control" id="validationCustom222" aria-describedby="inputGroupPrepend" required>
      <div class="invalid-feedback">
        Вы должны ввести корректные данные.
    </div>
  </div>
  <div class="col-md-12">
    <label for="validationCustom23" class="form-label">О себе</label>
    <textarea type="text" name="about" class="form-control" id="validationCustom23" style="max-height: 100px;" required maxlength="255"></textarea>
    <div class="invalid-feedback">
        Вы должны ввести корректные данные.
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom04" class="form-label">Специализация</label>
    <select class="form-select mb-2" id="category" name="spec" required>
      <option selected disabled value="">Выберите...</option>
      <option value="IT">IT</option>
      <option value="Дизайн">Дизайн</option>
    </select>
    <div class="invalid-feedback">
      Please select a valid state.
    </div>
  </div>
  <div id="checkbox-container" class="hidden mb-3">
            <div id="it-options" class="hidden">
            <label for="validationCustom04" class="form-label">Выберите навыки</label><br>
            <label><input type="checkbox" name="skills[]" value="Frontend"> Верстка сайта (Frontend)</label><br>
            <label><input type="checkbox" name="skills[]" value="Backend"> Верстка сайта (Backend)</label><br>
            <label><input type="checkbox" name="skills[]" value="Sysadmin"> Системное администрирование</label><br>
            <label><input type="checkbox" name="skills[]" value="HTML"> HTML</label><br>
            <label><input type="checkbox" name="skills[]" value="CSS"> CSS</label><br>
            <label><input type="checkbox" name="skills[]" value="JS"> JS</label><br>
            <label><input type="checkbox" name="skills[]" value="PHP"> PHP</label><br>
            <label><input type="checkbox" name="skills[]" value="FIGMA"> FIGMA</label><br>
            </div>
            <div id="design-options" class="hidden">
            <label for="validationCustom04" class="form-label">Выберите навыки</label><br>
            <label><input type="checkbox" name="skills[]" value="graphic"> Графический дизайн</label><br>
            <label><input type="checkbox" name="skills[]" value="uiux"> UI/UX дизайн</label><br>
            <label><input type="checkbox" name="skills[]" value="illustration"> Иллюстрация</label>
            </div>
        </div>
  <div class="col-md-12">
    <label for="validationCustom25" class="form-label">Ваше фото</label>
    <input type="file" accept="image/png, image/jpeg" name="pic" class="form-control" id="validationCustom25" required style="width: 320px;">
    <div class="invalid-feedback">
        Вы должны ввести корректные данные.
    </div>
  </div>
  <div class="col-12 mt-5">
    <button class="button-form" type="submit">Продолжить</button>
  </div>
</form>
        </div>
    </main>
    <?php
    include $_SERVER['DOCUMENT_ROOT'].'/components/footer.php';
    ?>
        <script>
        document.getElementById("category").addEventListener("change", function() {
            let category = this.value;
            let checkboxContainer = document.getElementById("checkbox-container");
            let itOptions = document.getElementById("it-options");
            let designOptions = document.getElementById("design-options");
            
            itOptions.classList.add("hidden");
            designOptions.classList.add("hidden");
            checkboxContainer.classList.add("hidden");
            
            if (category === "IT") {
                itOptions.classList.remove("hidden");
                checkboxContainer.classList.remove("hidden");
            } else if (category === "Дизайн") {
                designOptions.classList.remove("hidden");
                checkboxContainer.classList.remove("hidden");
            }
        });
    </script>
    <script defer src="/js/validate.js"></script>
</body>
</html>