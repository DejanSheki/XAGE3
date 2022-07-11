const popup = document.querySelector('.popup');
const btn = document.querySelector('input[type="button"]');

btn.addEventListener('click', () => {
    popup.classList.add('popup-open');
})