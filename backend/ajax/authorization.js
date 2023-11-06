formAuthorization.addEventListener('submit', event => {
    event.preventDefault();

    const formDataAuthorization = new FormData(formAuthorization);

    const arrayJsonData = {
        email: formDataAuthorization.get('emailUser'),
        password: formDataAuthorization.get('passwordUser')
    };

    fetch('../../backend/server/authorization.php', {
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