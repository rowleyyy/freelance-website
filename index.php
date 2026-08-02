<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Site</title>
</head>
<body>
    <?php
    include $_SERVER['DOCUMENT_ROOT'].'/components/header.php';
    ?>
    <main>
        <div class="container-fluid info-container d-flex justify-content-center align-items-center" style=" height: 550px;">
            <div class="photo">
                <img class="index-photo" src="/img/handsome-male-entrepreneur-using-laptop (1).jpg" alt="" style="width: 500px; margin-left:-45px;">
            </div>
            <div class="info">
                    <p class="title" style="color:#6F7071; ">О сайте</p>
                    <p class="info-text" style="color:#6F7071; text-align: justify;" >Наш сайт – это платформа, объединяющая студентов и работодателей, создавая удобное пространство для реализации проектов любой сложности. Здесь вы сможете найти начинающих профессионалов для выполнения задач в самых разных сферах:
                    от дизайна и программирования до маркетинга и копирайтинга.</p>
                    <p class="info-text" style="color:#6F7071">С нами работа станет простой и эффективной!</p>
                </div>
                <div class="photo">
                    <img class="index-photo" src="/img/young-woman-posing-with-paint-brushes-gray-wall (1)-Photoroom.jpg" alt="" style="margin-right:-100px;">
                </div>
        </div>
        <div class="slidercontainer mb-5">
       <div class="slides">
          <div class="slide active" id="slide1">
            <div class="slide-content d-flex align-items-center justify-content-center">
                <p>Факультет рекламы</p>
                </div>
            </div>
            <div class="slide" id="slide2">
                <div class="slide-content d-flex align-items-center justify-content-center">
                    <p>Факультет ресторанный бизнес</p>
                </div>
            </div>
            <div class="slide" id="slide3">
                <div class="slide-content d-flex align-items-center justify-content-center">
              <p>Факультет информационных технологий и управления</p>
          </div>
        </div>
        <div class="slide" id="slide4">
        <div class="slide-content d-flex align-items-center justify-content-center">
        <p>Факультет дизайна</p>
          </div>
        </div>
        <div class="slide" id="slide5">
        <div class="slide-content d-flex align-items-center justify-content-center">
        <p>Факультет красоты и гостеприимства</p>
          </div>
        </div>
      </div>    
      <div class="dot-container">
        <div class="dots" id="dots">
          <span class="dot active" onclick="currentSlide(1)"></span>
          <span class="dot" onclick="currentSlide(2)"></span>
          <span class="dot" onclick="currentSlide(3)"></span>
          <span class="dot" onclick="currentSlide(4)"></span>
          <span class="dot" onclick="currentSlide(5)"></span>
        </div>
      </div>
      </div>
      <div class="container category-container">
        <div class="uslugi-container d-flex justify-content-between align-items-center">
            <p>Категории услуг</p>
            <a href="/pages/goods.php"><button>Все услуги</button></a>
        </div>
        <div class="d-flex container uslugi-cards mb-5 flex-wrap justify-content-between align-items-center">
            <div class="uslugi-card" onclick="toggleCard(this)">
                <div class="uslugi-img d-flex justify-content-end flex-column" id="usluga1">
                    <div class="title-container">
                        <p>Информационные технологии и управление</p>
                    </div>
            </div>    
            <div class="category-out d-flex justify-content-between flex-column">
            <ul class="mt-3">
                            <li><a href="/pages/add-service.php">Веб-разработка</a></li>
                            <li><a href="/pages/add-service.php">Программирование</a></li>
                            <li><a href="/pages/add-service.php">Разработка технической документации</a></li>
                            <li><a href="/pages/add-service.php">Системное администрирование</a></li>
                            <li><a href="/pages/add-service.php">Техническая поддержка</a></li>
                        </ul>
                        <a href="/pages/goods.php"><button>Подробнее</button></a>
                    </div>
            </div>
            <div class="uslugi-card">
                <div class="uslugi-img d-flex justify-content-end flex-column" id="usluga2">
                    <div class="title-container">
                        <p>Индустрия красоты и гостееприимства</p>
                    </div>
            </div>    
                    <div class="category-out d-flex justify-content-between flex-column">
                    <ul class="mt-3">
                    <li>Веб-разработка</li>
                            <li>Программирование</li>
                            <li>Анимация</li>
                            <li>Системное администрирование</li>
                            <li>Техническая поддержка</li>
                        </ul>
                        <button>Подробнее</button>
                    </div>
            </div>
            <div class="uslugi-card">
                <div class="uslugi-img d-flex justify-content-end flex-column" id="usluga3">
                    <div class="title-container">
                        <p>Культура и искусство</p>
                    </div>
            </div>    
                    <div class="category-out d-flex justify-content-between flex-column">
                    <ul class="mt-3">
                    <li>Веб-разработка</li>
                            <li>Программирование</li>
                            <li>Анимация</li>
                            <li>Системное администрирование</li>
                            <li>Техническая поддержка</li>
                        </ul>
                        <button>Подробнее</button>
                    </div>
            </div>
            <div class="uslugi-card">
                <div class="uslugi-img d-flex justify-content-end flex-column" id="usluga4">
                    <div class="title-container">
                        <p>Ресторанный бизнес</p>
                    </div>
            </div>    
            <div class="category-out d-flex justify-content-between flex-column">
            <ul class="mt-3">
                            <li>Веб-разработка</li>
                            <li>Программирование</li>
                            <li>Анимация</li>
                            <li>Системное администрирование</li>
                            <li>Техническая поддержка</li>
                        </ul>
                        <button>Подробнее</button>
                    </div>
            </div>
            <div class="uslugi-card">
                <div class="uslugi-img d-flex justify-content-end flex-column" id="usluga5">
                    <div class="title-container">
                        <p>Реклама</p>
                    </div>
            </div>    
            <div class="category-out d-flex justify-content-between flex-column">
            <ul class="mt-3">
                            <li>Веб-разработка</li>
                            <li>Программирование</li>
                            <li>Анимация</li>
                            <li>Системное администрирование</li>
                            <li>Техническая поддержка</li>
                        </ul>
                        <button>Подробнее</button>
                    </div>
            </div>
            <div class="uslugi-card">
                <div class="uslugi-img d-flex justify-content-end flex-column" id="usluga6">
                    <div class="title-container">
                        <p>Дизайн</p>
                    </div>
            </div>
            <div class="category-out d-flex justify-content-between flex-column">
            <ul class="mt-3">
                            <li>Веб-разработка</li>
                            <li>Программирование</li>
                            <li>Анимация</li>
                            <li>Системное администрирование</li>
                            <li>Техническая поддержка</li>
                        </ul>
                        <button>Подробнее</button>
                    </div>
            </div>
        </div>
        <div class="uslugi-card">
                <div class="uslugi-img d-flex justify-content-end flex-column" id="usluga7">
                    <div class="title-container">
                        <p>Художественные ремесла</p>
                    </div>
            </div>
            <div class="category-out d-flex justify-content-between flex-column">
            <ul class="mt-3">
                            <li>Веб-разработка</li>
                            <li>Программирование</li>
                            <li>Анимация</li>
                            <li>Системное администрирование</li>
                            <li>Техническая поддержка</li>
                        </ul>
                        <button>Подробнее</button>
                    </div>
            </div>
        </div>
        <!-- <div class="uslugi-container d-flex justify-content-between align-items-center" onclick="toggleCard(this)">
            <p>Наши специалисты</p>
            <a href="#"><button>Все специалисты</button></a>
        </div> -->
        <!-- <div class="spec-cards d-flex justify-content-between align-items-center mb-5">
            <div class="spec-border">
                <div class="spec-card d-flex justify-content-between flex-column">
                    <div class="d-flex justify-content-around my-2">
                        <div>
                            <div class="round-border">
                                <div class="round-img">
                                    <img src="/img/zahar.jpg" alt="">
                                </div>    
                            </div>
                        </div> -->
                        <!-- <div style="text-align:center">
                            <p style="margin: 0;">Захар</p>
                            <p>Системный администратор</p>
                        </div>
                    </div>
                    <div style="text-align: center" class="mb-4">
                    <p>На связи!</p>
                    </div>
                </div>
            </div>
            <div class="spec-border">
                <div class="spec-card d-flex justify-content-between flex-column">
                    <div class="d-flex justify-content-around my-2">
                        <div>
                            <div class="round-border">
                                <div class="round-img">
                                    <img src="/img/kirill.jpg" alt="">
                                </div>    
                            </div>
                        </div>
                        <div style="text-align:center">
                            <p style="margin: 0;">Кирилл</p>
                            <p>Веб-разработчик</p>
                        </div>
                    </div>
                    <div style="text-align: center" class="mb-4">
                    <p>Добрый день! Помогу вам с любой проблемой.</p>
                    </div> -->
                <!-- </div>
            </div>
            <div class="spec-border">
                <div class="spec-card d-flex justify-content-between flex-column">
                    <div class="d-flex justify-content-around my-2">
                        <div>
                            <div class="round-border">
                                <div class="round-img">
                                    <img src="/img/stepan.jpg" alt="">
                                </div>    
                            </div>
                        </div>
                        <div style="text-align:center">
                            <p style="margin: 0;">Степан</p>
                            <p>Системный администратор</p>
                        </div>
                    </div>
                    <div style="text-align: center" class="mb-4">
                    <p>Проблема будет решена!</p>
                    </div>
                </div>
            </div> -->
        <!-- </div> -->
        <div class="uslugi-container d-flex justify-content-center align-items-center mt-4 mb-2">
            <p>Часто задаваемые вопросы</p>
        </div>
        <div class="container d-flex justify-content-center align-items-center flex-column">
        <div class="container-faq" onclick="toggleFAQ(this)">
    <div class="border-faq-visible">
    <div class="visible-part">
      <p>Вопрос 1: Что делать, если возникли споры?</p>
    </div>
    </div>
    <div class="border-faq-hidden">
    <div class="hidden-part">
        <p>Ответ на вопрос 1: Если у вас возникли разногласия, вы можете обратиться в службу поддержки платформы. Мы предоставим помощь в разрешении споров и постараемся найти оптимальное решение для обеих сторон.</p>
    </div>
</div>
  </div>

  <div class="container-faq" onclick="toggleFAQ(this)">
    <div class="border-faq-visible">
    <div class="visible-part">
      <p>Вопрос 2: Что делать, если я не могу выполнить проект в срок?</p>
    </div>
    </div>
    <div class="border-faq-hidden">
    <div class="hidden-part">
        <p>Ответ на вопрос 2: Если вы понимаете, что не сможете выполнить проект вовремя, обязательно сообщите об этом заказчику как можно раньше. Обсудите возможные варианты продления сроков или внесения изменений в проект.</p>
    </div>
    </div>
  </div>

  <div class="container-faq" onclick="toggleFAQ(this)">
    <div class="border-faq-visible">
    <div class="visible-part">
        <p>Вопрос 3: Есть ли возможность работать в команде?</p>
    </div>
    <div class="border-faq-hidden">
    <div class="hidden-part">
        <p>Ответ на вопрос 3: Да, вы можете создавать команды с другими фрилансерами для выполнения крупных проектов. Убедитесь, что все участники команды согласны с условиями работы и оплатой.</p>
    </div>
    </div>
</div>
  </div>

  <div class="border-faq-visible container-faq mb-5" style="width: 100%">
  <a href="/pages/FAQ.php" style="text-decoration: none;"><div class="faq-container d-flex justify-content-center align-items-center">Все вопросы
    </div></a>
    </div>
      </div>
      </div>
    </main>
    <?php
    include $_SERVER['DOCUMENT_ROOT'].'/components/footer.php';
    ?>
    <script defer src="/js/script.js"></script>
</body>
</html>