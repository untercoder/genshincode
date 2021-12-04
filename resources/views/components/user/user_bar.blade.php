<style>
    .adminbar {
        padding-top: 70px;
    }
</style>
<section class="adminbar">
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="{{$modelName === "Account" ? 'nav-link active' : 'nav-link' }}" href="#">Аккаунты</a>
        </li>
        <li class="nav-item">
            <a class="{{$modelName === "Service" ? 'nav-link active' : 'nav-link' }}" href="#">Услуги</a>
        </li>

    </ul>
</section>
