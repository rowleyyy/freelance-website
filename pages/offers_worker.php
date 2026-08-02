<?php

include "../php/db.php";

$selected_category = $_GET['category'] ?? '';

$query = "SELECT * FROM goods WHERE `status` = 'pending'";

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
    <script defer src="/js/filter.js"></script>
    <script defer src="/js/script.js"></script>
</body>
</html>