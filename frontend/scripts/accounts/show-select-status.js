const buttonChange = $('.orders-data__button');
buttonChange.html('Редактировать');

buttonChange.click(() => {
    $('p.orders-data__cell:nth-child(2)').toggleClass('orders-data__cell_delete');
    $('select.orders-data__cell').toggleClass('orders-data__cell_delete');
    buttonChange.toggleClass('orders-data__button_change');

    (buttonChange.html() === 'Редактировать')
        ?
        buttonChange.html('Изменить')
        :
        buttonChange.html('Редактировать');
});