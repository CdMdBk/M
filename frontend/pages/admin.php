<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible"
          content="ie=edge">
    <meta name="author"
          content="Милана Горошаева">
    <meta name="keywords"
          content="photo">

    <link rel="stylesheet"
          href="../styles/bootstrap.css">
    <link rel="stylesheet"
          href="../styles/preloader.css">
    <link rel="stylesheet"
          href="../styles/base-styles.css">
    <link rel="stylesheet"
          href="../styles/fonts.css">

    <link rel="stylesheet"
          href="../styles/landing_page/header.css">
    <link rel="stylesheet"
          href="../styles/accounts/base-styles.css">
    <link rel="stylesheet"
          href="../styles/accounts/account-nav.css">
    <link rel="stylesheet"
          href="../styles/accounts/records.css">
    <link rel="stylesheet"
          href="../styles/accounts/filters.css">
    <link rel="stylesheet"
          href="../styles/accounts/orders.css">
    <link rel="icon"
          href="../images/favicon.svg">

    <script src="../scripts/jquery-3.7.1.min.js"></script>

    <title>
        Admin
    </title>
</head>
<body class="account">
    <div class="loader">
        <div class="loader-inner">
            <div class="loader-line-wrap">
                <div class="loader-line"></div>
            </div>
            <div class="loader-line-wrap">
                <div class="loader-line"></div>
            </div>
            <div class="loader-line-wrap">
                <div class="loader-line"></div>
            </div>
            <div class="loader-line-wrap">
                <div class="loader-line"></div>
            </div>
            <div class="loader-line-wrap">
                <div class="loader-line"></div>
            </div>
        </div>
    </div>

    <nav class="container">
        <div class="row nav">
            <div class="col-2 col-sm-6 logo">
                <img class="logo_size"
                     src="../images/favicon.svg"
                     alt="icon">
            </div>

            <h2 class="heading"
                data-admin-heading>
                Администратор
            </h2>
        </div>
    </nav>

    <main class="container account__container">
        <nav class="account-nav"
             data-admin-nav>
            <button class="account-nav__content"
                    type="button">
                <img class="account-nav__user account-nav__user_active-status"
                     src="../images/admin/statistics.svg"
                     alt="Статистика">

                <p class="account-nav_font account-nav_active-status">
                    Статистика
                </p>
            </button>

            <button class="account-nav_font account-nav__content"
                    type="button">
                <img class="account-nav__user account-nav__user_active-status"
                     src="../images/admin/info.svg"
                     alt="О нас">

                <p class="account-nav_font account-nav_active-status">
                    О нас
                </p>
            </button>

            <button class="account-nav_font account-nav__content"
                    type="button">
                <img class="account-nav__user account-nav__user_active-status"
                     src="../images/admin/crm.svg"
                     alt="CRM">

                <p class="account-nav_font account-nav_active-status">
                    CRM
                </p>
            </button>

            <button class="account-nav_font account-nav__content"
                    type="button">
                <img class="account-nav__user account-nav__user_active-status"
                     src="../images/admin/portfolio.svg"
                     alt="Портфолио">

                <p class="account-nav_font account-nav_active-status">
                    Портфолио
                </p>
            </button>

            <button class="account-nav_font account-nav__content"
                    type="button">
                <img class="account-nav__user account-nav__user_active-status"
                     src="../images/accounts/nav/camera.svg"
                     alt="Записи">

                <p class="account-nav_font account-nav_active-status">
                    Записи
                </p>
            </button>

            <a class="account-nav_font account-nav__content"
               href="index.php"
               type="button">
                <img class="account-nav__user account-nav__user_active-status"
                     src="../images/admin/exit.svg"
                     alt="Записи">

                <p class="account-nav_font account-nav_active-status">
                    Выход
                </p>
            </a>
        </nav>

        <section class="admin-panel admin-panel_bg">
            <div class="admin-panel__filters-block">
                <div class="admin-panel__count-recording">
                    <h5 class="admin-panel__count-recording_heading">
                        Записи
                    </h5>

                    <p class="admin-panel__count-recording_font">
                        Найдено: 16
                    </p>
                </div>

                <div class="admin-panel__input-container">
                    <div class="admin-panel__fieldset">
                        <label for="id"
                               class="admin-panel__fieldset_font">
                            ID записи
                        </label>

                        <input class="admin-panel__input"
                               id="id"
                               name="id"
                               type="text">
                    </div>

                    <div class="admin-panel__fieldset">
                        <label for="customer"
                               class="admin-panel__fieldset_font">
                            Заказчик
                        </label>

                        <input class="admin-panel__input"
                               id="customer"
                               name="customer"
                               type="text">
                    </div>

                    <div class="admin-panel__fieldset">
                        <label for="style"
                               class="admin-panel__fieldset_font">
                            Стиль
                        </label>

                        <select class="admin-panel__input"
                                name="style"
                                id="style">
                            <option value=""
                                    disabled>
                                Все
                            </option>

                            <option value="studio">
                                Студийная съемка
                            </option>

                            <option value="water">
                                Подводная съемка
                            </option>

                            <option value="field-shooting">
                                Выездная съемка
                            </option>
                        </select>

                        <img class="admin-panel__input_arrow"
                             src="../images/admin/arrow.svg"
                             alt="arrow">
                    </div>

                    <div class="admin-panel__fieldset">
                        <label for="date"
                               class="admin-panel__fieldset_font">
                            Сортировка
                        </label>

                        <input class="admin-panel__input"
                               id="date"
                               name="date"
                               type="datetime-local">

                        <img class="admin-panel__input_arrow"
                             src="../images/admin/arrow.svg"
                             alt="arrow">
                    </div>
                </div>

                <div class="admin-panel__buttons-box">
                    <button class="admin-panel__button admin-panel__button_appearance">
                        Отчёт
                    </button>

                    <button class="admin-panel__button admin-panel__button_appearance">
                        Найти
                    </button>
                </div>
            </div>

            <div class="orders-data">
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

                <div class="orders-data__order">
                    <p class="orders-data__cell orders-data__cell_font">
                        6
                    </p>

                    <p class="orders-data__cell orders-data__cell_font">
                        Пройдена
                    </p>

                    <select class="orders-data__cell orders-data__cell_font orders-data__cell_delete"
                            id="6"
                            name="">
                        <option value="completed">
                            Пройдена
                        </option>

                        <option value="planned">
                            Запланирована
                        </option>
                    </select>

                    <p class="orders-data__cell orders-data__cell_font">
                        goosh.r@mail.ru
                    </p>

                    <p class="orders-data__cell orders-data__cell_font">
                        Студийная
                    </p>

                    <p class="orders-data__cell orders-data__cell_font">
                        23.03.23 16:00
                    </p>

                    <p class="orders-data__cell orders-data__cell_font">
                        50.000
                    </p>
                </div>

                <div class="orders-data__order">
                    <p class="orders-data__cell orders-data__cell_font">
                        6
                    </p>

                    <p class="orders-data__cell orders-data__cell_font">
                        Пройдена
                    </p>

                    <select class="orders-data__cell orders-data__cell_font orders-data__cell_delete"
                            id="6"
                            name="">
                        <option value="completed">
                            Пройдена
                        </option>

                        <option value="planned">
                            Запланирована
                        </option>
                    </select>

                    <p class="orders-data__cell orders-data__cell_font">
                        goosh.r@mail.ru
                    </p>

                    <p class="orders-data__cell orders-data__cell_font">
                        Студийная
                    </p>

                    <p class="orders-data__cell orders-data__cell_font">
                        23.03.23 16:00
                    </p>

                    <p class="orders-data__cell orders-data__cell_font">
                        50.000
                    </p>
                </div>

                <div class="orders-data__order">
                    <p class="orders-data__cell orders-data__cell_font">
                        6
                    </p>

                    <p class="orders-data__cell orders-data__cell_font">
                        Пройдена
                    </p>

                    <select class="orders-data__cell orders-data__cell_font orders-data__cell_delete"
                            id="6"
                            name="">
                        <option value="completed">
                            Пройдена
                        </option>

                        <option value="planned">
                            Запланирована
                        </option>
                    </select>

                    <p class="orders-data__cell orders-data__cell_font">
                        goosh.r@mail.ru
                    </p>

                    <p class="orders-data__cell orders-data__cell_font">
                        Студийная
                    </p>

                    <p class="orders-data__cell orders-data__cell_font">
                        23.03.23 16:00
                    </p>

                    <p class="orders-data__cell orders-data__cell_font">
                        50.000
                    </p>
                </div>

                <div class="orders-data__order">
                    <p class="orders-data__cell orders-data__cell_font">
                        6
                    </p>

                    <p class="orders-data__cell orders-data__cell_font">
                        Пройдена
                    </p>

                    <select class="orders-data__cell orders-data__cell_font orders-data__cell_delete"
                            id="6"
                            name="">
                        <option value="completed">
                            Пройдена
                        </option>

                        <option value="planned">
                            Запланирована
                        </option>
                    </select>

                    <p class="orders-data__cell orders-data__cell_font">
                        goosh.r@mail.ru
                    </p>

                    <p class="orders-data__cell orders-data__cell_font">
                        Студийная
                    </p>

                    <p class="orders-data__cell orders-data__cell_font">
                        23.03.23 16:00
                    </p>

                    <p class="orders-data__cell orders-data__cell_font">
                        50.000
                    </p>
                </div>

                <div class="orders-data__order">
                    <p class="orders-data__cell orders-data__cell_font">
                        6
                    </p>

                    <p class="orders-data__cell orders-data__cell_font">
                        Пройдена
                    </p>

                    <select class="orders-data__cell orders-data__cell_font orders-data__cell_delete"
                            id="6"
                            name="">
                        <option value="completed">
                            Пройдена
                        </option>

                        <option value="planned">
                            Запланирована
                        </option>
                    </select>

                    <p class="orders-data__cell orders-data__cell_font">
                        goosh.r@mail.ru
                    </p>

                    <p class="orders-data__cell orders-data__cell_font">
                        Студийная
                    </p>

                    <p class="orders-data__cell orders-data__cell_font">
                        23.03.23 16:00
                    </p>

                    <p class="orders-data__cell orders-data__cell_font">
                        50.000
                    </p>
                </div>

                <div class="orders-data__order">
                    <p class="orders-data__cell orders-data__cell_font">
                        6
                    </p>

                    <p class="orders-data__cell orders-data__cell_font">
                        Пройдена
                    </p>

                    <select class="orders-data__cell orders-data__cell_font orders-data__cell_delete"
                            id="6"
                            name="">
                        <option value="completed">
                            Пройдена
                        </option>

                        <option value="planned">
                            Запланирована
                        </option>
                    </select>

                    <p class="orders-data__cell orders-data__cell_font">
                        goosh.r@mail.ru
                    </p>

                    <p class="orders-data__cell orders-data__cell_font">
                        Студийная
                    </p>

                    <p class="orders-data__cell orders-data__cell_font">
                        23.03.23 16:00
                    </p>

                    <p class="orders-data__cell orders-data__cell_font">
                        50.000
                    </p>
                </div>

                <div class="orders-data__order">
                    <p class="orders-data__cell orders-data__cell_font">
                        6
                    </p>

                    <p class="orders-data__cell orders-data__cell_font">
                        Пройдена
                    </p>

                    <select class="orders-data__cell orders-data__cell_font orders-data__cell_delete"
                            id="6"
                            name="">
                        <option value="completed">
                            Пройдена
                        </option>

                        <option value="planned">
                            Запланирована
                        </option>
                    </select>

                    <p class="orders-data__cell orders-data__cell_font">
                        goosh.r@mail.ru
                    </p>

                    <p class="orders-data__cell orders-data__cell_font">
                        Студийная
                    </p>

                    <p class="orders-data__cell orders-data__cell_font">
                        23.03.23 16:00
                    </p>

                    <p class="orders-data__cell orders-data__cell_font">
                        50.000
                    </p>
                </div>
            </div>

            <div class="orders-data__button-box">
                <button class="orders-data__button orders-data__button_appearance">
                    Редактировать
                </button>
            </div>
        </section>
    </main>

    <script src="../scripts/preloader.js"></script>
    <script src="../scripts/accounts/filter-orders.js"></script>
    <script src="../scripts/accounts/change-status.js"></script>
</body>
</html>