<style>
    .padding-b {
        padding-bottom: 20px;
    }
</style>


<form method="POST" action="{{route('accounts.store')}}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="exampleFormControlInput1">Краткое описание аккаунта</label>
        <input type="text" name="header" value=""
               class="form-control" id="exampleFormControlInput1">
    </div>

    <div class="form-group">
        <label for="exampleFormControlTextarea1">Полное описание</label>
        <textarea class="form-control" name="description" id="exampleFormControlTextarea1"
                  rows="3"></textarea>
    </div>

    <div class="form-group">
        <label for="select_server">На каком сервере аккаунт?</label>
        <select class="form-control" name="server" id="select_server">
            <option>Europe</option>
            <option>Asia</option>
            <option>America</option>
        </select>
    </div>

    <div class="form-group">
        <label for="custom-file">Загрузить скриншот</label>
        <div class="alert alert-primary" role="alert">
            Нас скриншоте должен явно демонстрироваться товар.
        </div>
        <div class="custom-file">
            <input type="file" class="custom-file-input" name="img" id="customFile">
            <label class="custom-file-label" for="customFile">Выбрать сриншот</label>
        </div>
    </div>

    <div class="form-group">
        <label for="contact">Введите данные для контакта с покупателем.</label>
        <div class="alert alert-primary" role="alert">
            Хотя бы одно поле должно быть заполнено.
        </div>
        <hr>
        <div class="contact">
            <label for="telegramContact">Telegram:</label>
            <input type="text" name="telegram" value=""
                  class="form-control " id="telegramContact">
            <label for="watsapContact">WhatSapp:</label>
            <input type="text" name="whatsapp" value=""
                   class="form-control " id="watsapContact">
            <label for="emailContact">Email:</label>
            <input type="text" name="email" value=""
                   class="form-control " id="emailContact">
            <div class="form-check mt-1">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Использовать Email указанный при регистрации.
                </label>
            </div>
            <label for="phoneContact">Телефон:</label>
            <input type="text" name="phone" value=""
                   class="form-control " id="phoneContact">
        </div>
    </div>

    <div class="button-group padding-b">
        <button type="submit"
                class="btn btn-success ">Опубликовать обьявление</button>
    </div>
</form>

