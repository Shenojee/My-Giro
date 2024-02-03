<!DOCTYPE html>
<html lang="ru">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <!-- Стили FontAwesome -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <title>My-Giro</title>
  <!-- Кнопка наверх стили -->
  <style>
      body {
        min-height: 2000px;
      }
      .btn-up {
        position: fixed;
        background-color: #7FFF00;
        left: 20px;
        bottom: 30px;
        border-radius: 25px;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: opacity 0.15s ease-in-out, transform 0.3s ease-in-out;
        color: #fff;
        width: 50px;
        height: 50px;
        opacity: 1;
        transform: translateY(0);
      }
      .btn-up_hide {
        display: none;
      }
      .btn-up_hiding {
        opacity: 0;
        transform: translateY(100px);
      }
      .btn-up-icon {
        width: 40px;
        height: 40px;
        fill: currentcolor;
      }
      @media (hover: hover) and (pointer: fine) {
        .btn-up:hover {
          background-color: #ADFF2F;
        }
      }
    </style>
    <!-- Кнопка наверх стили END -->

</head>

<body>

<!-- Шапка -->
<?php require "blocks/header.php" ?>
<!-- Шапка END -->

<!-- Карусель -->
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <!-- Индикаторы -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-label="Слайд 1" aria-current="true"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Слайд 2" class=""></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Слайд 3" class=""></button>
    </div>
    <div class="carousel-inner">
      <!-- Слайд 1 -->
      <div class="carousel-item active">
        <svg class="bd-placeholder-img" width="100%" height="50%" xmlns="http://www.w3.org/2000/svg"
             aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
          <img src="img/3.webp" width="100%" height="50%"></img>
        </svg>
        <div class="container">
          <div class="carousel-caption text-start">
            <h1 class="fst-italic" style="font-family:trebuchet ms; background-color:rgba(127, 255, 0, 0.7); color:#fff; padding: 5px">Ваше настоящее и будущее</h1>
            <p style="font-family:Century gothic; font-size:25px; background-color:rgba(127, 255, 0, 0.7); color:#fff; padding: 1px">
               Раскройте для себя потенциал транспорта будущего, вобравшего в себя лучшие технологии современности.</p>
          </div>
        </div>
      </div>
      <!-- Слайд 2 -->
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="50%" xmlns="http://www.w3.org/2000/svg"
             aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
           <img src="img/2.jpg" width="100%" height="50%"></img>
        </svg>
        <div class="container">
          <div class="carousel-caption">
            <h1 class="fst-italic" style="font-family:trebuchet ms; background-color:rgba(127, 255, 0, 0.7); color:#fff; padding: 5px">Быстро. Ярко. Эффектно.</h1>
            <p style="font-family:Century gothic; font-size:25px; background-color:rgba(127, 255, 0, 0.7); color:#fff; padding: 1px">
               Стильный и лаконичный дизайн наших девайсов позволит вам выделиться в условиях современного мегаполиса.</p>
          </div>
        </div>
      </div>
      <!-- Слайд 3 -->
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="50%" xmlns="http://www.w3.org/2000/svg"
             aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
           <img src="img/13.webp" width="100%" height="50%"></img>
        </svg>
        <div class="container">
          <div class="carousel-caption text-end">
            <h1 class="fst-italic" style="font-family:trebuchet ms; background-color:rgba(127, 255, 0, 0.7); color:#fff; padding: 5px">Искусство быть на высоте</h1>
            <p style="font-family:Century gothic; font-size:25px; background-color:rgba(127, 255, 0, 0.7); color:#fff; padding: 1px">
               Всё ещё опаздываете на важные встречи? Баланс мобильности и комфорт передвижения – ваш выбор!</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Стрелочки -->
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Назад</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Далее</span>
    </button>
</div>
<!-- Карусель END -->

<!-- Описание товара -->
<section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light fst-italic" style="font-family:trebuchet ms; font-size:35px; text-align:left">
           Особенности гироскутеров, электросамокатов и сигвеев<br/><br/></h1>
        <p class="lead text-body-secondary" style="font-family:Century gothic; font-size:25px; text-align:left">
           &#10003; Компактность и маневренность<br/>
           &#10003; Безопасность<br/>
           &#10003; Возможность перемещения по бездорожью<br/>
           &#10003; Приемлемая цена<br/>
           &#10003; Экологичность<br/>
           &#10003; Возможность перемещения в любые погодные условия<br/>
           &#10003; Высокое качество<br/>
           &#10003; Размер и компактность</p>
      </div>
      <div class="col-md-5">
        <img src="img/8.webp" width="700px" height="450"></img>
      </div>
      <hr class="featurette-divider">
    </div>
</section>
<!-- Описание товара END -->

<!-- Список товаров -->
<!-- Заголовок -->
<div class="pricing-header p-3 pb-md-4 mx-auto text-center">
  <h1 class="display-4 fw-normal text-body-emphasis fst-italic" style="text-align:center; font-family:trebuchet ms; font-size: 40px">Наши товары<br/><br/></h1>
  <!-- Фильтр -->
  <div class="btn-group text-center">
    <button type="button" class="btn btn-outline-success" style="font-family:Century gothic; font-size:20px">Фильтр товаров</button>
    <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
      <span class="visually-hidden">Toggle Dropdown</span>
    </button>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" style="font-family:Century gothic; font-size:15px" href="girFil.php">Гироскутеры</a></li>
      <li><a class="dropdown-item" style="font-family:Century gothic; font-size:15px" href="samFil.php">Электросамокаты</a></li>
      <li><a class="dropdown-item" style="font-family:Century gothic; font-size:15px" href="sigFil.php">Сигвеи</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" style="font-family:Century gothic; font-size:15px" href="index.php">Всё</a></li>
    </ul>
  </div>
  <!-- Фильтр END -->
</div>
<!-- Товары -->
<div class="row row-cols-1 row-cols-md-5 mb-3 text-center">
      <!-- Товар 1 -->
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm" style="width:350px; height:470px">
          <div class="card-header py-3" style=" background-color:rgba(127, 255, 0, 0.7)">
            <h4 class="my-0 fw-normal" style="font-family:Century gothic; font-size:30px">Гироскутер</h4>
          </div>
          <div class="card-body">
            <head>
             <meta charset="utf-8">
               <title>Круглые изображения</title>
               <style>
                .round {
                  border-radius: 50%; /* Радиус скругления */
                 }
               </style>
              </head>
              <body>
               <p><img src="img/giro1.webp" width="170px" height="160spx" class="round"></p>
             </body>
            <h1 class="card-title pricing-card-title" style="font-family:Century gothic; font-size:25px">Гироскутер KUGOO</h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li style="font-family:Century gothic; font-size:25px">12 500</li>
            </ul>
            <button class="w-50 btn btn-outline-success" type="submit" style="font-family:Century gothic; font-size:30px">Купить</button>
          </div>
        </div>
      </div>
      <!-- Товар 2 -->
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm" style="width:350px; height:470px">
          <div class="card-header py-3" style=" background-color:rgba(127, 255, 0, 0.7)">
            <h4 class="my-0 fw-normal" style="font-family:Century gothic; font-size:30px">Электросамокат</h4>
          </div>
          <div class="card-body">
            <head>
             <meta charset="utf-8">
               <title>Круглые изображения</title>
               <style>
                .round {
                  border-radius: 50%; /* Радиус скругления */
                 }
               </style>
              </head>
              <body>
               <p><img src="img/sam1.webp" width="170px" height="160spx" class="round"></p>
             </body>
            <h1 class="card-title pricing-card-title" style="font-family:Century gothic; font-size:25px">Электросамокат Minimotors</h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li style="font-family:Century gothic; font-size:25px">24 990</li>
            </ul>
            <button class="w-50 btn btn-outline-success" type="submit" style="font-family:Century gothic; font-size:30px">Купить</button>
          </div>
        </div>
      </div>
      <!-- Товар 3 -->
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm" style="width:350px; height:470px">
          <div class="card-header py-3" style=" background-color:rgba(127, 255, 0, 0.7)">
            <h4 class="my-0 fw-normal" style="font-family:Century gothic; font-size:30px">Сигвей</h4>
          </div>
          <div class="card-body">
            <head>
             <meta charset="utf-8">
               <title>Круглые изображения</title>
               <style>
                .round {
                  border-radius: 50%; /* Радиус скругления */
                 }
               </style>
              </head>
              <body>
               <p><img src="img/sig1.webp" width="170px" height="160spx" class="round"></p>
             </body>
            <h1 class="card-title pricing-card-title" style="font-family:Century gothic; font-size:25px">Сигвей IconBIT</h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li style="font-family:Century gothic; font-size:25px">21 900</li>
            </ul>
            <button class="w-50 btn btn-outline-success" type="submit" style="font-family:Century gothic; font-size:30px">Купить</button>
          </div>
        </div>
      </div>
      <!-- Товар 4 -->
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm" style="width:350px; height:470px">
          <div class="card-header py-3" style=" background-color:rgba(127, 255, 0, 0.7)">
            <h4 class="my-0 fw-normal" style="font-family:Century gothic; font-size:30px">Гироскутер</h4>
          </div>
          <div class="card-body">
            <head>
             <meta charset="utf-8">
               <title>Круглые изображения</title>
               <style>
                .round {
                  border-radius: 50%; /* Радиус скругления */
                 }
               </style>
              </head>
              <body>
               <p><img src="img/giro3.webp" width="170px" height="160spx" class="round"></p>
             </body>
            <h1 class="card-title pricing-card-title" style="font-family:Century gothic; font-size:25px">Гироскутер KUGOO</h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li style="font-family:Century gothic; font-size:25px">11 900</li>
            </ul>
            <button class="w-50 btn btn-outline-success" type="submit" style="font-family:Century gothic; font-size:30px">Купить</button>
          </div>
        </div>
      </div>
      <!-- Товар 5 -->
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm" style="width:350px; height:470px">
          <div class="card-header py-3" style=" background-color:rgba(127, 255, 0, 0.7)">
            <h4 class="my-0 fw-normal" style="font-family:Century gothic; font-size:30px">Электросамокат</h4>
          </div>
          <div class="card-body">
            <head>
             <meta charset="utf-8">
               <title>Круглые изображения</title>
               <style>
                .round {
                  border-radius: 50%; /* Радиус скругления */
                 }
               </style>
              </head>
              <body>
               <p><img src="img/sam4.webp" width="170px" height="160spx" class="round"></p>
             </body>
            <h1 class="card-title pricing-card-title" style="font-family:Century gothic; font-size:25px">Электросамокат Xiaomi</h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li style="font-family:Century gothic; font-size:25px">21 500</li>
            </ul>
            <button class="w-50 btn btn-outline-success" type="submit" style="font-family:Century gothic; font-size:30px">Купить</button>
          </div>
        </div>
      </div>
    </div>
<!-- Список товаров END -->

<!-- Инфа о консультантах -->
<div style="margin:0 auto; width:700px">
  <div class="row featurette mt-5">
    <hr class="featurette-divider">
    <div class="col-md-7">
      <h2 class="featurette-heading fw-normal lh-1 fst-italic" style="font-family:trebuchet ms; font-size: 30px">О консультантах<br/>
        <span class="text-body-secondary"><br/></span></h2>
      <h5 class="featurette-heading fw-normal lh-1"></h5>
      <p class="lead" style="font-family:Century gothic; font-size:20px">
                      Команда наших высококвалифицированных специалистов
                      сможет проконсультировать вас в любое время суток.<br/>
                      Если вам нужна консультация, нажмите на "Заказать звонок"
                      и в скором времени с вами обязательно свяжутся.</p>
    </div>
    <div class="col-md-5">
     <head>
      <meta charset="utf-8">
        <title>Круглые изображения</title>
        <style>
         .round {
           border-radius: 50%; /* Радиус скругления */
          }
        </style>
       </head>
       <body>
        <p><img src="img/cons.jpg" width="300px" height="300px" class="round"></p>
      </body>
    </div>
   <hr class="featurette-divider">
  </div>
</div>
<!-- Инфа о консультантах END -->

<!-- Список брендов -->
<div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
  <div class="col-lg-7 px-0" style="margin:0 auto">
     <h1 class="display-4 fst-italic" style="text-align:center; font-family:trebuchet ms; font-size: 40px">Бренды, представленные в магазине<br/><br/></h1>
    <div class="content-text" id="oglav">
      <div class="content-table">
        <table class="table table-striped table-bordered">
          <!-- Шапка таблицы -->
          <thead>
            <tr>
              <td class="td-rank">
                <div class="table-thead text-center">
                  <img src="img/rank.png" width="25" height="25">
                  <span class="text-center" style="font-family:Century gothic; font-size:25px">№</span>
                </div>
              </td>
              <td class="th-name">
                <div class="table-thead text-center">
                  <img src="img/name.png" width="25" height="25">
                  <span class="text-center" style="font-family:Century gothic; font-size:25px">Наименование</span>
                </div>
              </td>
              <td class="th-rating">
                <div class="table-thead text-center">
                  <img src="img/rating.png" width="25" height="25">
                  <span class="text-center" style="font-family:Century gothic; font-size:25px">Рейтинг</span>
                </div>
              </th>
              <td class="td-name">
                <div class="table-thead text-center">
                  <img src="img/nom1.png" width="25" height="25">
                  <span style="font-family:Century gothic; font-size:25px">Номинация</span>
                </div>
              </td>
            </tr>
          </thead>
          <!-- Шапка таблицы END -->
          <!-- Тело таблицы -->
          <tbody>
            <tr class="table-tr" style="background-color:rgba(127, 255, 0, 0.7);">
              <td class="td-rank text-center"><span style="font-family:Century gothic; font-size:20px">1</span></td>
              <td class="td-name text-center" style="font-family:Century gothic; font-size:20px">Minimotors</td>
              <td class="td-rating text-center" style="font-family:Century gothic; font-size:20px">4.75
                <div class="testimonial-rating">
                  <div class="testimonial-rating-stars">
                    <div class="testimonial-realrating" style="width:95%;"></div>
                  </div>
                </div>
              </td>
              <td class="td-nominat text-center">
                <span class="best-advantage" style="font-family:Century gothic; font-size:20px">Самые мощные электросамокаты</span>
              </td>
            </tr>
            <tr class="table-tr">
              <td class="td-rank text-center"><span style="font-family:Century gothic; font-size:20px">2</span></th>
              <td class="td-name text-center" style="font-family:Century gothic; font-size:20px">KUGOO</td>
              <td class="td-rating text-center" style="font-family:Century gothic; font-size:20px">4.70
                <div class="testimonial-rating">
                  <div class="testimonial-rating-stars">
                    <div class="testimonial-realrating" style="width:95%;"></div>
                  </div>
                </div>
              </td>
              <td class="td-nominat text-center">
                <span class="best-advantage" style="font-family:Century gothic; font-size:20px">Лучшая подвеска</span>
              </td>
            </tr>
            <tr class="table-tr" style="background-color:rgba(127, 255, 0, 0.7);">
              <td class="td-rank text-center"><span style="font-family:Century gothic; font-size:20px">3</span></th>
              <td class="td-name text-center" style="font-family:Century gothic; font-size:20px">Xiaomi</td>
              <td class="td-rating text-center" style="font-family:Century gothic; font-size:20px">4.70
                <div class="testimonial-rating">
                  <div class="testimonial-rating-stars">
                    <div class="testimonial-realrating" style="width:95%;"></div>
                  </div>
                </div>
              </td>
              <td class="td-nominat text-center">
                <span class="best-advantage" style="font-family:Century gothic; font-size:20px">Лучшее соотношение цены и качества</span>
              </td>
            </tr>
            <tr class="table-tr">
              <td class="td-rank text-center"><span style="font-family:Century gothic; font-size:20px">4</span></th>
              <td class="td-name text-center" style="font-family:Century gothic; font-size:20px">Ninebot</td>
              <td class="td-rating text-center" style="font-family:Century gothic; font-size:20px">4.57
                <div class="testimonial-rating">
                  <div class="testimonial-rating-stars">
                    <div class="testimonial-realrating" style="width:95%;"></div>
                  </div>
                </div>
              </td>
              <td class="td-nominat text-center">
                <span class="best-advantage" style="font-family:Century gothic; font-size:20px">Выбор сервисов аренды электросамокатов</span>
              </td>
            </tr>
            <tr class="table-tr" style="background-color:rgba(127, 255, 0, 0.7);">
              <td class="td-rank text-center"><span style="font-family:Century gothic; font-size:20px">5</span></th>
              <td class="td-name text-center" style="font-family:Century gothic; font-size:20px">Volteco</td>
              <td class="td-rating text-center" style="font-family:Century gothic; font-size:20px">4.52
                <div class="testimonial-rating">
                  <div class="testimonial-rating-stars">
                    <div class="testimonial-realrating" style="width:95%;"></div>
                  </div>
                </div>
              </td>
              <td class="td-nominat text-center">
                <span class="best-advantage" style="font-family:Century gothic; font-size:20px">Высокая надежность</span>
              </td>
            </tr>
            <tr class="table-tr">
              <td class="td-rank text-center"><span style="font-family:Century gothic; font-size:20px">6</span></th>
              <td class="td-name text-center" style="font-family:Century gothic; font-size:20px">HIPER</td>
              <td class="td-rating text-center" style="font-family:Century gothic; font-size:20px">4.45
                <div class="testimonial-rating">
                  <div class="testimonial-rating-stars">
                    <div class="testimonial-realrating" style="width:95%;"></div>
                  </div>
                </div>
              </td>
              <td class="td-nominat text-center">
                <span class="best-advantage" style="font-family:Century gothic; font-size:20px">Транспорт для поездок на работу</span>
              </td>
            </tr>
            <tr class="table-tr" style="background-color:rgba(127, 255, 0, 0.7);">
              <td class="td-rank text-center"><span style="font-family:Century gothic; font-size:20px">7</span></th>
              <td class="td-name text-center" style="font-family:Century gothic; font-size:20px">IconBIT</td>
              <td class="td-rating text-center" style="font-family:Century gothic; font-size:20px">4.32
                <div class="testimonial-rating">
                  <div class="testimonial-rating-stars">
                    <div class="testimonial-realrating" style="width:95%;"></div>
                  </div>
                </div>
              </td>
              <td class="td-nominat text-center">
                <span class="best-advantage" style="font-family:Century gothic; font-size:20px">Самые легкие модели</span>
              </td>
            </tr>
          </tbody>
          <!-- Тело таблицы END -->
        </table>
      </div>
    </div>
  </div>
</div>
<!-- Список брендов END -->

<!-- Полезная инфа -->
<div class="container marketing">
  <hr class="featurette-divider">
  <h1 class="display-4 fst-italic" style="text-align:center; font-family:trebuchet ms; font-size: 40px"><br/><br/>Полезная информация о сигвеях, гироскутерах, электросамокатах<br/></h1>
  <hr class="featurette-divider">
  <!-- Гироскутеры -->
  <div class="row featurette">
    <div class="col-md-7 order-md-2">
      <h3 class="featurette-heading fw-normal lh-1 fst-italic" style="background-color:rgba(127, 255, 0, 0.7); font-family:trebuchet ms;">Гироскутеры.<br/></h3>
      <p class="lead" style="font-family:Century gothic;">
        Существуют гироскутеры со средним 8 дюймовым размером колес. Этот гироскутер имеет не самые большие колеса, но при этом очень мощные характеристики.<br/>
        10-ти дюймовые модели хорошо подходят для взрослых мужчин и тех кто любит быстро ездить.<br/>

        Практически у всех гироскутеров, мощность аккумуляторов одинаковая. В среднем она составляет 4400 мА/ч.
        Однако стоимость гироскутера зависит от класса аккумулятора.<br/>

        Есть гироскутеры с низким классом типа 1С и 2С. Такие батареи обычно ставят на гироскутеры с маленькими колесами - 4.5 и 6.5 дюймов,
        которые предназначены для езды только по ровным дорогам.<br/>

        На гироскутеры с 8-ми дюймовыми колесами ставят батареи 3С класса. Чем больше вес и размер колес,
        тем выше класс аккумулятора нужен этой модели.<br/>

        У самых больших гироскутеров с 10-ти дюймовыми надувными колесами стоят аккумуляторы наивысшего класса 4С и 5С,
        чтобы при езде по бездорожью транспорт не отключался и не сбавлял скорость.<br/>
      </p>
    </div>
    <div class="col-md-5 order-md-1">
      <img src="img/gir.jpg" width="500px" height="400px"></img>
    </div>
  </div>
  <hr class="featurette-divider">
  <!-- Сигвеи -->
  <div class="row featurette">
      <div class="col-md-7">
        <h3 class="featurette-heading fw-normal lh-1 fst-italic" style="background-color:rgba(127, 255, 0, 0.7); font-family: trebuchet ms">Сигвеи.</h3>
        <p class="lead" style="font-family:Century gothic">
          Существует всего две разновидности сигвеев в зависимости от того для каких дорог они предназначены.
          Они бывают городскими и внедорожными:<br/>

          Городские самые легкие и компактные. Они могут оснащаться дополнительными приспособлениями.
          Это может быть подножка для стоянки или багажник для закрепления сумки.
          Также на городских сигвеях устанавливается задняя подсветка, по которой можно увидеть, что водитель тормозит.
          Такие скутеры оснащаются тонкими колесами с неглубоким протектором.
          Они отлично ходят по асфальту, бетону или тротуарной плитке. При этом движение под гору на мокрой поверхности небезопасно.
          В связи с этим скутеры стоит использовать только при хорошей погоде.<br/>

          Внедорожные оснащаются более мощными двигателями, поскольку они имеют широкие шипованные колеса, раскрутить которые сложнее.
          Подобные скутеры намного тяжелее. Благодаря шипованной резине они могут передвигаться по плохой дороге.
          Также крылья над колесами располагаются с большим зазором, чтобы под них не забывалась мокрая грязь.
          Дорожный просвет под платформой увеличен, чтобы не чиркать неровности, которые попадаются на пути.
          Мощный двигатель позволяет двигаться под гору даже на зеленой траве.
          При этом также существует риск того, что колеса уйдут в пробуксовку.</p>
      </div>
      <div class="col-md-5">
        <img src="img/sig.webp" width="500px" height="500px"></img>
      </div>
  </div>
  <hr class="featurette-divider">
  <!-- Электросамокаты -->
  <div class="row featurette">
    <div class="col-md-7 order-md-2">
      <h3 class="featurette-heading fw-normal lh-1 fst-italic" style="background-color:rgba(127, 255, 0, 0.7); font-family: trebuchet ms">Электросамокаты.</h3>
      <p class="lead" style="font-family:Century gothic">
        Источник питания электрического самоката — аккумуляторная батарея.
        В зависимости от мощности и особенностей конструкции, одного заряда может хватать на прогулку до 60 км.
        Увеличить расстояние поможет запасная батарея.<br/>

        Движение транспортного средства обеспечивают мотор и редуктор, расположенные рядом с осью и надежно спрятанные в прочный герметичный короб.
        Крутящий момент от мотора и редуктора передается на переднее колесо.
        Если электросамокат приобретается для ребенка, важно чтобы он понимал,
        почему крайне необходимо хорошо завязывать шнурки: никакие элементы одежды не должны случайно попасть в крутящие элементы.<br/>

        Рычаги газа и тормоза располагаются на руле, сама рулевая стойка во многих моделях телескопическая,
        что дает возможность настроить электрический самокат на ездоков разного роста.<br/>

        Ездить можно стоя на широкой и удобной деке или сидя, во втором случае выбирают модель с сидением.</p>
    </div>
    <div class="col-md-5 order-md-1">
      <img src="img/sam.webp" width="500px" height="400px"></img>
    </div>
  </div>
  <hr class="featurette-divider">
</div>
<!-- Полезная инфа END -->

<!-- Инфа о компании + Email -->
<div class="col-md-5 offset-md-4 mb-3 mt-5">
  <hr class="featurette-divider">
   <form action="check.php" method="post">
       <h3 class="featurette-heading fw-normal lh-1 fst-italic" style="font-family:trebuchet ms;">Подпишитесь, чтобы узнать больше</h3>
       <p class="lead" style="font-family:Century gothic;">Введите ваши имя и Email, чтобы получать новости о нашем товаре.</p>
     <div class="d-flex flex-column flex-sm-row w-100 gap-2">
       <label for="firstName" class="visually-hidden">Имя</label>
       <input id="firstName" type="text" name="name" class="form-control" style="font-family:Century gothic;" placeholder="Name">
         <label for="newsletter1" class="visually-hidden">Email address</label>
         <input id="newsletter1" type="text" name="email" class="form-control" style="font-family:Century gothic;" placeholder="Email address">
         <button class="btn btn-outline-success" type="submit" style="font-family:Century gothic; font-size:15px" name="send">Подписаться</button>
     </div>
   </form>
   <hr class="featurette-divider">
</div>
<!-- Инфа о компании + Email END -->

<!-- Отзывы -->
<div class="pricing-header p-3 pb-md-4 mx-auto text-center">
  <h3 class="display-5 fw-normal fst-italic" style="font-family:trebuchet ms; font-size: 40px"><br/>Отзывы</h3>
</div>
<div class="d-flex flex-wrap">
<div style="margin:0 auto">
 <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
   <!-- Первый -->
   <div style="margin:0 auto; width:500px">
    <div class="col">
     <div class="card mb-4 rounded-3 shadow-sm">
      <div class="card-body">
        <head>
         <meta charset="utf-8">
           <title>Круглые изображения</title>
           <style>
            .round {
              border-radius: 50%; /* Радиус скругления */
             }
           </style>
          </head>
          <body>
           <p><img src="img/foto1.webp" width="150px" height="140spx" class="round"></p>
         </body>
       <h5 class="card-title pricing-card-title" style="background-color:rgba(127, 255, 0, 0.7); font-family:Century gothic">Марина Петрова<br/></h5>
       <ul class="list-unstyled mt-3 mb-4">
        <li style="font-family:Century gothic">"Приобрела электросамокат HIPER,<br/> теперь не приходится стоять в пробках по дороге на работу."</li>
       </ul>
      </div>
     </div>
    </div>
   </div> <!-- margin -->
   <!-- Второй -->
   <div style="margin:0 auto; width:500px">
    <div class="col">
     <div class="card mb-4 rounded-3 shadow-sm">
      <div class="card-body">
        <head>
         <meta charset="utf-8">
           <title>Круглые изображения</title>
           <style>
            .round {
              border-radius: 50%; /* Радиус скругления */
             }
           </style>
          </head>
          <body>
           <p><img src="img/foto2.webp" width="150px" height="140px" class="round"></p>
         </body>
       <h5 class="card-title pricing-card-title" style="background-color:rgba(127, 255, 0, 0.7); font-family:Century gothic">Юлия Андреева<br/></h5>
       <ul class="list-unstyled mt-3 mb-4">
        <li style="font-family:Century gothic">"Сигвей Volteco помогает мне<br/> быстро и безопасно передвигаться по сельской местности."</li>
       </ul>
      </div>
     </div>
    </div>
   </div> <!-- margin -->
   <!-- Третий -->
   <div style="margin:0 auto; width:500px">
    <div class="col">
     <div class="card mb-4 rounded-3 shadow-sm">
      <div class="card-body">
        <head>
         <meta charset="utf-8">
           <title>Круглые изображения</title>
           <style>
            .round {
              border-radius: 50%; /* Радиус скругления */
             }
           </style>
          </head>
          <body>
           <p><img src="img/foto3.jpg" width="150px" height="140px" class="round"></p>
         </body>
       <h5 class="card-title pricing-card-title" style="background-color:rgba(127, 255, 0, 0.7); font-family:Century gothic">Илья Свиридов<br/></h5>
       <ul class="list-unstyled mt-3 mb-5">
        <li style="font-family:Century gothic">"Гироскутер KUGOO – отличный способ<br/> расслабиться в жаркий летний день."</li>
       </ul>
      </div>
     </div>
    </div>
   </div> <!-- margin -->
   </div>
 </div> <!-- margin all -->
</div>
<!-- Отзывы END -->

<!-- Кнопка наверх -->
<body>
  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="arrow-up-short" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M8 12a.5.5 0 0 0 .5-.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 .5.5z" />
    </symbol>
  </svg>
  <div class="btn-up btn-up_hide">
    <svg class="btn-up-icon" role="img" aria-label="Прокрутить страницу к началу">
      <use xlink:href="#arrow-up-short"></use>
    </svg>
  </div>
  <script>
    const btnUp = {
      el: document.querySelector('.btn-up'),
      scrolling: false,
      show() {
        if (this.el.classList.contains('btn-up_hide') && !this.el.classList.contains('btn-up_hiding')) {
          this.el.classList.remove('btn-up_hide');
          this.el.classList.add('btn-up_hiding');
          window.setTimeout(() => {
            this.el.classList.remove('btn-up_hiding');
          }, 300);
        }
      },
      hide() {
        if (!this.el.classList.contains('btn-up_hide') && !this.el.classList.contains('btn-up_hiding')) {
          this.el.classList.add('btn-up_hiding');
          window.setTimeout(() => {
            this.el.classList.add('btn-up_hide');
            this.el.classList.remove('btn-up_hiding');
          }, 300);
        }
      },
      addEventListener() {
        // при прокрутке окна (window)
        window.addEventListener('scroll', () => {
          const scrollY = window.scrollY || document.documentElement.scrollTop;
          if (this.scrolling && scrollY > 0) {
            return;
          }
          this.scrolling = false;
          // если пользователь прокрутил страницу более чем на 200px
          if (scrollY > 400) {
            // сделаем кнопку .btn-up видимой
            this.show();
          } else {
            // иначе скроем кнопку .btn-up
            this.hide();
          }
        });
        // при нажатии на кнопку .btn-up
        document.querySelector('.btn-up').onclick = () => {
          this.scrolling = true;
          this.hide();
          // переместиться в верхнюю часть страницы
          window.scrollTo({
            top: 0,
            left: 0,
            behavior: 'smooth'
          });
        }
      }
    }
    btnUp.addEventListener();
  </script>
</body>
<!-- Кнопка наверх END -->

<!-- Футер -->
<?php require "blocks/footer.php" ?>
<!-- Футер END-->

<!-- Скрипт для карусели -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
          crossorigin="anonymous"></script>
</body>
