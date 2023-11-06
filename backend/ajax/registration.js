formRegistration.addEventListener('submit', event => {
    event.preventDefault();

    const formDataRegistration = new FormData(formRegistration);

    const arrayJsonData = {
        name: formDataRegistration.get('nameUser'),
        email: formDataRegistration.get('emailUser'),
        password: formDataRegistration.get('passwordUser')
    };

    fetch('../../backend/server/registration.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json;charset=utf-8'
        },
        body: JSON.stringify(arrayJsonData)
    }).then(response => {
        return response.json();
    }).then(data => {
        console.log(data);
        window.location.href = 'personal-account.php';
    });
});