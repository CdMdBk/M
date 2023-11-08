let arrUserData = {};

const arrButtonLinkedLists = document.querySelectorAll('select.appointment__input');
let arrIdLinkedLists = {};

const formEditData = document.querySelector('form.data');

function exitUser() {
    fetch('../../backend/login/exit-user.php')
        .then(response => {
            window.location.href = 'index.php';
        });
}