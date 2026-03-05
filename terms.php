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
            <h1>Условия использования</h1>

            <p>
                Добро пожаловать на платформу <strong><?= $domainTitle ?></strong>! Настоящие Условия использования
                (далее — «Условия» или «Соглашение») представляют собой юридически
                обязывающий договор между вами (далее — «Пользователь») и командой <strong><?= $domainTitle ?></strong>
                (далее — «Компания», «мы»). Пожалуйста, внимательно
                ознакомьтесь с ними. Используя наш сайт и любые связанные с ним
                экспертные услуги, вы подтверждаете свое полное согласие с
                данными Условиями. Если вы не согласны, вы должны немедленно
                прекратить использование ресурсов платформы.
            </p>

            <h2>1. Предмет Соглашения</h2>
            <p>
                Компания предоставляет Пользователю доступ к использованию сайта
                <strong><?= $fullDomain ?></strong> и его функционала, включая: доступ к
                инновационным материалам по карьерному росту, статьям в блоге, экспертным консультациям 
                и AI-инструментам оценки потенциала (далее — «Услуги»). Настоящее Соглашение регулирует все аспекты
                взаимодействия Пользователя с нашей цифровой инфраструктурой.
            </p>

            <h2>2. Обязанности и права Пользователя</h2>
            <p>
                Вы обязуетесь использовать сайт исключительно в законных целях для личного профессионального развития. 
                При использовании платформы <strong><?= $domainTitle ?></strong> 
                <strong>категорически запрещается</strong>:
            </p>
            <ul>
                <li>
                    Использовать Контент сайта для коммерческой перепродажи или выдавать экспертные методики 
                    Компании за свои собственные.
                </li>
                <li>
                    Предпринимать действия, направленные на нарушение безопасности или перегрузку 
                    серверов <strong><?= $domainTitle ?></strong> в Германии и ЕС.
                </li>
                <li>
                    Использовать автоматизированные системы (скрипты, парсеры) для сбора данных 
                    с ресурса <strong><?= $fullDomain ?></strong> без письменного разрешения.
                </li>
                <li>
                    Предоставлять ложные сведения о своей квалификации или опыте при записи 
                    на стратегические сессии.
                </li>
            </ul>

            <h2>3. Интеллектуальная собственность</h2>
            <p>
                Весь контент, размещенный на сайте <strong><?= $fullDomain ?></strong>, включая тексты стратегий, графику,
                изображения, видео-уроки и программный код, является объектом интеллектуальной
                собственности Компании. Вам предоставляется ограниченная лицензия на использование материалов 
                в целях личного карьерного апгрейда. Любое копирование или распространение методологий 
                <strong><?= $domainTitle ?></strong> без согласия правообладателя преследуется по закону.
            </p>

            <h2>4. Ограничение ответственности</h2>
            <p>
                Мы прилагаем все усилия для обеспечения точности данных, однако Услуги предоставляются 
                по принципу «как есть» (as is). Мы не гарантируем, что платформа будет работать 
                бесперебойно в случае локальных сбоев в сети Пользователя или что представленные в блоге 
                советы принесут мгновенный результат без личных усилий со стороны Пользователя.
            </p>
            <p>
                Компания не несет ответственности за любые решения, принятые Пользователем на основе 
                материалов сайта <strong><?= $domainTitle ?></strong>. Вся ответственность за применение 
                предложенных стратегий на рынке труда ЕС лежит исключительно на вас.
            </p>

            <h2>5. Изменения условий</h2>
            <p>
                Мы оставляем за собой право обновлять настоящие Условия в зависимости от изменений 
                в законодательстве Германии или технологий платформы. Новая редакция вступает в силу 
                с момента публикации на <strong><?= $fullDomain ?></strong>.
            </p>

            <h2>6. Юрисдикция и споры</h2>
            <p>
                Все споры стороны стремятся разрешить путем переговоров. В случае невозможности 
                достижения согласия, спор подлежит рассмотрению в соответствии с действующим 
                законодательством в судах города <strong>Мюнхен, Германия</strong>.
            </p>

            <h2>7. Контактная информация</h2>
            <p>
                По вопросам использования платформы или уточнения Условий, пожалуйста, 
                свяжитесь с нашей службой поддержки:
                <br><br>
                Email: <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a><br>
                Телефон: <a href="tel:+498952374109">+49 89 5237 4109</a><br>
                Адрес: Leopoldstraße 25, 80802 München, Germany
            </p>

            <div class="pages-footer" style="margin-top: 50px; padding-top: 30px; border-top: 1px solid rgba(255,255,255,0.05);">
                <p style="font-size: 0.9rem; opacity: 0.6;">Последнее обновление: Март 2026</p>
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