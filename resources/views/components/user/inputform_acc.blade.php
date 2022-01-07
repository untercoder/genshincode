<style>
    .padding-b {
        padding-bottom: 20px;
    }
    .contact-padding{
        padding-top: 10px;
    }
</style>

<form method="POST" action="{{route('accounts.store')}}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        @error('header')
        <div class="alert alert-danger" role="alert">
            <li>{{$message}}</li>
        </div>
        @enderror
        <label for="exampleFormControlInput1">Краткое описание аккаунта</label>
        <input type="text" name="header" value="{{old('header')}}"
               class="form-control" id="exampleFormControlInput1">
    </div>

    <div class="form-group">
        @error('description')
        <div class="alert alert-danger" role="alert">
            <li>{{$message}}</li>
        </div>
        @enderror
        <label for="exampleFormControlTextarea1">Полное описание</label>
        <textarea class ="form-control" name="description" id="exampleFormControlTextarea1"
                  rows="3">{{old('description')}}</textarea>
    </div>

    <div class="form-group">
        <label for="select_server">На каком сервере аккаунт?</label>
        <select class="form-control" name="server" id="select_server">
            <option>Europe</option>
            <option>Asia</option>
            <option>America</option>
            <option>SAR(Тайвань, Гонконг, Макао)</option>
        </select>
    </div>

    <div class="form-group">
        <label for="custom-file">Загрузить скриншот</label>
        <div class="alert alert-warning" role="alert">
            >> На скриншоте должен явно демонстрироваться товар.
        </div>
        @error('img')
        <div class="alert alert-danger" role="alert">
            <li>{{$message}}</li>
        </div>
        @enderror
        <div class="custom-file">
            <input type="file" class="custom-file-input" name="img" id="customFile">
            <label class="custom-file-label" for="customFile">Выбрать скриншот</label>
        </div>
    </div>

    <div class="form-group">
        @error('price')
        <div class="alert alert-danger" role="alert">
            <li>{{$message}}</li>
        </div>
        @enderror
        <label for="exampleFormControlInput1">Цена - &#x20bd</label>
        <input type="number" name="price" value="{{old('price')}}"
               class="form-control" id="exampleFormControlInput1">
    </div>

    <div class="form-group">
        <label for="contact">Введите данные для контакта с покупателем.</label>
        <div class="alert alert-warning" role="alert">
            >> Хотя бы одно поле должно быть заполнено.
        </div>
        <hr>
        <div class="contact">
            <div>
                <label for="telegramContact">Telegram:</label>
                <input type="text" name="telegram" value="{{old('telegram')}}"
                       class="form-control " id="telegramContact">
            </div>
            <div class="contact-padding">
                <label for="watsapContact">WhatSapp:</label>
                <input type="text" name="whatsapp" value="{{old('whatsapp')}}"
                       class="form-control " id="watsapContact">
            </div>
            <div class="contact-padding">
                <label for="emailContact">Email:</label>
                <input type="text" name="email" value="{{old('email')}}"
                       class="form-control " id="emailContact">
                <div class="form-check mt-1">
                    <input class="form-check-input" name="useUserEmail" type="checkbox" value="true" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Использовать Email указанный при регистрации.
                    </label>
                </div>
            </div>

            <div class="contact-padding">
                <label for="phoneContact">Телефон:</label>
                <input type="text" name="phone" value="{{old('phone')}}"
                       class="form-control " id="phoneContact">
            </div>

        </div>
    </div>
    <div class="button-group padding-b">
        <button type="submit" class="btn btn-success ">Опубликовать обьявление</button>
    </div>

    @if($errors->any())
    <div class="alert alert-danger" role="alert">
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </div>
    @endif

</form>

