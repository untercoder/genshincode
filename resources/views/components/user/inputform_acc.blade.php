<style>
    .padding-b {
        padding-bottom: 20px;
    }

    .contact-padding {
        padding-top: 10px;
    }

    .header_form {
        padding-top: 70px;
    }
</style>

<section class="header_form">
    <h2>
        @if(isset($account))
            {{__("inputform_acc.header.update")}}
        @else
            {{__("inputform_acc.header.create")}}
        @endif
    </h2>
    <hr>
    <a href="{{route("accounts.index")}}" type="button" class="btn btn-primary"><i
            class="bi bi-arrow-left-circle"></i>{{__("inputform_acc.button.cancel")}}</a>
    <hr>
</section>

<form method="POST"
      @if(isset($account))
      action="{{route("accounts.update", $account)}}"
      @else
      action="{{route('accounts.store')}}"
      @endif
      enctype="multipart/form-data">
    @isset($account)@method("PUT")@endisset
    @csrf
    <div class="form-group">
        @error('header')
        <div class="alert alert-danger" role="alert">
            <li>{{$message}}</li>
        </div>
        @enderror
        <label for="exampleFormControlInput1">Краткое описание аккаунта</label>
        <input type="text" name="header" @if(old('header') !== null) value="{{old('header')}}"
               @else value="@isset($account){{$account->header}}@endisset" @endif
               class="form-control" id="exampleFormControlInput1">
    </div>

    <div class="form-group">
        @error('description')
        <div class="alert alert-danger" role="alert">
            <li>{{$message}}</li>
        </div>
        @enderror
        <label for="exampleFormControlTextarea1">Полное описание</label>
        @if(old('description') !== null)
            <textarea class="form-control" name="description" id="exampleFormControlTextarea1"
                      rows="3">{{old('description')}}</textarea>
        @else
            <textarea class="form-control" name="description" id="exampleFormControlTextarea1"
                      rows="3">@isset($account){{$account->description}}@endisset</textarea>
        @endif
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
        <input type="number" name="price" @if(old('price') !== null) value="{{old('price')}}"
               @else @isset($account)value="{{$account->price}}" @endisset @endif class="form-control"
               id="exampleFormControlInput1">
    </div>

    <div class="form-group">
        @error('telegram')
        <div class="alert alert-danger" role="alert">
            <li>{{__('messages.contacts.required')}}</li>
        </div>
        @enderror
        @error('email')
        <div class="alert alert-danger" role="alert">
            <li>{{__('messages.email.rule')}}</li>
        </div>
        @enderror
        <label for="contact">Введите данные для контакта с покупателем.</label>
        <div class="alert alert-warning" role="alert">
            >> Хотя бы одно поле должно быть заполнено.
        </div>
        <hr>
        <div class="contact">
            <div>
                <label for="telegramContact">Telegram:</label>
                <input type="text" name="telegram" @if(old('telegram')!==null) value="{{old('telegram')}}"
                       @else @isset($contacts) value="{{$contacts["telegram"]}}" @endisset @endif
                       class="form-control " id="telegramContact">
            </div>
            <div class="contact-padding">
                <label for="emailContact">Email:</label>
                <input type="text" name="email" @if(old('email') !== null)value="{{old('email')}}"
                       @else @isset($contacts)value="{{$contacts["email"]}}" @endisset @endif
                       class="form-control" id="emailContact">
                <div class="form-check mt-1">
                    <input class="form-check-input" name="useUserEmail" type="checkbox" value="true"
                           id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Использовать Email указанный при регистрации.
                    </label>
                </div>
            </div>

            <div class="contact-padding">
                <label for="phoneContact">Телефон:</label>
                <input type="text" name="phone" @if(old('phone') !== null) value="{{old('phone')}}"
                       @else @isset($contacts) value="{{$contacts["phone"]}}" @endisset @endif
                       class="form-control " id="phoneContact">
            </div>

        </div>
    </div>

    <div class="button-group padding-b">
        <button type="submit" class="btn btn-success ">
            @if(isset($account))
                {{__("inputform_acc.button.update")}}
            @else
                {{__("inputform_acc.button.create")}}
            @endif
        </button>
    </div>
</form>

