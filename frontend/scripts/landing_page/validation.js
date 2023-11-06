"use strict"

//Show validation form

const arrButtonValidation = document.querySelectorAll('[data-show-validation]');

const formRegistration = document.querySelector('form.validation__registration');
const formAuthorization = document.querySelector('form.validation__authorization');

// const formContainer = document.querySelector('#form-container');

arrButtonValidation.forEach(button => {
    button.addEventListener('click', () => {
        formRegistration.classList.add('validation_active');
        document.body.classList.add('body_lock');

        document.addEventListener('mouseup', event => {
            if (event.target === formRegistration || event.target === formAuthorization) {
                formRegistration.classList.remove('validation_active');
                formAuthorization.classList.remove('validation_active');
                document.body.classList.remove('body_lock');
            }
        })
    });
});

//Switch validation forms

// const validationRegistration = document.createElement('fieldset');
// const validationAuthorization = document.createElement('fieldset');
// validationRegistration.innerHTML = `
//     <fieldset class="validation__input-box">
//         <label class="validation__input-box_font" for="nameUser">
//             Имя пользователя
//         </label>
//
//         <input class="validation__input" id="nameUser" name="nameUser" type="text" placeholder="Введите имя пользователя" required>
//     </fieldset>
//
//     <fieldset class="validation__input-box">
//         <label class="validation__input-box_font" for="emailUser">
//             Почта
//         </label>
//
//         <input class="validation__input" id="emailUser" name="emailUser" type="email" placeholder="Введите почту" required>
//     </fieldset>
//
//     <fieldset class="validation__input-box">
//         <label class="validation__input-box_font" for="passwordUser">
//             Пароль
//         </label>
//
//         <input class="validation__input" id="passwordUser" name="passwordUser" type="password" placeholder="Введите пароль" required>
//     </fieldset>
//
//     <input class="validation__button validation__button_bg" type="submit" value="Зарегистрироваться" required>
//
//     <button onclick="switchForm()" class="validation__button-switch validation__button-switch_font" id="switch-form" type="button">
//         У вас есть учётная запись?
//     </button>
// `;
// validationAuthorization.innerHTML = `
//     <fieldset class="validation__input-box">
//         <label class="validation__input-box_font" for="emailUser">
//             Почта
//         </label>
//
//         <input class="validation__input" id="emailUser" name="emailUser" type="email" placeholder="Введите почту" required>
//     </fieldset>
//
//     <fieldset class="validation__input-box">
//         <label class="validation__input-box_font" for="passwordUser">
//             Пароль
//         </label>
//
//         <input class="validation__input" id="passwordUser" name="passwordUser" type="password" placeholder="Введите пароль" required>
//     </fieldset>
//
//     <input class="validation__button validation__button_bg" type="submit" value="Войти" required>
//
//     <button onclick="switchForm()" class="validation__button-switch validation__button-switch_font" id="switch-form" type="button">
//         Ещё нет аккаунта? Зарегистрируйтесь
//     </button>
// `;

// let submitRegistration = document.querySelector('form.validation__registration');
// let submitAuthorization = document.querySelector('form.validation__authorization');

function switchForm() {
    if (formRegistration.classList.contains('validation_active')) {
        formRegistration.classList.remove('validation_active');
        formAuthorization.classList.add('validation_active');
    } else {
        formRegistration.classList.add('validation_active');
        formAuthorization.classList.remove('validation_active');
    }


    // if (form.classList.contains('validation__registration')) {
        // formContainer.innerHTML = validationAuthorization.innerHTML;
        // form.classList.replace('validation__registration', 'validation__authorization');
        // submitAuthorization = document.querySelector('form.validation__authorization');
    // } else {
        // formContainer.innerHTML = validationRegistration.innerHTML;
        // form.classList.replace('validation__authorization', 'validation__registration');
        // submitRegistration = document.querySelector('form.validation__registration');
    // }
}