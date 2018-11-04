
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/favicon.ico">

    <title><?php bloginfo('name'); echo " | "; bloginfo('description'); ?></title>
     
    <!-- get styles from wp_head function -->
    <?php wp_head(); ?>
  
  </head>

  <body>
    <nav class="header" >
      <div class="container">
        <div class="row">
          <div class="col-lg-2 col-lg-offset-0 col-md-2 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-8 col-xs-offset-2">
            <?php the_custom_logo ?>  
           <img src=" <?php echo bloginfo( 'template_url' ) ?>/assets/img/main/logo.png" alt="Arkada. Строительство и монтаж">
          </div>
          <div class="col-lg-5 col-lg-offset-0 col-md-6 col-md-offset-0 col-sm-0 col-sm-offset-0" id="menu-div">
            <div class="wrap">
              <div class="wrap-block">
                <ul class="header-ul" id="menu">
                  <li><a href="#shop">Проекты</a></li>
                  <li><a href="#example">Примеры работ</a></li>
                  <li><a href="#review">Отзывы</a></li>
                  <li><a href="#contacts">Контакты</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-lg-offset-1 col-md-2 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-8 col-xs-offset-2">
            <div class="wrap">
              <div class="wrap-block">
                <a href="tel:+79106287744" class="header-phone">8-910-628-77-44</a>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-lg-offset-0 col-md-2 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-8 col-xs-offset-2">
            <button type="submit" class="button-small popup-btn">
              Перезвоните мне
            </button>
          </div>
        </div>
      </div>
    </nav>

    <main class="main" style="
      background-image: url( <?php the_field('main_page_image') ?>);
    ">
      <div class="container">
        <div class="row">
          <div class="col-md-5 col-md-offset-1">
            <h1><?php the_field('main_text'); ?></h1>
            <h2><?php the_field('after_main_text') ?></h2>
            <div class="main-feature">
              <img src=" <?php echo bloginfo( 'template_url' ) ?>/assets/img/main/icon-1@1x.png" alt="piggy">
              <p class="main-feature-p"><?php the_field('feature_1'); ?></p>
            </div>
            <div class="main-feature">
              <img src=" <?php echo bloginfo( 'template_url' ) ?>/assets/img/main/icon-2@1x.png" alt="clock">
              <p class="main-feature-p"><?php the_field('feature_2'); ?></p>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="main-cta-block col-md-12 col-sm-12 col-xs-12">

            <div class="col-md-7 col-md-offset-1 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0">
              <b class="main-cta">Оставь заявку прямо сейчас</b>
              <b class="main-cta-sub">и получи <span>бесплатный расчет</span> и <span>входную дверь</span> в подарок<sup>*</sup>!</b>

              <form method="post" name="first-form" action="mailer/smart.php" class="form">

                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="user_name" required type="text" placeholder="Ваше имя">
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="phone" id="phone-1" required type="text" placeholder="Ваш телефон">
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12">
                  <button id="first-btn" type="submit" class="popup-thanks-btn">Оставить заявку</button>
                </div>

                <div class="col-md-6 col-md-offset-0 col-sm-6 col-sm-offset-0 col-xs-12 col-xs-offset-0">
                  <p>Наш менеджер перезвонит Вам в течене 15 минут для консультации.<br>* при заказе строительства дома</p>
                </div>

              </form>

            </div>

          </div>
        </div>
      </div>
    </main>

    <section class="features">
      <div class="container">
        <div class="col-md-4 col-sm-12 col-xs-12">
          <div class="media">
            <div class="media-left">
              <img class="media-object" src="<?php echo bloginfo( 'template_url' ) ?>/assets/img/features/1.png" alt="Неизменная цена">
            </div>
            <div class="media-body">
              <h2 class="media-heading">Неизменная цена</h2>
              <p>Стоимость дома фиксируется в договоре и не изменяется до окончания строительства</p>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-sm-12 col-xs-12">
          <div class="media">
            <div class="media-left">
              <img class="media-object" src="<?php echo bloginfo( 'template_url' ) ?>/assets/img/features/2.png" alt="Неизменная цена">
            </div>
            <div class="media-body">
              <h2 class="media-heading">Команда специалистов</h2>
              <p>У нас работают только лучшие строители, архитекторы и дизайнеры</p>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-sm-12 col-xs-12">
          <div class="media">
            <div class="media-left">
              <img class="media-object" src="<?php echo bloginfo( 'template_url' ) ?>/assets/img/features/3.png" alt="Неизменная цена">
            </div>
            <div class="media-body">
              <h2 class="media-heading">Индивидуальный подход</h2>
              <p>Для Вас мы можем разработать уникальный проект дома, или доработать имеющийся</p>
            </div>
          </div>
        </div>

      </div>
    </section>

    <section class="shop" id="shop">
      <div class="container">
        <h2>Популярные проекты</h2>
        <ul class="shop-ul">
          <li><a class="active-color" href="#shop" id="a-1">Дома из бруса</a></li>
          <li><a href="#shop" id="a-2">Сруб</a></li>
          <li><a href="#shop" id="a-3">Каркасные дома</a></li>
          <li><a href="#shop" id="a-4">Кирпичные дома</a></li>
          <li><a href="#shop" id="a-5">Дома из блоков</a></li>
        </ul>
        <!-- Дома из блоков -->
        <div class="shop-cards" id="shop-cards-5">
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="shop-card">
              <img src=" <?php echo bloginfo( 'template_url' ) ?>/assets/img/shop/5/1.jpg" alt="">
              <h3>Дом из блоков D-123</h3>
              <p>Площадь 59.86 м<sup>2</sup></p>
              <span>614 000</span>
              <b>453 820 руб.</b>
              <button type="submit" class="popup-btn button-small">Оставить заявку</button>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="shop-card">
              <img src=" <?php echo bloginfo( 'template_url' ) ?>/assets/img/shop/5/2.jpg" alt="">
              <h3>Дом из блоков D-123</h3>
              <p>Площадь 59.86 м<sup>2</sup></p>
              <span>614 000</span>
              <b>453 820 руб.</b>
              <button type="submit" class="popup-btn button-small">Оставить заявку</button>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="shop-card">
              <img src=" <?php echo bloginfo( 'template_url' ) ?>/assets/img/shop/5/3.jpg" alt="">
              <h3>Дом из блоков D-123</h3>
              <p>Площадь 59.86 м<sup>2</sup></p>
              <span>614 000</span>
              <b>453 820 руб.</b>
              <button type="submit" class="popup-btn button-small">Оставить заявку</button>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="shop-card">
              <img src=" <?php echo bloginfo( 'template_url' ) ?>/assets/img/shop/5/4.jpg" alt="">
              <h3>Дом из блоков D-123</h3>
              <p>Площадь 59.86 м<sup>2</sup></p>
              <span>614 000</span>
              <b>453 820 руб.</b>
              <button type="submit" class="popup-btn button-small">Оставить заявку</button>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="shop-card">
              <img src=" <?php echo bloginfo( 'template_url' ) ?>/assets/img/shop/5/5.jpg" alt="">
              <h3>Дом из блоков D-123</h3>
              <p>Площадь 59.86 м<sup>2</sup></p>
              <span>614 000</span>
              <b>453 820 руб.</b>
              <button type="submit" class="popup-btn button-small">Оставить заявку</button>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="shop-card">
              <img src=" <?php echo bloginfo( 'template_url' ) ?>/assets/img/shop/5/6.jpg" alt="">
              <h3>Дом из блоков D-123</h3>
              <p>Площадь 59.86 м<sup>2</sup></p>
              <span>614 000</span>
              <b>453 820 руб.</b>
              <button type="submit" class="popup-btn button-small">Оставить заявку</button>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="shop-card">
              <img src=" <?php echo bloginfo( 'template_url' ) ?>/assets/img/shop/5/7.jpg" alt="">
              <h3>Дом из блоков D-123</h3>
              <p>Площадь 59.86 м<sup>2</sup></p>
              <span>614 000</span>
              <b>453 820 руб.</b>
              <button type="submit" class="popup-btn button-small">Оставить заявку</button>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="shop-card">
              <img src=" <?php echo bloginfo( 'template_url' ) ?>/assets/img/shop/5/8.jpg" alt="">
              <h3>Дом из блоков D-123</h3>
              <p>Площадь 59.86 м<sup>2</sup></p>
              <span>614 000</span>
              <b>453 820 руб.</b>
              <button type="submit" class="popup-btn button-small">Оставить заявку</button>
            </div>
          </div>
        </div>

        <!-- Кирпичные дома -->
        <div class="shop-cards" id="shop-cards-4">
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="shop-card">
              <img src=" <?php echo bloginfo( 'template_url' ) ?>/assets/img/shop/4/1.jpg" alt="">
              <h3>Кирпичный дом D-123</h3>
              <p>Площадь 59.86 м<sup>2</sup></p>
              <span>614 000</span>
              <b>453 820 руб.</b>
              <button type="submit" class="popup-btn button-small">Оставить заявку</button>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="shop-card">
              <img src=" <?php echo bloginfo( 'template_url' ) ?>/assets/img/shop/4/2.jpg" alt="">
              <h3>Кирпичный дом D-123</h3>
              <p>Площадь 59.86 м<sup>2</sup></p>
              <span>614 000</span>
              <b>453 820 руб.</b>
              <button type="submit" class="popup-btn button-small">Оставить заявку</button>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="shop-card">
              <img src=" <?php echo bloginfo( 'template_url' ) ?>/assets/img/shop/4/3.jpg" alt="">
              <h3>Кирпичный дом D-123</h3>
              <p>Площадь 59.86 м<sup>2</sup></p>
              <span>614 000</span>
              <b>453 820 руб.</b>
              <button type="submit" class="popup-btn button-small">Оставить заявку</button>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="shop-card">
              <img src=" <?php echo bloginfo( 'template_url' ) ?>/assets/img/shop/4/4.jpg" alt="">
              <h3>Кирпичный дом D-123</h3>
              <p>Площадь 59.86 м<sup>2</sup></p>
              <span>614 000</span>
              <b>453 820 руб.</b>
              <button type="submit" class="popup-btn button-small">Оставить заявку</button>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="shop-card">
              <img src=" <?php echo bloginfo( 'template_url' ) ?>/assets/img/shop/4/5.jpg" alt="">
              <h3>Кирпичный дом D-123</h3>
              <p>Площадь 59.86 м<sup>2</sup></p>
              <span>614 000</span>
              <b>453 820 руб.</b>
              <button type="submit" class="popup-btn button-small">Оставить заявку</button>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="shop-card">
              <img src=" <?php echo bloginfo( 'template_url' ) ?>/assets/img/shop/4/6.jpg" alt="">
              <h3>Кирпичный дом D-123</h3>
              <p>Площадь 59.86 м<sup>2</sup></p>
              <span>614 000</span>
              <b>453 820 руб.</b>
              <button type="submit" class="popup-btn button-small">Оставить заявку</button>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="shop-card">
              <img src=" <?php echo bloginfo( 'template_url' ) ?>/assets/img/shop/4/7.jpg" alt="">
              <h3>Кирпичный дом D-123</h3>
              <p>Площадь 59.86 м<sup>2</sup></p>
              <span>614 000</span>
              <b>453 820 руб.</b>
              <button type="submit" class="popup-btn button-small">Оставить заявку</button>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="shop-card">
              <img src=" <?php echo bloginfo( 'template_url' ) ?>/assets/img/shop/3.jpg" alt="">
              <h3>Кирпичный дом D-123</h3>
              <p>Площадь 59.86 м<sup>2</sup></p>
              <span>614 000</span>
              <b>453 820 руб.</b>
              <button type="submit" class="popup-btn button-small">Оставить заявку</button>
            </div>
          </div>
        </div>

        <!-- Каркасные дома -->
        <div class="shop-cards" id="shop-cards-3">
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="shop-card">
              <img src=" <?php echo bloginfo( 'template_url' ) ?>/assets/img/shop/3/1.jpg" alt="">
              <h3>Каркасный дом D-123</h3>
              <p>Площадь 59.86 м<sup>2</sup></p>
              <span>614 000</span>
              <b>453 820 руб.</b>
              <button type="submit" class="popup-btn button-small">Оставить заявку</button>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="shop-card">
              <img src=" <?php echo bloginfo( 'template_url' ) ?>/assets/img/shop/3/2.jpg" alt="">
              <h3>Каркасный дом D-123</h3>
              <p>Площадь 59.86 м<sup>2</sup></p>
              <span>614 000</span>
              <b>453 820 руб.</b>
              <button type="submit" class="popup-btn button-small">Оставить заявку</button>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="shop-card">
              <img src=" <?php echo bloginfo( 'template_url' ) ?>/assets/img/shop/3/3.jpg" alt="">
              <h3>Каркасный дом D-123</h3>
              <p>Площадь 59.86 м<sup>2</sup></p>
              <span>614 000</span>
              <b>453 820 руб.</b>
              <button type="submit" class="popup-btn button-small">Оставить заявку</button>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="shop-card">
              <img src=" <?php echo bloginfo( 'template_url' ) ?>/assets/img/shop/3/4.jpg" alt="">
              <h3>Каркасный дом D-123</h3>
              <p>Площадь 59.86 м<sup>2</sup></p>
              <span>614 000</span>
              <b>453 820 руб.</b>
              <button type="submit" class="popup-btn button-small">Оставить заявку</button>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="shop-card">
              <img src=" <?php echo bloginfo( 'template_url' ) ?>/assets/img/shop/3/5.jpg" alt="">
              <h3>Каркасный дом D-123</h3>
              <p>Площадь 59.86 м<sup>2</sup></p>
              <span>614 000</span>
              <b>453 820 руб.</b>
              <button type="submit" class="popup-btn button-small">Оставить заявку</button>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="shop-card">
              <img src=" <?php echo bloginfo( 'template_url' ) ?>/assets/img/shop/3/6.jpg" alt="">
              <h3>Каркасный дом D-123</h3>
              <p>Площадь 59.86 м<sup>2</sup></p>
              <span>614 000</span>
              <b>453 820 руб.</b>
              <button type="submit" class="popup-btn button-small">Оставить заявку</button>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="shop-card">
              <img src=" <?php echo bloginfo( 'template_url' ) ?>/assets/img/shop/3/7.jpg" alt="">
              <h3>Каркасный дом D-123</h3>
              <p>Площадь 59.86 м<sup>2</sup></p>
              <span>614 000</span>
              <b>453 820 руб.</b>
              <button type="submit" class="popup-btn button-small">Оставить заявку</button>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="shop-card">
              <img src=" <?php echo bloginfo( 'template_url' ) ?>/assets/img/shop/3/8.jpg" alt="">
              <h3>Каркасный дом D-123</h3>
              <p>Площадь 59.86 м<sup>2</sup></p>
              <span>614 000</span>
              <b>453 820 руб.</b>
              <button type="submit" class="popup-btn button-small">Оставить заявку</button>
            </div>
          </div>
        </div>

        <!-- Сруб -->
        <div class="shop-cards" id="shop-cards-2">
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="shop-card">
              <img src=" <?php echo bloginfo( 'template_url' ) ?>/assets/img/shop/2/1.jpg" alt="">
              <h3>Сруб D-123</h3>
              <p>Площадь 59.86 м<sup>2</sup></p>
              <span>614 000</span>
              <b>453 820 руб.</b>
              <button type="submit" class="popup-btn button-small">Оставить заявку</button>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="shop-card">
              <img src=" <?php echo bloginfo( 'template_url' ) ?>/assets/img/shop/2/2.jpg" alt="">
              <h3>Сруб D-123</h3>
              <p>Площадь 59.86 м<sup>2</sup></p>
              <span>614 000</span>
              <b>453 820 руб.</b>
              <button type="submit" class="popup-btn button-small">Оставить заявку</button>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="shop-card">
              <img src=" <?php echo bloginfo( 'template_url' ) ?>/assets/img/shop/2/3.jpg" alt="">
              <h3>Сруб D-123</h3>
              <p>Площадь 59.86 м<sup>2</sup></p>
              <span>614 000</span>
              <b>453 820 руб.</b>
              <button type="submit" class="popup-btn button-small">Оставить заявку</button>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="shop-card">
              <img src=" <?php echo bloginfo( 'template_url' ) ?>/assets/img/shop/2/4.jpg" alt="">
              <h3>Сруб D-123</h3>
              <p>Площадь 59.86 м<sup>2</sup></p>
              <span>614 000</span>
              <b>453 820 руб.</b>
              <button type="submit" class="popup-btn button-small">Оставить заявку</button>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="shop-card">
              <img src=" <?php echo bloginfo( 'template_url' ) ?>/assets/img/shop/2/5.jpg" alt="">
              <h3>Сруб D-123</h3>
              <p>Площадь 59.86 м<sup>2</sup></p>
              <span>614 000</span>
              <b>453 820 руб.</b>
              <button type="submit" class="popup-btn button-small">Оставить заявку</button>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="shop-card">
              <img src=" <?php echo bloginfo( 'template_url' ) ?>/assets/img/shop/2/6.jpg" alt="">
              <h3>Сруб D-123</h3>
              <p>Площадь 59.86 м<sup>2</sup></p>
              <span>614 000</span>
              <b>453 820 руб.</b>
              <button type="submit" class="popup-btn button-small">Оставить заявку</button>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="shop-card">
              <img src=" <?php echo bloginfo( 'template_url' ) ?>/assets/img/shop/2/7.jpg" alt="">
              <h3>Сруб D-123</h3>
              <p>Площадь 59.86 м<sup>2</sup></p>
              <span>614 000</span>
              <b>453 820 руб.</b>
              <button type="submit" class="popup-btn button-small">Оставить заявку</button>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="shop-card">
              <img src=" <?php echo bloginfo( 'template_url' ) ?>/assets/img/shop/2/8.jpg" alt="">
              <h3>Сруб D-123</h3>
              <p>Площадь 59.86 м<sup>2</sup></p>
              <span>614 000</span>
              <b>453 820 руб.</b>
              <button type="submit" class="popup-btn button-small">Оставить заявку</button>
            </div>
          </div>
        </div>

        <!-- Дома из бруса -->
        <div class="shop-cards active" id="shop-cards-1">
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="shop-card">
              <img src=" <?php echo bloginfo( 'template_url' ) ?>/assets/img/shop/1/1.jpg" alt="">
              <h3>Дом из бруса D-123</h3>
              <p>Площадь 59.86 м<sup>2</sup></p>
              <span>614 000</span>
              <b>453 820 руб.</b>
              <button type="submit" class="popup-btn button-small">Оставить заявку</button>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="shop-card">
              <img src=" <?php echo bloginfo( 'template_url' ) ?>/assets/img/shop/1/2.jpg" alt="">
              <h3>Дом из бруса D-123</h3>
              <p>Площадь 59.86 м<sup>2</sup></p>
              <span>614 000</span>
              <b>453 820 руб.</b>
              <button type="submit" class="popup-btn button-small">Оставить заявку</button>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="shop-card">
              <img src=" <?php echo bloginfo( 'template_url' ) ?>/assets/img/shop/1/3.jpg" alt="">
              <h3>Дом из бруса D-123</h3>
              <p>Площадь 59.86 м<sup>2</sup></p>
              <span>614 000</span>
              <b>453 820 руб.</b>
              <button type="submit" class="popup-btn button-small">Оставить заявку</button>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="shop-card">
              <img src=" <?php echo bloginfo( 'template_url' ) ?>/assets/img/shop/1/4.jpg" alt="">
              <h3>Дом из бруса D-123</h3>
              <p>Площадь 59.86 м<sup>2</sup></p>
              <span>614 000</span>
              <b>453 820 руб.</b>
              <button type="submit" class="popup-btn button-small">Оставить заявку</button>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="shop-card">
              <img src=" <?php echo bloginfo( 'template_url' ) ?>/assets/img/shop/1/5.jpg" alt="">
              <h3>Дом из бруса D-123</h3>
              <p>Площадь 59.86 м<sup>2</sup></p>
              <span>614 000</span>
              <b>453 820 руб.</b>
              <button type="submit" class="popup-btn button-small">Оставить заявку</button>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="shop-card">
              <img src=" <?php echo bloginfo( 'template_url' ) ?>/assets/img/shop/1/6.jpg" alt="">
              <h3>Дом из бруса D-123</h3>
              <p>Площадь 59.86 м<sup>2</sup></p>
              <span>614 000</span>
              <b>453 820 руб.</b>
              <button type="submit" class="popup-btn button-small">Оставить заявку</button>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="shop-card">
              <img src=" <?php echo bloginfo( 'template_url' ) ?>/assets/img/shop/1/7.jpg" alt="">
              <h3>Дом из бруса D-123</h3>
              <p>Площадь 59.86 м<sup>2</sup></p>
              <span>614 000</span>
              <b>453 820 руб.</b>
              <button type="submit" class="popup-btn button-small">Оставить заявку</button>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="shop-card">
              <img src=" <?php echo bloginfo( 'template_url' ) ?>/assets/img/shop/1/8.jpg" alt="">
              <h3>Дом из бруса D-123</h3>
              <p>Площадь 59.86 м<sup>2</sup></p>
              <span>614 000</span>
              <b>453 820 руб.</b>
              <button type="submit" class="popup-btn button-small">Оставить заявку</button>
            </div>
          </div>
        </div>
  
      </div>
    </section>

    <section class="example" id="example">
      <div class="container">
        <h2>Примеры наших работ</h2>

        <div class="slider_ex">
            <img src=" <?php echo bloginfo( 'template_url' ) ?>/assets/img/example/1.jpg" alt="">
            <img src=" <?php echo bloginfo( 'template_url' ) ?>/assets/img/example/2.jpg" alt="">
            <img src=" <?php echo bloginfo( 'template_url' ) ?>/assets/img/example/3.jpg" alt="">
            <img src=" <?php echo bloginfo( 'template_url' ) ?>/assets/img/example/2.jpg" alt="">
            <img src=" <?php echo bloginfo( 'template_url' ) ?>/assets/img/example/1.jpg" alt="">
            <img src=" <?php echo bloginfo( 'template_url' ) ?>/assets/img/example/3.jpg" alt="">
        </div>

      </div>
    </section>

    <section class="houses">
      <div class="house house-1">
        <div class="container">
          <div class="col-md-6 col-md-offset-6 col-sm-7 col-sm-offset-5 col-xs-12 col-xs-offset-0">
            <h2>Каркасные дома</h2>
            <ul>
              <li>Низкая стоимость строительства.</li>
              <li>Низкие затраты на эксплуатацию.</li>
              <li>Можно строить в любое время года.</li>
              <li>Легкость и доступность внутренней отделки.</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="house house-2">
        <div class="container">
          <div class="col-md-6 col-md-offset-6 col-sm-7 col-sm-offset-5 col-xs-12 col-xs-offset-0">
            <h2>Кирпичные дома</h2>
            <ul>
              <li>Высокий уровень звукоизоляции.</li>
              <li>Повышенная теплоизоляция.</li>
              <li>Долговечность и прочность.</li>
              <li>Высокая противопожарная защита.</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="house house-3">
        <div class="container">
          <div class="col-md-6 col-md-offset-6 col-sm-7 col-sm-offset-5 col-xs-12 col-xs-offset-0">
            <h2>Блочные дома</h2>
            <ul>
              <li>Низкая стоимость.</li>
              <li>Безопасен для здоровья.</li>
              <li>Сохраняет тепло.</li>
              <li>Высокая противопожарная защита.</li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <section class="upsell">
      <div class="container">
        <div class="row">
          <h2>Кровельные работы</h2>
          <p class="upsell-desc">Наша компания выполняет весь необходимый комплекс по монтажу кровли<br>из любых материалов:</p>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="upsell-block">
              <img src=" <?php echo bloginfo( 'template_url' ) ?>/assets/img/upsell/1.png" alt="Металлочерепица">
              <b>Металлочерепица</b>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="upsell-block">
              <img src=" <?php echo bloginfo( 'template_url' ) ?>/assets/img/upsell/2.png" alt="Мягкая гибкая черепица">
              <b>Мягкая гибкая черепица</b>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="upsell-block">
              <img src=" <?php echo bloginfo( 'template_url' ) ?>/assets/img/upsell/3.png" alt="Профнастил">
              <b>Профнастил</b>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="upsell-block">
              <img src=" <?php echo bloginfo( 'template_url' ) ?>/assets/img/upsell/4.png" alt="Шифер">
              <b>Шифер</b>
            </div>
          </div>
        </div>
        <p class="upsell-more">и много других материалов.</p>
        <div class="row">
          <div class="upsell-cta-block main-cta-block col-md-12 col-sm-12 col-xs-12">

            <div class="col-md-7 col-md-offset-1 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0">
              <b class="main-cta">Мы бесплатно проконсультируем вас</b>
              <b class="main-cta-sub">по выбору <span>материала кровли</span> для Вашего дома!</b>

              <form method="post" name="second-form" action="mailer/smart.php" class="form">

                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="user_name" required type="text" placeholder="Ваше имя">
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="user_phone" id="phone-2" required type="text" placeholder="Ваш телефон">
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12">
                  <button id="second-btn" type="submit" class="popup-thanks-btn">Оставить заявку</button>
                </div>

                <div class="col-md-6 col-md-offset-0 col-sm-6 col-sm-offset-0 col-xs-12 col-xs-offset-0">
                  <p>Наш менеджер перезвонит Вам в течене 15 минут для консультации.</p>
                </div>

              </form>

            </div>

          </div>
        </div>
      </div>
    </section>

    <section class="review" id="review">
      <div class="container">
        <h2>Клиенты о нас</h2>
        <div class="row">
          <div class="slider_ex">
            <div class="review-block">
              <div class="media review-avatar">
                <div class="media-left">
                  <img class="media-object" src="<?php echo bloginfo( 'template_url' ) ?>/assets/img/review/ava.png" alt="Анна Маслова">
                </div>
                <div class="media-body">
                  <p class="review-avatar-name">Анна Маслова, Москва</p>
                </div>
              </div>
              <div class="review-block-text">
                <h3>Вопрос по недвижимости</h3>
                <p>Если бы не компания «Найдем Адвоката», то моя семья могла бы совершить роковую ошибку и попасть в лапы к аферистам. Юрист за 2 дня смог досудебно полностью урегулировать конфликт. Спасибо Вам</p>
              </div>
            </div>
            <div class="review-block">
              <div class="media review-avatar">
                <div class="media-left">
                  <img class="media-object" src="<?php echo bloginfo( 'template_url' ) ?>/assets/img/review/ava.png" alt="Анна Маслова">
                </div>
                <div class="media-body">
                  <p class="review-avatar-name">Анна Маслова, Москва</p>
                </div>
              </div>
              <div class="review-block-text">
                <h3>Вопрос по недвижимости</h3>
                <p>Если бы не компания «Найдем Адвоката», то моя семья могла бы совершить роковую ошибку и попасть в лапы к аферистам. Юрист за 2 дня смог досудебно полностью урегулировать конфликт. Спасибо Вам</p>
              </div>
            </div>
            <div class="review-block">
              <div class="media review-avatar">
                <div class="media-left">
                  <img class="media-object" src="<?php echo bloginfo( 'template_url' ) ?>/assets/img/review/ava.png" alt="Анна Маслова">
                </div>
                <div class="media-body">
                  <p class="review-avatar-name">Анна Маслова, Москва</p>
                </div>
              </div>
              <div class="review-block-text">
                <h3>Вопрос по недвижимости</h3>
                <p>Если бы не компания «Найдем Адвоката», то моя семья могла бы совершить роковую ошибку и попасть в лапы к аферистам. Юрист за 2 дня смог досудебно полностью урегулировать конфликт. Спасибо Вам</p>
              </div>
            </div>
            <div class="review-block">
              <div class="media review-avatar">
                <div class="media-left">
                  <img class="media-object" src="<?php echo bloginfo( 'template_url' ) ?>/assets/img/review/ava.png" alt="Анна Маслова">
                </div>
                <div class="media-body">
                  <p class="review-avatar-name">Анна Маслова, Москва</p>
                </div>
              </div>
              <div class="review-block-text">
                <h3>Вопрос по недвижимости</h3>
                <p>Если бы не компания «Найдем Адвоката», то моя семья могла бы совершить роковую ошибку и попасть в лапы к аферистам. Юрист за 2 дня смог досудебно полностью урегулировать конфликт. Спасибо Вам</p>
              </div>
            </div>
            <div class="review-block">
              <div class="media review-avatar">
                <div class="media-left">
                  <img class="media-object" src="<?php echo bloginfo( 'template_url' ) ?>/assets/img/review/ava.png" alt="Анна Маслова">
                </div>
                <div class="media-body">
                  <p class="review-avatar-name">Анна Маслова, Москва</p>
                </div>
              </div>
              <div class="review-block-text">
                <h3>Вопрос по недвижимости</h3>
                <p>Если бы не компания «Найдем Адвоката», то моя семья могла бы совершить роковую ошибку и попасть в лапы к аферистам. Юрист за 2 дня смог досудебно полностью урегулировать конфликт. Спасибо Вам</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="contacts" id="contacts">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-12 col-xs-offset-0">
            <div class="contacts-block">
              <img src=" <?php echo bloginfo( 'template_url' ) ?>/assets/img/contacts/1.png" alt="">
              <a class="contacts-phone" href="tel:+79106287744">+7-910-628-77-44</a>
            </div>
          </div>
          <div class="col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-12 col-xs-offset-0">
            <div class="contacts-block">
              <img src=" <?php echo bloginfo( 'template_url' ) ?>/assets/img/contacts/2.png" alt="">
              <p>г. Рязань,<br>ул. Солнечная, 12,<br>офис 45</p>
            </div>
          </div>
          <div class="col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-12 col-xs-offset-0">
            <div class="contacts-block">
              <img src=" <?php echo bloginfo( 'template_url' ) ?>/assets/img/contacts/3.png" alt="">
              <a href="mailto:arkada62@yandex.ru">arkada62@yandex.ru</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d577.3068912428816!2d39.739776823609!3d54.63521087449768!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4149e3ca7d798a8b%3A0xe7cd4dc08fecf2ef!2z0YPQuy4g0KHQvtC70L3QtdGH0L3QsNGPLCAxMiwg0KDRj9C30LDQvdGMLCDQoNGP0LfQsNC90YHQutCw0Y8g0L7QsdC7LiwgMzkwMDAw!5e0!3m2!1sru!2sru!4v1511309069060"  allowfullscreen></iframe>
    </div>

    <section class="question" id="question">
      <div class="container">
        <h2>Остались вопросы?</h2>
        <a id="manager-call" href="#question">Задайте их менеджеру</a>
      </div>
    </section>

    <!-- Popup -->
    <div class="popup popup-call">
      <!-- Само (белое) модальное окно -->
      <div class="popup-dialog">
        <!-- Содежримое -->
        <div class="popup-content">
          <button type="submit" class="popup-close">&times;</button>
          <h4 class="popup-header">
            Заинтересовало?
          </h4>
          <p>Оставьте свои контактные данные <br>для связи</p>
          <form method="post" name="third-form" action="mailer/smart.php" class="form">
              <input name="user_name" required type="text" placeholder="Ваше имя">
              <input name="user_phone" id="phone-3" required type="text" placeholder="Ваш телефон">
              <button id="third-btn" type="submit" class="popup-thanks-btn">Оставить заявку</button>
             <p>Наш менеджер перезвонит Вам в течене 15 минут для консультации.<br>* при заказе строительства дома</p>
          </form>
        </div>
      </div>
    </div>

    <!-- Popup -->
    <div class="popup popup-thanks">
      <!-- Само (белое) модальное окно -->
      <div class="popup-dialog">
        <!-- Содежримое -->
        <div class="popup-content">
          <button type="submit" class="popup-close">&times;</button>
          <h2 class="popup-header">
            Спасибо за заявку
          </h4>
          <p>В течение 5 минут мы Вам перезвоним</p>
          <button class="thanks-btn button-small">Вернуться на сайт</button>
        </div>
      </div>
    </div>

   

    <?php wp_footer(); ?>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Popup -->
    <script>
      $(document).ready(function($){
        $('.popup-btn').on('click', function(event) {
          $('.popup-call').fadeIn();
        });
        $('.popup-close').on('click', function(event) {
          $('.popup-call').fadeOut();  
          $('.popup-thanks').fadeOut();
        });
        $('.thanks-btn').on('click', function(event) {
          $('.popup-thanks').fadeOut();
        });
        $('#manager-call').on('click', function(event) {
          $('.popup-call').fadeIn();
        })
      });
    </script>
    <!-- Формы -->
    <script>
      $(function() {
        $('form').submit(function(e) {
          var $form = $(this);
          $.ajax({
            type: $form.attr('method'),
            url: $form.attr('action'),
            data: $form.serialize()
          }).done(function() {
            $('.popup-call').fadeOut();
            $('.popup-thanks').fadeIn();
            $('form[name=first-form]').trigger('reset');
            $('form[name=second-form]').trigger('reset');
            $('form[name=third-form]').trigger('reset');
          }).fail(function() {
            alert('Заявка не отправлена по тех причинам');
          });
          //отмена действия по умолчанию для кнопки submit
          e.preventDefault(); 
        });
      });
    </script>
    

    <script>
      jQuery(function($){
         $("#phone-1").mask("+7 (999) 999-9999");
         $("#phone-2").mask("+7 (999) 999-9999");
         $("#phone-3").mask("+7 (999) 999-9999");
         $("#phone-4").mask("+7 (999) 999-9999");
      });
    </script>
    
    <script>
      $(document).ready(function(){
        $('.slider_ex').slick({
          infinite: true,
          speed: 300,
          slidesToShow: 3,
          slidesToScroll: 1,
          prevArrow: '<button type="submit" class="prev"></button>',
          nextArrow: '<button type="submit" class="next"></button>',
          responsive: [
            {
              breakpoint: 991,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1
              }
            },
            {
              breakpoint: 767,
              settings: {
                adaptiveHeight: true,
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
          ]
        });
      });
    </script>
    <!-- Скрипт для магазина -->
    <script>
      $(function() {
        $('#a-1').click(function(){
          $('#shop-cards-1').addClass('active');
          $('#shop-cards-2').removeClass('active');
          $('#shop-cards-3').removeClass('active');
          $('#shop-cards-4').removeClass('active');
          $('#shop-cards-5').removeClass('active');
          $('#a-1').addClass('active-color');
          $('#a-2').removeClass('active-color');
          $('#a-3').removeClass('active-color');
          $('#a-4').removeClass('active-color');
          $('#a-5').removeClass('active-color');
          // $('html, body').animate({scrollTop:$('#shop-cards-1').position().top}, 800);
        });
        $('#a-2').click(function(){
          $('#shop-cards-2').addClass('active');
          $('#shop-cards-1').removeClass('active');
          $('#shop-cards-3').removeClass('active');
          $('#shop-cards-4').removeClass('active');
          $('#shop-cards-5').removeClass('active');
          $('#a-2').addClass('active-color');
          $('#a-1').removeClass('active-color');
          $('#a-3').removeClass('active-color');
          $('#a-4').removeClass('active-color');
          $('#a-5').removeClass('active-color');
          // $('html, body').animate({scrollTop:$('#shop-cards-2').position().top}, 800);
        });
        $('#a-3').click(function(){
          $('#shop-cards-3').addClass('active');
          $('#shop-cards-2').removeClass('active');
          $('#shop-cards-1').removeClass('active');
          $('#shop-cards-4').removeClass('active');
          $('#shop-cards-5').removeClass('active');
          $('#a-3').addClass('active-color');
          $('#a-2').removeClass('active-color');
          $('#a-1').removeClass('active-color');
          $('#a-4').removeClass('active-color');
          $('#a-5').removeClass('active-color');
          // $('html, body').animate({scrollTop:$('#shop-cards-3').position().top}, 800);
        });
        $('#a-4').click(function(){
          $('#shop-cards-4').addClass('active');
          $('#shop-cards-2').removeClass('active');
          $('#shop-cards-3').removeClass('active');
          $('#shop-cards-1').removeClass('active');
          $('#shop-cards-5').removeClass('active');
          $('#a-4').addClass('active-color');
          $('#a-2').removeClass('active-color');
          $('#a-3').removeClass('active-color');
          $('#a-1').removeClass('active-color');
          $('#a-5').removeClass('active-color');
          // $('html, body').animate({scrollTop:$('#shop-cards-4').position().top}, 800);
        });
        $('#a-5').click(function(){
          $('#shop-cards-5').addClass('active');
          $('#shop-cards-2').removeClass('active');
          $('#shop-cards-3').removeClass('active');
          $('#shop-cards-4').removeClass('active');
          $('#shop-cards-1').removeClass('active');
          $('#a-5').addClass('active-color');
          $('#a-2').removeClass('active-color');
          $('#a-3').removeClass('active-color');
          $('#a-4').removeClass('active-color');
          $('#a-1').removeClass('active-color');
          // $('html, body').animate({scrollTop:$('#shop-cards-5').position().top}, 800);
        });
      });
    </script>
    <script>
      $(function(){
        $('#menu').slicknav({
          label: '',
          duration: 1000,
        });
      });
    </script>
  </body>
</html>
