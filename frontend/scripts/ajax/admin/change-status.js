buttonChangeStatus.addEventListener('click', () => {


    fetch('../../backend/admin/change-status.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json;charset=utf-8'
        },
        body: JSON.stringify()
    }).then(response => {
        return response.json();
    }).then(data => {
        console.log(data);

        document.querySelectorAll('p.orders-data__cell:nth-child(2)').forEach((p, index) => {
            p.innerHTML = data[index];
        });

        $('p.orders-data__cell:nth-child(2)').toggleClass('orders-data__cell_delete');
        $('select.orders-data__cell').toggleClass('orders-data__cell_delete');
    });
})