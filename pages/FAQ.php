<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<?php
    include $_SERVER['DOCUMENT_ROOT'].'/components/header.php';
    ?>
        <main>
          <div class="container mb-5">
            <p style="text-align:center; font-size: 24px; color:#6F7071;">Часто задаваемые вопросы</p>
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
</div>
<div class="border-faq-hidden">
    <div class="hidden-part">
      <p>Ответ на вопрос 3: Да, вы можете создавать команды с другими фрилансерами для выполнения крупных проектов. Убедитесь, что все участники команды согласны с условиями работы и оплатой.</p>
    </div>
</div>
  </div>
  <div class="container-faq" onclick="toggleFAQ(this)">
  <div class="border-faq-visible">
    <div class="visible-part">
      <p>Вопрос 4: Как происходит оплата?</p>
    </div>
</div>
<div class="border-faq-hidden">
    <div class="hidden-part">
      <p>Ответ на вопрос 4: Оплата осуществляется только после выполнения заказа . Заказчики заранее договаривается с исполнителем о сумме и времени выполнения заказа.</p>
    </div>
</div>
  </div>
  <div class="container-faq" onclick="toggleFAQ(this)">
  <div class="border-faq-visible">
    <div class="visible-part">
      <p>Вопрос 5: Как связаться со службой поддержки?</p>
    </div>
</div>
<div class="border-faq-hidden">
    <div class="hidden-part">
      <p>Ответ на вопрос 5: Вы можете связаться со службой поддержки через раздел «Контакты» на сайте отправив электронное письмо на указанный адрес. Мы готовы помочь вам в любое время.</p>
    </div>
</div>
  </div>
  <div class="container-faq" onclick="toggleFAQ(this)">
  <div class="border-faq-visible">
    <div class="visible-part">
      <p>Вопрос 6: Могу ли я работать с несколькими заказчиками одновременно?</p>
    </div>
</div>
<div class="border-faq-hidden">
    <div class="hidden-part">
      <p>Ответ на вопрос 6: Да, вы можете работать с несколькими заказчиками одновременно, но убедитесь, что вы можете справляться с нагрузкой и выполнять все обязательства в срок.</p>
    </div>
</div>
  </div>
  <div class="container-faq" onclick="toggleFAQ(this)">
  <div class="border-faq-visible">
    <div class="visible-part">
      <p>Вопрос 7: Есть ли возможность получения постоянных заказов?</p>
    </div>
</div>
<div class="border-faq-hidden">
    <div class="hidden-part">
      <p>Ответ на вопрос 7: Да, многие исполнители устанавливают долгосрочные отношения с заказчиками и получают постоянные заказы. Постарайтесь создать надежный имидж и поддерживать высокий уровень качества работы.</p>
    </div>
</div>
  </div>
  <div class="container-faq" onclick="toggleFAQ(this)">
  <div class="border-faq-visible">
    <div class="visible-part">
      <p>Вопрос 8: Как долго обычно занимает выполнение проектов?</p>
    </div>
</div>
<div class="border-faq-hidden">
    <div class="hidden-part">
      <p>Ответ на вопрос 8: Сроки выполнения проектов зависят от сложности задачи и договоренности между фрилансером и заказчиком. В среднем, проекты могут занимать от нескольких дней до нескольких недель.</p>
    </div>
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