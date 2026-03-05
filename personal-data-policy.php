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
            <h1>Политика касаемо обработки персональных данных</h1>

            <h2>1. Общие положения</h2>
            <p>
                Настоящая политика обработки персональных данных (далее —
                «Политика») определяет порядок и условия обработки персональных
                данных, предпринимаемые платформой <strong><?= $domainTitle ?></strong> (далее — «Оператор»), и
                устанавливает меры по обеспечению безопасности этих данных в рамках законодательства ЕС (GDPR).
            </p>
            <p>
                1.1. Важнейшей целью и условием осуществления своей деятельности
                Оператор считает соблюдение прав и свобод человека при
                обработке его данных, включая защиту прав на неприкосновенность частной жизни и профессиональную тайну в ходе карьерного консалтинга.
            </p>
            <p>
                1.2. Настоящая Политика применяется ко всей информации, которую
                Оператор может получить о посетителях (далее — «Пользователи»)
                веб-сайта <strong><?= $fullDomain ?></strong>.
            </p>

            <h2>2. Основные понятия, используемые в Политике</h2>
            <ul>
                <li>
                    <strong>Веб-сайт</strong> — совокупность графических и
                    информационных материалов, а также инновационных программных решений,
                    обеспечивающих доступность платформы по адресу
                    <strong><?= $fullDomain ?></strong>.
                </li>
                <li><strong>Пользователь</strong> — любой посетитель веб-сайта.</li>
                <li>
                    <strong>Персональные данные</strong> — любая информация,
                    относящаяся прямо или косвенно к определенному Пользователю (субъекту данных).
                </li>
                <li>
                    <strong>Обработка персональных данных</strong> — любое действие, совершаемое с
                    использованием передовой цифровой инфраструктуры Оператора в отношении данных Пользователя.
                </li>
                <li>
                    <strong>Безопасность</strong> — комплекс мер по защите данных от неправомерного доступа, 
                    блокирования или изменения.
                </li>
            </ul>

            <h2>3. Данные, которые мы обрабатываем</h2>
            <p>Оператор может обрабатывать следующие категории данных:</p>
            <ul>
                <li>
                    <strong>Данные, предоставляемые Пользователем:</strong>
                    <ul>
                        <li>Фамилия, имя, отчество;</li>
                        <li>Адрес электронной почты (Email: support@<?= $fullDomain ?>);</li>
                        <li>Номера телефонов (с валидацией по стандартам Германии).</li>
                    </ul>
                </li>
                <li>
                    <strong>Данные, собираемые автоматически:</strong>
                    <ul>
                        <li>
                            Сбор обезличенных данных о посетителях с помощью AI-инструментов 
                            интернет-статистики (в т.ч. файлов «cookie»). Эти данные помогают нам оценивать 
                            перспективы проекта и улучшать пользовательский опыт.
                        </li>
                    </ul>
                </li>
            </ul>

            <h2>4. Цели обработки персональных данных</h2>
            <ul>
                <li>
                    Идентификация Пользователя для предоставления доступа к закрытым разделам платформы 
                    карьерного апгрейда.
                </li>
                <li>
                    Установление обратной связи для уточнения деталей стратегии роста и экспертных консультаций.
                </li>
                <li>
                    Заключение и исполнение договоров на предоставление инновационных технологических решений в ЕС.
                </li>
                <li>
                    Информирование о новых материалах блога. Отказаться от уведомлений можно, направив 
                    письмо на <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a>.
                </li>
            </ul>

            <h2>5. Правовые основания</h2>
            <p>
                Оператор обрабатывает данные на базе согласия, полученного через формы 
                на сайте <strong><?= $domainTitle ?></strong>, а также в целях выполнения контрактных обязательств 
                перед Пользователем в соответствии с европейскими стандартами 2026 года.
            </p>

            <h2>6. Порядок хранения и безопасности</h2>
            <ul>
                <li>
                    Оператор применяет методологии защиты данных, доказавшие свою эффективность в крупных корпорациях Мюнхена.
                </li>
                <li>
                    Данные хранятся на защищенных серверах в пределах ЕС и не передаются третьим лицам без явного согласия Пользователя.
                </li>
                <li>
                    Срок обработки данных определяется целями консалтинга, но может быть прекращен по первому требованию Пользователя через Email: 
                    <a href="mailto:support@<?= $fullDomain ?>">support@<?= $fullDomain ?></a>.
                </li>
            </ul>

            <h2>7. Заключительные положения</h2>
            <ul>
                <li>
                    Пользователь может запросить отчет о своих данных, направив запрос Оператору.
                </li>
                <li>
                    Актуальная версия Политики <strong><?= $domainTitle ?></strong> всегда доступна на этой странице.
                    <br><br>
                    <strong>Контакты:</strong><br>
                    Телефон: +498952374109<br>
                    Адрес: Leopoldstraße 25, 80802 München, Germany
                </li>
            </ul>
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