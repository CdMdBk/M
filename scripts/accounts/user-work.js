const buttonShowRefactor = document.querySelector('.account-nav__content[data-nav-box-avatar]');
const mainBlock = document.querySelector('.account__container');
const profile = document.querySelector('.profile');

buttonShowRefactor.addEventListener('click', switchBlocks);

function switchBlocks() {
    if (mainBlock.style.display === 'none') {
        mainBlock.style.display = `flex`;
        profile.style.display = `none`;
    } else {
        mainBlock.style.display = `none`;
        profile.style.display = `flex`;
    }
}