<?php

include "../php/db.php";

$selected_category = $_GET['category'] ?? '';

$query = "SELECT * FROM goods WHERE `status` = 'В ожидании'";

if($selected_category){
    $query .= " AND category = '" . $mysql->real_escape_string($selected_category) . "'";
}

$result = $mysql->query($query);
$filtered_data = $result->fetch_all(MYSQLI_ASSOC);
$categories_result = $mysql->query("SELECT DISTINCT category FROM goods");
$categories = [];
while ($row = $categories_result->fetch_assoc()){
    $categories[] = $row['category'];
}
?>
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
            die("Ошибка! <a href='../index.php'>Вернуться на главную страницу.</a>");
        }
        ?>
        <div class="d-flex justify-content-center">
            <h2 class="my-3" style="color: #6F7071;" >Услуги</р>
        </div>
        <div class="d-flex justify-content-center">
            <h4 class="my-3" style="color: #6F7071;">Категории и специализации</h4>
        </div>
        <div class="container">
        <div class="choose-border d-flex justify-content-center">
        <form class="filter-container container-fluid py-3 d-flex flex-column justify-content-center align-items-center" method="GET">
            <h4>Факультеты</h4>
            <select name="" id="" class="select-filter">
                <option value="" selected>Информационные технологии и управление</option>
                <option value="" disabled>Ресторанный бизнес</option>
                <option value="" disabled>Культура и искусство</option>
                <option value="" disabled>Индустрия красоты и гостееприимства</option>
                <option value="" disabled>Дизайн</option>
                <option value="" disabled>Реклама</option>
                <option value="" disabled>Художественные ремесла</option>
            </select>
            <h4 class="mt-3">Специальности</h4>
            <select name="category" id="category" class="mb-3 select-filter" onchange="this.form.submit()">
            <option value="">Все категории</option>
            <?php foreach ($categories as $category): ?>
                <option value="<?php echo htmlspecialchars($category); ?>" <?php echo ($category === $selected_category) ? 'selected' : ''; ?>>
                    <?php echo htmlspecialchars($category); ?>
                </option>
                <?php endforeach; ?>
            </select>
         </form>
            </div>
        </form>
        </div>
        </div>
        <div class="d-flex justify-content-center">
            <h4 class="my-4" style="color: #6F7071;" >Доступные услуги</р>
        </div>
        <?php if($result->num_rows > 0):?>
            <div class="goods d-flex justify-content-center align-items-center flex-column container-fluid">
                <?php foreach($filtered_data as $good): ?>
                        <div class="border-good mb-3">
                        <div class="good px-3" onclick="window.location.href='/pages/good-card.php?id=<?=$good['id']?>'">
                        <h4 class="py-3" style="text-align:center;"><?=$good['name']?></р>
                        <h6 class="pb-2"><?=$good['req']?></h6>
                    </div>
                    </div>
                <?php endforeach;?>
            </div>
        <?php else:?>
            <p style="color: #6F7071; text-align:center">Нет доступных услуг</p>
        <?php endif;?>

    </main>
    <?php
    include $_SERVER['DOCUMENT_ROOT'].'/components/footer.php';
    ?>
    <script defer src="/js/validate.js"></script>
    <script defer src="/js/filter.js"></script>
    <script defer src="/js/script.js"></script>
</body>
</html>