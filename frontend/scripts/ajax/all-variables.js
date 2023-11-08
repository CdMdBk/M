let arrUserData = {};

const arrButtonLinkedLists = document.querySelectorAll('select.appointment__input');
let dateInput = document.querySelector('.appointment__input[type="datetime-local"]');
let arrIdLinkedLists = {};
let arrRecordData = {};
const formRecord = document.querySelector('.appointment__flex-box');

const formEditData = document.querySelector('form.data');

const recordContainer = document.querySelector('.orders-data');
let record = `
    <div class="orders-data__order">
        <h5 class="orders-data__cell orders-data__cell_font">
            ID
        </h5>
    
        <h5 class="orders-data__cell orders-data__cell_font">
            Статус
        </h5>
    
        <h5 class="orders-data__cell orders-data__cell_font">
            Клиент
        </h5>
    
        <h5 class="orders-data__cell orders-data__cell_font">
            Стиль
        </h5>
    
        <h5 class="orders-data__cell orders-data__cell_font">
            Дата
        </h5>
    
        <h5 class="orders-data__cell orders-data__cell_font">
            Сумма
        </h5>
    </div>
`;
const buttonChangeStatus = document.querySelector('.orders-data__button[data-change]');

function exitUser() {
    fetch('../../backend/login/exit-user.php')
        .then(response => {
            window.location.href = 'index.php';
        });
}

function editDataUser(arrUpdateData) {
    const arrUserData = document.querySelectorAll('.data__li[data-change]');
    document.querySelector('.profile__header_heading').innerHTML = arrUpdateData['name'];
    document.querySelector('.account-nav_font[data-name]').innerHTML = arrUpdateData['name'];
    arrUserData[0].innerHTML = arrUpdateData['name'];
    arrUserData[1].innerHTML = arrUpdateData['email'];
    arrUserData[2].innerHTML = arrUpdateData['telephone'];
    arrUserData[3].innerHTML = arrUpdateData['nickname'];
    arrUserData[4].innerHTML = arrUpdateData['brief_information'];
}