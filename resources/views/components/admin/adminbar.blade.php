<style>
    .adminbar {
        padding-top: 6%;
    }
</style>
<section class="adminbar">
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="{{$modelName === "promoCode" ? 'nav-link active' : 'nav-link' }}" href="{{route('dashboard')}}">Промокоды</a>
        </li>
        <li class="nav-item">
            <a class="{{$modelName === "User" ? 'nav-link active' : 'nav-link' }}" href="{{route('users.index')}}">Пользователи</a>
        </li>
        <li class="nav-item">
            <a class="{{$modelName === "News" ? 'nav-link active' : 'nav-link' }}" href="{{route('news.index')}}">Новости</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Аккаунты</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Услуги</a>
        </li>
    </ul>
</section>
