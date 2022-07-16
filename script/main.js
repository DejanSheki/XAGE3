const email = document.querySelector('#emailTxt');
const popup = document.querySelector('.popup');
const btn = document.querySelector('input[type="submit"]');
const mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

btn.addEventListener('click', (e) => {
    e.preventDefault();
    const body = {
        email: email.value
    };
    if (email.value === '') {
        email.style.border = '2px solid red';
    } else if (email.value.match(mailformat)) {
        email.style.border = 'none';

        fetch('./script/connect.php', {
            method: 'POST',
            body: Object.entries(body).map(([k, v]) => { return k + '=' + v }).join('&'),
            headers: {
                "Content-type": "application/x-www-form-urlencoded; charset=UTF-8"
            }
        })
            .then(res => {
                if (res.status === 200) {
                    popup.classList.add('popup-open');
                    email.value = '';
                }
            });
    } else {
        email.style.border = '2px solid red';
    }
});



