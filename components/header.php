<header>
        <div class="container-fluid mb-5" id="header-container">
            <div id="all-container" class="container-fluid d-flex justify-content-between align-items-center">
                <div class="img-container d-flex justify-content-center align-items-center">
                    <img src="/img/logo.png" alt="">
                    <a href="../index.php">ПрофиМОК</a>
                </div>
                <div id="nav-container" class="d-flex justify-content-between align-items-center">
                    <?php if($_COOKIE['role'] == 1 || $_COOKIE['role'] == 2 || isset($_COOKIE)):?>
                    <a href="/pages/get-service.php?id<?=$_COOKIE['user_id']?>">Исполнителю</a>
                    <?php endif;?>
                    <?php if($_COOKIE['role'] == 3 || $_COOKIE['role'] == 2 || isset($_COOKIE)):?>
                    <a href="/pages/add-service.php">Заказчику</a>
                    <?php endif;?>
                </div>
                <div>
                </div>
                <div>
                </div>
                <!-- <div class="nav-container d-flex justify-content-center align-items-center">
                    <div class="border-container">
                        <div class="search-container">
                            <a href=""><img src="/img/search.png" alt=""></a>
                        </div>
                    </div> -->
                    <div class="dropdown">
                        <button class="dropdownbutton dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Личный кабинет</button>
                        <ul class="dropdown-menu" id="dropdown-header">
                            <?php if(!isset($_COOKIE['user_id']) && !isset($_COOKIE['worker_id'])):?>
                            <li><a class="dropdown-item" href="/pages/authchoose.php">Вход</a></li>
                            <li><a class="dropdown-item" href="/pages/regchoose.php">Регистрация</a></li>
                            <?php else:?>
                            <?php if($_COOKIE['role'] == 1):?>
                            <li><a class="dropdown-item" href="/pages/account.php">Профиль</a></li>
                            <li><a class="dropdown-item" href="/pages/settings.php">Настройки</a></li>
                            <li><a class="dropdown-item" href="/php/switchuser.php">Войти как заказчик</a></li>
                            <?php elseif($_COOKIE['role'] == 3):?>
                            <li><a class="dropdown-item" href="/pages/offers_user.php">Мои заказы</a></li>
                            <li><a class="dropdown-item" href="/php/switchworker.php">Войти как исполнитель</a></li>
                            <?php elseif($_COOKIE['role'] == 2):?>
                            <li><a class="dropdown-item" href="/pages/admin.php">Админ-панель</a></li>
                            <?php endif;?>
                            <li><a class="dropdown-item" href="/php/exit.php">Выход</a></li>
                            <?php endif;?>
                        </ul>
                    </div>
                    <div id="mobile-border-container" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <button class="modalButton">
                    <div id="mobile-container" class="py-2 px-2 justify-content-center align-items-center">
                    <img src="/img/menu-mobile.png" alt="">
                    </div>
                    </button>
                    </div>    
                    <div class="modal" tabindex="-1">
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                </div>
            </div>
        </div>
    </header>