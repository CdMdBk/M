"use strict"

//Show validation form

const arrButtonValidation = document.querySelectorAll('[data-show-validation]');
const formValidation = document.querySelector('.validation');

arrButtonValidation.forEach(button => {
    button.addEventListener('click', () => {
        formValidation.classList.add('validation_active');
        document.body.classList.add('body_lock');

        document.addEventListener('mouseup', event => {
            if (event.target === formValidation) {
                formValidation.classList.remove('validation_active');
                document.body.classList.remove('body_lock');
            }
        })
    });
});

//Switch validation forms

let buttonSwitch = document.querySelector('.validation__button-switch');
const formContainer = document.querySelector('#form-container');
const validationRegistration = document.createElement('fieldset');
const validationAuthorization = document.createElement('fieldset');

validationRegistration.innerHTML = `
    <fieldset class="validation__input-box">
        <label class="validation__input-box_font" for="nameUser">
            Имя пользователя
        </label>

        <input class="validation__input" id="nameUser" name="nameUser" type="text" placeholder="Введите имя пользователя" required>
    </fieldset>

    <fieldset class="validation__input-box">
        <label class="validation__input-box_font" for="emailUser">
            Почта
        </label>

        <input class="validation__input" id="emailUser" name="emailUser" type="email" placeholder="Введите почту" required>
    </fieldset>

    <fieldset class="validation__input-box">
        <label class="validation__input-box_font" for="passwordUser">
            Пароль
        </label>

        <input class="validation__input" id="passwordUser" name="passwordUser" type="password" placeholder="Введите пароль" required>
    </fieldset>

    <input class="validation__button validation__button_bg" type="submit" value="Зарегистрироваться" required>

    <button onclick="switchForm()" class="validation__button-switch validation__button-switch_font" id="switch-form" type="button">
        У вас есть учётная запись?
    </button>
`;
validationAuthorization.innerHTML = `
    <fieldset class="validation__input-box">
        <label class="validation__input-box_font" for="emailUser">
            Почта
        </label>

        <input class="validation__input" id="emailUser" name="emailUser" type="email" placeholder="Введите почту" required>
    </fieldset>

    <fieldset class="validation__input-box">
        <label class="validation__input-box_font" for="passwordUser">
            Пароль
        </label>

        <input class="validation__input" id="passwordUser" name="passwordUser" type="password" placeholder="Введите пароль" required>
    </fieldset>

    <input class="validation__button validation__button_bg" type="submit" value="Войти" required>

    <button onclick="switchForm()" class="validation__button-switch validation__button-switch_font" id="switch-form" type="button">
        Ещё нет аккаунта? Зарегистрируйтесь
    </button>
`;

function switchForm() {
    if (formContainer.classList.contains('validation__registration')) {
        console.log(buttonSwitch);
        formContainer.innerHTML = validationAuthorization.innerHTML;
        formContainer.classList.replace('validation__registration', 'validation__authorization');
        formValidation.method = 'GET';
        // buttonSwitch = document.querySelector('.validation__button-switch');
        console.log(buttonSwitch);
    } else {
        formContainer.innerHTML = validationRegistration.innerHTML;
        console.log(buttonSwitch);
        formContainer.classList.replace('validation__authorization', 'validation__registration');
        formValidation.method = 'POST';
        // buttonSwitch = document.querySelector('.validation__button-switch');
        console.log(buttonSwitch);
    }
}