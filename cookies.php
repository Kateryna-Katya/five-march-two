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
            <h1>Политика использования файлов cookie</h1>

            <p>
                Добро пожаловать на платформу <strong><?= $domainTitle ?></strong>! Чтобы улучшить ваш опыт
                взаимодействия с нашим ресурсом, обеспечить стабильную работу инструментов и
                анализировать активность пользователей для повышения качества консалтинга, мы используем файлы cookie и
                схожие технологии. Настоящая политика подробно объясняет, какие именно технологии мы применяем и как вы можете ими управлять.
            </p>

            <h2>Что такое файлы cookie?</h2>
            <p>
                Файл cookie — это небольшой текстовый файл, который веб-сайт сохраняет на вашем устройстве, когда вы его посещаете. 
                Это позволяет платформе <strong><?= $domainTitle ?></strong> "помнить" ваши действия и предпочтения 
                (например, язык, настройки региона Германия и другие параметры) 
                в течение определенного времени, чтобы ваш пошаговый путь к карьерному росту был максимально удобным.
            </p>

            <h2>Какие типы файлов cookie мы используем?</h2>
            <p>
                Мы классифицируем файлы cookie на сайте <strong><?= $fullDomain ?></strong> по следующим категориям:
            </p>
            <ul>
                <li>
                    <strong>Строго необходимые:</strong> Критически важны для функционирования платформы, доступа к защищенным разделам и корректной работы форм. 
                </li>
                <li>
                    <strong>Аналитические и производительные:</strong> Собирают анонимную информацию о том, как пользователи взаимодействуют с блогом, помогая нам внедрять инновационные решения.
                </li>
                <li>
                    <strong>Функциональные:</strong> Позволяют запоминать ваш выбор (например, город Мюнхен) для предоставления персонализированного консалтингового опыта.
                </li>
                <li>
                    <strong>Маркетинговые:</strong> Используются для доставки релевантных предложений по карьерному апгрейду, соответствующих вашим профессиональным интересам.
                </li>
            </ul>

            <h2>Зачем мы используем файлы cookie?</h2>
            <p>Основные цели на сайте <strong><?= $domainTitle ?></strong>:</p>
            <ul>
                <li>Обеспечение передовой цифровой инфраструктуры и безопасности.</li>
                <li>Анализ эффективности наших стратегий роста.</li>
                <li>Персонализация интерфейса для пользователей в странах ЕС.</li>
                <li>Технологическая оптимизация визуальных эффектов и анимаций.</li>
            </ul>

            <h2>Ваш выбор и управление файлами cookie</h2>
            <p>
                Вы имеете полный контроль над данными. Вы можете изменить настройки в своем браузере или отклонить cookie через наш всплывающий попап. 
                Обратите внимание: отключение строго необходимых файлов может ограничить доступ к некоторым функциям платформы.
            </p>

            <h2>Файлы cookie третьих сторон</h2>
            <p>
                На некоторых страницах мы используем инструменты нового поколения, такие как Google Analytics или библиотеки анимаций (GSAP). 
                Мы рекомендуем ознакомиться с их правилами обработки данных для получения полной информации.
            </p>

            <h2>Контактная информация</h2>
            <p>
                Если у вас возникли вопросы касательно политики использования cookie на <strong><?= $domainTitle ?></strong>, 
                пожалуйста, свяжитесь с нашими специалистами:
                <br><br>
                Email: <a href="mailto:support@<?= $fullDomain ?>">support@<?= $fullDomain ?></a><br>
                Телефон: <a href="tel:+498952374109">+49 89 5237 4109</a><br>
                Адрес: Leopoldstraße 25, 80802 München, Germany
            </p>
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