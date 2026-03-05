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
            <h1>Политика возврата средств</h1>
            
            <h2>Условия для оформления возврата</h2>
            <p>
                Мы стремимся обеспечить максимальную ценность для каждого клиента <strong><?= $domainTitle ?></strong>. 
                Вы можете претендовать на полный или частичный возврат средств в следующих ситуациях:
            </p>
            <ul>
                <li>
                    <strong>Несоответствие программы описанию:</strong> Если содержание 
                    проведенной карьерной консультации или предоставленного экспертного материала существенно 
                    отличается от программы, заявленной на платформе <strong><?= $domainTitle ?></strong> на момент покупки.
                </li>
                <li>
                    <strong>Технические неисправности с нашей стороны:</strong> При возникновении 
                    критических проблем в работе цифровой инфраструктуры платформы 
                    <strong><?= $fullDomain ?></strong>, которые делают доступ к сессиям или материалам невозможным и не были 
                    устранены технической поддержкой в течение 48 часов.
                </li>
                <li>
                    <strong>Отказ в течение «периода охлаждения»:</strong> Если вы решили отказаться 
                    от участия в программе в течение 14 (четырнадцати) календарных дней с момента оплаты, 
                    при условии, что экспертная сессия еще не была проведена и вы не получили доступ 
                    к закрытым материалам.
                </li>
            </ul>

            <h2>Процедура запроса на возврат</h2>
            <p>
                Чтобы инициировать процедуру на платформе <strong><?= $domainTitle ?></strong>, 
                пожалуйста, выполните следующие шаги:
            </p>
            <ol class="custom-list">
                <li>
                    Отправьте письмо на наш официальный email службы поддержки: 
                    <a href="mailto:support@<?= $fullDomain ?>">support@<?= $fullDomain ?></a>.
                </li>
                <li>
                    В теме письма укажите: «Запрос на возврат: [Название вашей программы]».
                </li>
                <li>
                    В теле письма укажите данные для идентификации: имя, фамилию и дату транзакции.
                </li>
                <li>
                    Кратко опишите причину запроса — это поможет нам улучшить наши AI-инструменты 
                    и качество консалтинга.
                </li>
                <li>
                    Наша финансовая служба в Мюнхене рассмотрит запрос и свяжется с вами 
                    для подтверждения деталей в течение 3 рабочих дней.
                </li>
            </ol>

            <h2>Сроки и способ возврата</h2>
            <p>
                После одобрения возврата денежные средства будут отправлены в течение 7–14 рабочих дней. 
                Возврат осуществляется тем же способом, которым была произведена оплата. 
                Пожалуйста, учитывайте, что зачисление средств может зависеть от регламента работы вашего банка 
                в <strong>Германии</strong> или стране вашего пребывания.
            </p>

            <h2>Исключения и ограничения</h2>
            <p>Возврат не может быть осуществлен, если:</p>
            <ul>
                <li>
                    Запрос подан после проведения индивидуальной консультации или стратегической сессии.
                </li>
                <li>
                    Вы получили доступ (скачали или изучили онлайн) более чем к 50% материалов 
                    выбранной программы апгрейда.
                </li>
                <li>
                    Невозможность получения услуги вызвана техническими проблемами на стороне пользователя 
                    (проблемы с интернет-провайдером, ПО или оборудованием).
                </li>
                <li>
                    Услуга была оказана в полном объеме и соответствует заявленным на 
                    <strong><?= $fullDomain ?></strong> стандартам качества.
                </li>
            </ul>

            <h2>Изменения в политике</h2>
            <p>
                <strong><?= $domainTitle ?></strong> оставляет за собой право обновлять настоящую Политику 
                в соответствии с изменениями в законодательстве ЕС. Актуальная версия всегда 
                находится в открытом доступе на этой странице.
            </p>

            <h2>Свяжитесь с нами</h2>
            <p>
                По всем вопросам, связанным с возвратом или условиями предоставления услуг, 
                наша команда экспертов всегда на связи:
                <br><br>
                Email: <a href="mailto:support@<?= $fullDomain ?>">support@<?= $fullDomain ?></a><br>
                Телефон: <a href="tel:+498952374109">+49 89 5237 4109</a><br>
                Адрес: Leopoldstraße 25, 80802 München, Germany
            </p>

            <div class="pages-footer" style="margin-top: 50px; padding-top: 30px; border-top: 1px solid rgba(255,255,255,0.05);">
                <p style="font-size: 0.9rem; opacity: 0.6; color: var(--color-text);">Редакция от: Март 2026</p>
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