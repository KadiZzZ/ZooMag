<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <title>Lovely Friends</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style3.css">
    <link rel="stylesheet" href="./css/QA.css">
</head>

<body>

<div class="container">
    <header class="header">
        <div class="wrapper">
            <div class="header_wrapper">
                <div class="header_logo">
                    <img src="./img/logo.svg" alt="" class="header">
                </div>

                <nav class="header_nav">
                    <ul class="header_list">
                        <li class="header_item">
                            <a href="index.php" class="header_link">Главная</a>
                        <li class="header_item">
                            <a href="katalog.php" class="header_link">Каталог</a>
                        <li class="header_item">
                            <a href="QA.php" class="header_link">О нас</a>
                        <li class="header_item">
                            <a href="#!" class="header_link">Контакты</a>
                        <li class="header_item">
                            <a href="#!" class="header_link2">&nbsp;&nbsp;  +7 927 986 82 00 </a>
                        <li class="header_item">
                            <a href="#!" class="header_link2">&nbsp;&nbsp;&nbsp;  0 р. </a>
                    </ul>

                </nav>
                <div class="call_logo">
                    <img src="./img/image%201.png" alt="" class="header">
                </div>
                <div class="cart_logo">
                    <img src="./img/image%205.png" alt="" class="header">
                </div>
            </div>
        </div>


    </header>
    <main class="main">
        <section class="intro">
            <div class="wrapper"
            <div class="katalog_txt">
            </div>

            <div class="footer">
                <div class="wrapper"
                <div class="footer">
                    <img src="./img/footer.png" alt="" class="header">
                </div>
            </div>

    <div class="form-container form__wrapper">
        <!-- Форма обратной связи -->
        <form id="feedback-form" action="/QA.php" enctype="multipart/form-data" novalidate>
            <div class="form-row">
                <!-- Имя пользователя -->
                <div class="form-group">
                    <label for="name" class="control-label">Имя</label>
                    <input id="name" type="text" name="name" class="form-control" value="" placeholder="Имя" minlength="2"
                           maxlength="30" required="required">
                    <div class="invalid-feedback"></div>
                </div>
                <!-- Email пользователя -->
                <div class="form-group">
                    <label for="email" class="control-label">Email-адрес</label>
                    <input id="email" type="email" name="email" required="required" class="form-control" value=""
                           placeholder="Email-адрес">
                    <div class="invalid-feedback"></div>
                </div>
            </div>
            <!-- Сообщение пользователя -->
            <div class="form-group">
                <label for="message" class="control-label">Сообщение (не менее 20 символов)</label>
                <textarea id="message" name="message" class="form-control" rows="3"
                          placeholder="Сообщение (не менее 20 символов)" minlength="20" maxlength="500"
                          required="required"></textarea>
                <div class="invalid-feedback"></div>
            </div>



            <!-- Пользовательское солашение -->
            <div class="form-group form-agree form-check">
                <input class="form-check-input" type="checkbox" name="agree" id="agree" required value="true">
                <label class="form-check-label" for="agree">Нажимая кнопку, я принимаю условия <a href="#">Пользовательского
                        соглашения</a> и даю своё согласие на обработку моих персональных данных</label>
                <div class="invalid-feedback"></div>
            </div>

            <!-- Сообщение об ошибке -->
            <div class="form-error form-error_hide">Исправьте данные и отправьте форму ещё раз.</div>

            <!-- Кнопка для отправки формы на сервер -->
            <div class="form-submit">
                <button type="submit">Отправить сообщение</button>
            </div>

        </form>

        <!-- Сообщение об успешной отправки формы -->
        <div class="form-success form-success_hide">
            <div class="form-success__message">Форма успешно отправлена. Нажмите <button type="button"
                                                                                         class="form-success__btn">здесь</button>, если нужно отправить ещё одну форму.</div>
        </div>

    </div>

</div>

<script src="script.js"></script>
<script>
    /*
      attachMaxItems: 3,
      attachMaxFileSize: 128,
      attachExt: ['png', 'jpg']
    */

    const form = new ItcSubmitForm('form');

    // при получении ответа result="success" от сервера
    document.querySelector('form').addEventListener('success', (e) => {
        const el = e.target.closest('.form-container').querySelector('.form-success');
        el.classList.remove('form-success_hide');
    });

    // при клике на .form-success__btn
    document.querySelector('.form-success__btn').addEventListener('click', (e) => {
        form.reset();
        e.target.closest('.form-container').querySelector('.form-success').classList.add('form-success_hide');
    })
</script>

</body>

</html>

