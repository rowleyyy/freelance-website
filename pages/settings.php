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
            <h2 class="my-3" style="color: #6F7071;">Настройки</р>
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

        </div>
        <div class="d-flex justify-content-evenly align-items-center container-fluid">
            <div class="border-account">
                <a href="/pages/account.php"><button>Профиль</button></a>
            </div>
            <div class="border-account">
                <a href="/pages/settings.php"><button>Настройки</button></a>
            </div>
            <div class="border-account">
                <a href=""><button>Мои заказы</button></a>
            </div>
            <div class="border-account">
                <a href="/pages/specs.php"><button style="color:black">Обо мне</button></a>
            </div>
        </div>
        </div>
        <form action="/php/settings.php" method="post" class="container mt-5" enctype="multipart/form-data">
        <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Имя</label>
    <input type="text" class="form-control mb-3" id="validationCustom01" value="<?=$row['name']?>" disabled readonly>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Фамилия</label>
    <input type="text" class="form-control mb-3" id="validationCustom02" value="<?=$row['surname']?>" disabled readonly>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-12">
    <label for="validationCustom23" class="form-label">О себе</label>
    <textarea type="text" name="about" class="form-control mb-3" id="validationCustom23" style="max-height: 100px;" required maxlength="255"></textarea>
    <div class="invalid-feedback">
        Вы должны ввести корректные данные.
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom04" class="form-label">Специализация</label>
    <select class="form-select mb-2" id="category" name="spec" required>
      <option selected disabled value=""><?=$row['spec']?></option>
      <option>...</option>
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
    <input type="file" accept="image/png, image/jpeg" name="pic" class="form-control mb-5" id="validationCustom25" style="width: 320px;">
    <div class="invalid-feedback">
        Вы должны ввести корректные данные.
    </div>
  </div>
  <div class="col-12">
    <button class="button-form" type="submit">Подтвердить</button>
  </div>
        </form>
        <?php endwhile; ?>
    </main>
    <?php
    include $_SERVER['DOCUMENT_ROOT'] . '/components/footer.php';
    ?>

    <script defer src="../js/validate.js"></script>
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
</body>

</html>