<?php

$fullDomain = strtolower($_SERVER['HTTP_HOST'] ?? '');
$fullDomain = explode(':', $fullDomain)[0];

$parts = explode('.', $fullDomain);
$domainSlug = count($parts) >= 2
        ? $parts[count($parts) - 2]
        : $fullDomain;

$domainTitle = ucwords(str_replace('-', ' ', $domainSlug));

?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $domainTitle ?> — Карьерный апгрейд и стратегии роста
    </title>

<link rel="icon" type="image/svg+xml"
    href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32'%3E%3Cdefs%3E%3ClinearGradient id='g' x1='0%25' y1='0%25' x2='100%25' y2='100%25'%3E%3Cstop offset='0%25' style='stop-color:%232DD4BF' /%3E%3Cstop offset='100%25' style='stop-color:%233B82F6' /%3E%3C/linearGradient%3E%3C/defs%3E%3Crect x='4' y='18' width='6' height='10' rx='2' fill='url(%23g)' /%3E%3Crect x='13' y='10' width='6' height='18' rx='2' fill='url(%23g)' /%3E%3Crect x='22' y='2' width='6' height='26' rx='2' fill='url(%23g)' /%3E%3C/svg%3E">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=Montserrat:wght@800&display=swap"
        rel="stylesheet">

    <script src="https://unpkg.com/lucide@latest"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header class="header" id="header">
        <div class="container header__container">
            <a href="./#hero" class="logo">
                <span class="logo__dot"></span>
                <span class="logo__text">
                    <?= $domainTitle ?>
                </span>
            </a>

            <nav class="nav" id="nav">
                <ul class="nav__list">
                    <li><a href="./#hero" class="nav__link">Главная</a></li>
                    <li><a href="./#services" class="nav__link">Услуги</a></li>
                    <li><a href="./#strategy" class="nav__link">Стратегия</a></li>
                    <li><a href="./#reviews" class="nav__link">Отзывы</a></li>
                    <li><a href="./#blog" class="nav__link">Блог</a></li>
                </ul>
            </nav>

            <div class="header__actions">
                <a href="./#contact" class="btn btn--secondary">Связаться</a>
                <button class="burger" id="burger" aria-label="Menu">
                    <span></span>
                </button>
            </div>
        </div>
    </header>

<main>
    <section class="pages">
        <div class="container" data-aos="fade-up">
            <h1>Политика конфиденциальности</h1>

            <p>
                Настоящая Политика конфиденциальности распространяется на персональные данные,
                предоставляемые клиентами платформы <strong><?= $domainTitle ?></strong>, как для оказания 
                высокотехнологичных услуг по карьерному консалтингу, так и для других взаимодействий в электронном
                формате. Мы обеспечиваем информационное сопровождение и техническую поддержку при участии клиентов в наших экспертных программах, вебинарах и аналитических исследованиях.
            </p>

            <p>
                <strong><?= $domainTitle ?></strong> оставляет за собой право вносить изменения и дополнения
                в действующие положения Политики. Новые редакции имеют приоритет над текущими. Обратите внимание, что наши ресурсы могут содержать ссылки на платформы третьих лиц (например, LinkedIn или сервисы визуализации), которые имеют свои
                собственные регламенты. В таких случаях <strong><?= $domainTitle ?></strong> не несет ответственности за соблюдение
                конфиденциальности сторонними компаниями. Предоставляя свои данные, вы даете полное согласие
                на их обработку способами, предусмотренными настоящей Политикой.
            </p>

            <h2>Порядок сбора, хранения и уничтожения персональных данных</h2>
            <p>
                Платформа <strong><?= $domainTitle ?></strong> собирает персональные данные только с добровольного согласия
                пользователя и исключительно для предоставления экспертных услуг: доступа к аналитике,
                участия в стратегических сессиях по карьерному росту и внедрения инноваций в ваш профессиональный путь. Для
                предотвращения утечки данных мы используем передовую цифровую инфраструктуру и современные протоколы шифрования.
            </p>

            <p>
                Максимальный срок хранения персональных данных составляет 75
                лет с даты получения информации, что обусловлено необходимостью долгосрочного сопровождения карьерных траекторий. В иных случаях данные хранятся до
                завершения деятельности компании или до момента официального отзыва согласия пользователем через запрос на e-mail.
            </p>

            <p>
                Уничтожение, обезличивание или блокирование данных осуществляется Оператором для исключения возможности
                их дальнейшей обработки, если цель сбора была полностью достигнута или по прямому требованию клиента.
            </p>

            <h2>Техническая информация, собираемая платформой:</h2>
            <ul>
                <li>время доступа, тип устройства и IP-адрес;</li>
                <li>источники перехода на интернет-ресурс <strong><?= $fullDomain ?></strong>;</li>
                <li>интернет-страницы и разделы блога, посещаемые пользователем;</li>
                <li>взаимодействие с информационными и рекламными блоками;</li>
                <li>иная техническая информация, предоставляемая вашим браузером;</li>
                <li>номер телефона (в случае инициации звонка по контактам в Мюнхене).</li>
            </ul>

            <p>
                При регистрации на платформе или заполнении форм обратной связи мы собираем данные, 
                необходимые для аутентификации и глубокой персонализации наших стратегий:
            </p>
            <ul>
                <li>имя и фамилия пользователя;</li>
                <li>адрес электронной почты (e-mail) и контактный номер телефона для оперативной связи;</li>
                <li>профессиональная специализация (по желанию пользователя).</li>
            </ul>

            <h2>Информация о действиях пользователя:</h2>
            <ul>
                <li>сведения о соглашениях и сервисных контрактах между клиентом и <strong><?= $domainTitle ?></strong>;</li>
                <li>данные о запросах и заявках, отправленных через зашифрованные формы сайта;</li>
                <li>история полученных консультаций и прогресс в рамках программ апгрейда;</li>
                <li>произведенные транзакции и иная финансовая информация, предусмотренная законодательством ЕС.</li>
            </ul>

            <h2>Цели обработки данных клиентов <?= $domainTitle ?>:</h2>
            <ul>
                <li>предоставление персонализированных консалтинговых услуг и доступа к закрытому контенту;</li>
                <li>учет фидбека при разработке новых AI-инструментов для карьерного роста;</li>
                <li>информирование о стратегических сессиях, бонусах и новых материалах через e-mail;</li>
                <li>обеспечение качественной экспертной поддержки 24/7.</li>
            </ul>

            <h2>
                Передача данных третьим лицам:
            </h2>
            <p>
                <strong><?= $domainTitle ?></strong> строго придерживается принципа конфиденциальности и не передает данные клиентов, за исключением:
            </p>
            <ul>
                <li>получения прямого письменного или электронного согласия пользователя;</li>
                <li>официальных запросов компетентных органов Германии в строгом соответствии с законом;</li>
                <li>случаев реструктуризации или слияния компании с сохранением обязательств по защите данных.</li>
            </ul>

            <h2>Использование файлов cookie</h2>
            <p>
                Cookies позволяют нам анализировать паттерны поведения на сайте и сохранять ваши предпочтения (например, настройки региона или языка), 
                чтобы сделать использование <strong><?= $fullDomain ?></strong> максимально эффективным и быстрым. Вы можете в любое время управлять файлами Cookies или отключить их в настройках своего браузера.
            </p>

            <h2>Ваши права и связь с нами (GDPR)</h2>
            <p>
                Вы имеете право на доступ, исправление или удаление ваших данных в любой момент. 
                Если вы хотите реализовать свои права в соответствии с нормами GDPR, 
                пожалуйста, свяжитесь с юридической службой <strong><?= $domainTitle ?></strong> в Мюнхене по адресу: 
                <a href="mailto:support@<?= $fullDomain ?>">support@<?= $fullDomain ?></a>.
            </p>
            
            <div class="pages-footer" style="margin-top: 50px; padding-top: 30px; border-top: 1px solid rgba(255,255,255,0.05);">
                <p style="font-size: 0.9rem; opacity: 0.6;">Актуальная редакция: Март 2026. Место юрисдикции: Мюнхен, Германия.</p>
            </div>
        </div>
    </section>
</main>

    <footer class="footer">
        <div class="container">
            <div class="footer__grid">
                <div class="footer__col">
                    <a href="./#hero" class="logo logo--footer">
                        <span class="logo__dot"></span>
                        <span class="logo__text">
                            <?= $domainTitle ?>
                        </span>
                    </a>
                    <p class="footer__description">
                        Передовая цифровая инфраструктура для вашего профессионального развития. Решения, которые меняют
                        правила игры в вашей карьере.
                    </p>
                </div>

                <div class="footer__col">
                    <h4 class="footer__title">Навигация</h4>
                    <ul class="footer__links">
                        <li><a href="./#hero">Главная</a></li>
                        <li><a href="./#services">Услуги</a></li>
                        <li><a href="./#strategy">Стратегия</a></li>
                        <li><a href="./#blog">Блог</a></li>
                    </ul>
                </div>

                <div class="footer__col">
                    <h4 class="footer__title">Юридическая информация</h4>
                    <ul class="footer__links">
                        <li><a href="./privacy.php">Политика конфиденциальности</a></li>
                        <li><a href="./cookies.php">Cookie политика</a></li>
                        <li><a href="./terms.php">Условия использования</a></li>
                        <li><a href="./return.php">Политика возврата</a></li>
                        <li><a href="./disclaimer.php">Отказ от ответственности</a></li>
                        <li><a href="./contact.php">Контакты</a></li>
                        <li><a href="./personal-data-policy.php">Персональные данные</a></li>
                    </ul>
                </div>

                <div class="footer__col">
                    <h4 class="footer__title">Мюнхен, Германия</h4>
                    <ul class="footer__contacts">
                        <li>
                            <i data-lucide="map-pin"></i>
                            <span>Leopoldstraße 25, 80802 München</span>
                        </li>
                        <li>
                            <i data-lucide="phone"></i>
                            <a href="tel:+498952374109">+49 89 5237 4109</a>
                        </li>
                        <li>
                            <i data-lucide="mail"></i>
                            <a href="mailto:hello@<?= $fullDomain ?>">hello@
                                <?= $fullDomain ?>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="footer__bottom">
                <p>&copy; 2026
                    <?= $domainTitle ?>. Все права защищены. Предложение активно только в странах ЕС.
                </p>
            </div>
        </div>
    </footer>
    <div id="cookiePopup" class="cookie-popup">
        <div class="cookie-popup__content">
            <p>Этот сайт использует cookies для улучшения работы. Подробнее — в нашей <a href="./cookies.php">Cookie
                    политике</a>.</p>
            <button id="acceptCookies" class="btn btn--primary btn--sm">Принять</button>
        </div>
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
    <script src="script.js"></script>
</body>

</html>