


/* Pop-up login */

let popupBg = document.querySelector('.popup__bg'); // Фон попап окна
let popup = document.querySelector('.auth-block'); // Само окно
let openPopupButtons = document.querySelectorAll('.btn-pop'); // Кнопки для показа окна

openPopupButtons.forEach((button) => { // Перебираем все кнопки
    button.addEventListener('click', (e) => { // Для каждой вешаем обработчик событий на клик
        e.preventDefault(); // Предотвращаем дефолтное поведение браузера
        popupBg.classList.add('active'); // Добавляем класс 'active' для фона
        popup.classList.add('active'); // И для самого окна
        document.querySelector(".header").classList.remove("open");
    })
});

document.addEventListener('click', (e) => { // Вешаем обработчик на весь документ
    if(e.target === popupBg) { // Если цель клика - фот, то:
        popupBg.classList.remove('active'); // Убираем активный класс с фона
        popup.classList.remove('active'); // И с окна
    }
});


/* burger menu*/

document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("burger").addEventListener("click", function() {
        document.querySelector(".header").classList.toggle("open")
    })
})


// Закрыть меню при нажатии на Esc
window.addEventListener('keydown', (e) => {
    if (e.key === "Escape") {
        // Действие при клике
        document.querySelector(".header").classList.remove("open")
    }
});

// Закрыть меню при клике вне его
document.getElementById("menu").addEventListener('click', event => {
    event._isClickWithInMenu = true;
});
document.getElementById("burger").addEventListener('click', event => {
    event._isClickWithInMenu = true;
});
document.body.addEventListener('click', event => {
    if (event._isClickWithInMenu) return;
    // Действие при клике
    document.querySelector(".header").classList.remove("open")
});


/* Form validation */ 


document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('.auth-block__form');

    form.addEventListener('submit', function (event) {
        event.preventDefault();

        const loginInput = document.getElementById('login');
        const passwordInput = document.getElementById('password');

        // Проверка наличия значения в поле логина
        if (!loginInput.value.trim()) {
            alert('Введите логин');
            return;
        }

        // Проверка длины логина
        if (loginInput.value.length > 30) {
            alert('Логин не должен быть больше 30 символов');
            return;
        }

        // Проверка наличия значения в поле пароля
        if (!passwordInput.value.trim()) {
            alert('Введите пароль');
            return;
        }

        // Проверка длины пароля
        if (passwordInput.value.length > 14) {
            alert('Пароль не должен быть больше 14 символов');
            return;
        }

        // Проверка наличия цифры в пароле
        if (!/\d/.test(passwordInput.value)) {
            alert('Пароль должен содержать хотя бы одну цифру');
            return;
        }

        // Проверка наличия специального символа в пароле
        if (!/[_!@#$%^&*(),.?":{}|<>]/.test(passwordInput.value)) {
            alert('Пароль должен содержать хотя бы один специальный символ');
            return;
        }

        // Если все проверки пройдены, можно отправить форму
        form.submit();
    });
});