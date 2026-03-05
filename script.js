/**
 * Project: <?= $domainTitle ?> — Career Upgrade Platform
 * Year: 2026
 * Version: 3.0 (Final Stable)
 */

document.addEventListener('DOMContentLoaded', () => {
    
    // --- 1. ИНИЦИАЛИЗАЦИЯ БАЗОВЫХ БИБЛИОТЕК ---
    
    // Иконки Lucide (превращает <i data-lucide="..."> в SVG)
    if (typeof lucide !== 'undefined') {
        lucide.createIcons();
    }

    // AOS.js (анимация появления блоков при скролле)
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 1000,
            once: true,
            easing: 'ease-out-cubic',
            offset: 100
        });
    }

    // Регистрация плагинов GSAP
    if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
        gsap.registerPlugin(ScrollTrigger);
    }

    // --- 2. НАВИГАЦИЯ И МОБИЛЬНОЕ МЕНЮ (FIXED) ---

    const header = document.getElementById('header');
    const burger = document.getElementById('burger');
    const nav = document.getElementById('nav');
    const navLinks = document.querySelectorAll('.nav__link');

    // Эффект хедера при скролле
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.classList.add('header--scrolled');
        } else {
            header.classList.remove('header--scrolled');
        }
    });

    // Логика Бургера
    if (burger && nav) {
        burger.onclick = function(e) {
            e.preventDefault();
            this.classList.toggle('active');
            nav.classList.toggle('active');
            document.body.classList.toggle('no-scroll'); // Блокировка скролла
        };

        // Закрытие меню при клике на любую ссылку
        navLinks.forEach(link => {
            link.onclick = () => {
                burger.classList.remove('active');
                nav.classList.remove('active');
                document.body.classList.remove('no-scroll');
            };
        });
    }

    // Плавный скролл к секциям с отступом под хедер
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const href = this.getAttribute('href');
            if (href === '#') return;
            
            e.preventDefault();
            const target = document.querySelector(href);
            if (target) {
                const headerOffset = 85;
                const elementPosition = target.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });

    // --- 3. GSAP АНИМАЦИИ (HERO & STRATEGY) ---

    if (typeof gsap !== 'undefined') {
        
        // Входная анимация Hero
        const heroTl = gsap.timeline({ defaults: { ease: "power4.out" } });
        heroTl.from(".title-line", { y: 100, opacity: 0, stagger: 0.2, duration: 1.2 })
              .from(".hero__description", { opacity: 0, y: 20, duration: 0.8 }, "-=0.6")
              .from(".hero__actions", { opacity: 0, scale: 0.9, duration: 0.8 }, "-=0.4")
              .from(".hero__visual", { opacity: 0, x: 50, duration: 1 }, "-=1");

        // Параллакс фоновых элементов за мышкой
        document.addEventListener("mousemove", (e) => {
            const { clientX, clientY } = e;
            const xPos = (clientX / window.innerWidth - 0.5) * 30;
            const yPos = (clientY / window.innerHeight - 0.5) * 30;

            gsap.to(".hero__circle--1", { x: xPos, y: yPos, duration: 1.5 });
            gsap.to(".hero__circle--2", { x: -xPos, y: -yPos, duration: 1.5 });
        });

        // Секция Strategy: Рост линии прогресса при скролле
        if (document.querySelector('.strategy__progress-fill')) {
            gsap.to(".strategy__progress-fill", {
                height: "100%",
                ease: "none",
                scrollTrigger: {
                    trigger: ".strategy__container",
                    start: "top 60%",
                    end: "bottom 80%",
                    scrub: 1
                }
            });
        }

        // Подсветка активных узлов стратегии
        document.querySelectorAll('.strategy__item').forEach((item) => {
            ScrollTrigger.create({
                trigger: item,
                start: "top 70%",
                onEnter: () => item.classList.add('active'),
                onLeaveBack: () => item.classList.remove('active')
            });
        });
    }

    // --- 4. ФОРМА ОБРАТНОЙ СВЯЗИ ---

    const contactForm = document.getElementById('contactForm');
    const phoneInput = document.getElementById('phoneInput');
    const captchaLabel = document.getElementById('captchaQuestion');
    const formMessage = document.getElementById('formMessage');

    // Валидация телефона (только числа)
    if (phoneInput) {
        phoneInput.addEventListener('input', (e) => {
            e.target.value = e.target.value.replace(/\D/g, '');
        });
    }

    // Математическая капча
    let correctAnswer = 0;
    const generateCaptcha = () => {
        if (!captchaLabel) return;
        const n1 = Math.floor(Math.random() * 9) + 1;
        const n2 = Math.floor(Math.random() * 9) + 1;
        correctAnswer = n1 + n2;
        captchaLabel.textContent = `${n1} + ${n2}`;
    };
    generateCaptcha();

    // Обработка отправки через AJAX-имитацию
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const userAnswer = parseInt(document.getElementById('captchaInput').value);

            if (userAnswer !== correctAnswer) {
                showStatus('Ошибка! Неверный ответ капчи.', 'error');
                generateCaptcha();
                return;
            }

            const btn = this.querySelector('button[type="submit"]');
            const originalText = btn.innerHTML;
            
            btn.disabled = true;
            btn.innerHTML = '<span>Отправка данных...</span>';

            setTimeout(() => {
                this.reset();
                showStatus('Успех! Мы свяжемся с вами в течение 15 минут.', 'success');
                btn.disabled = false;
                btn.innerHTML = originalText;
                generateCaptcha();
            }, 1500);
        });
    }

    function showStatus(text, type) {
        if (!formMessage) return;
        formMessage.textContent = text;
        formMessage.className = `form__message ${type}`;
        formMessage.style.display = 'block';
        
        setTimeout(() => {
            formMessage.style.display = 'none';
        }, 5000);
    }

    // --- 5. COOKIE POPUP ---

    const cookiePopup = document.getElementById('cookiePopup');
    const acceptBtn = document.getElementById('acceptCookies');

    if (cookiePopup && !localStorage.getItem('cookieAccepted')) {
        setTimeout(() => {
            cookiePopup.classList.add('show');
        }, 3000);
    }

    if (acceptBtn) {
        acceptBtn.onclick = () => {
            localStorage.setItem('cookieAccepted', 'true');
            cookiePopup.classList.remove('show');
        };
    }
});