<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма заявки</title>
    @vite('resources/css/app.css')
</head>
<body>

<form action="{{route('form')}}", method="post">
    @csrf
    <div id="form-container">
        <div id="contact-form">
            <div>
                <label for="name">Имя:</label><br>
                <input type="text" id="name" name="name" placeholder="Введите имя"><br>
            </div>
            <div>
                <label for="phone">Телефон:</label><br>
                <input type="tel" id="phone" name="phone" placeholder="Введите номер телефона"><br>
            </div>
            <div>
                <label for="email">E-mail:</label><br>
                <input type="email" id="email" name="email" placeholder="Введите E-mail"><br>
            </div>
            <div>
                <label for="city">Город:</label><br>
                <input type="text" id="city" name="city" placeholder="Введите город"><br>
            </div>
            <div>
                <label for="service">Услуга:</label><br>
                <select id="service" name="service" required>
                    <option value="">--Выберите услугу--</option>
                    <option value="Диагностика">Диагностика</option>
                    <option value="Ремонт">Ремонт</option>
                </select><br>
            </div>
            <div>
                <label for="comment">Комментарий:</label><br>
                <textarea id="comment" name="comment" rows="5" placeholder="Ваш Комментарий..."></textarea><br>
            </div>
            <div>
                <button type="submit", id="send">Отправить</button>
            </div>
        </div>
    </div>
</form>

</body>
</html>
