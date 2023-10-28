const buttonProfile = $('.account-nav__content[data-nav-box-avatar]')[0];
const buttonExitEdit = $('.profile__header-buttons .profile__button:nth-child(2)')[0];
const buttonEdit = $('.profile__header-buttons .profile__button:first-child')[0];
const buttonSubmit = $('.data__button_appearance')[0];

const mainBlock = $('.account__container')[0];
const profile = $('.profile')[0];
const data = $('.data')[0];
const formData = $('form.data')[0];

buttonProfile.addEventListener('click', switchBlocks);
buttonExitEdit.addEventListener('click', switchBlocks);

function switchBlocks() {
    if (mainBlock.style.display === 'none') {
        mainBlock.style.display = `flex`;
        profile.style.display = `none`;
        data.style.display = `flex`;
        formData.style.display = `none`;
    } else {
        mainBlock.style.display = `none`;
        profile.style.display = `block`;
        data.style.display = `flex`;
        formData.style.display = `none`;
        buttonEdit.style.display = `block`;
    }
}

buttonEdit.addEventListener('click', switchForm);
buttonSubmit.addEventListener('click', switchForm);

function switchForm() {
    if (data.style.display === `none`) {
        data.style.display = `flex`;
        formData.style.display = `none`;
        buttonEdit.style.display = `block`;
    } else {
        data.style.display = `none`;
        formData.style.display = `flex`;
        buttonEdit.style.display = `none`;
    }
}

formData.addEventListener('submit', (event) => {
    event.preventDefault();
});