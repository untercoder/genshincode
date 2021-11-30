<style>
    .header-new {
        padding-top: 70px;
    }
</style>
<section class="header-new">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('actualCodes.show')}}">Главная</a></li>
            <li class="breadcrumb-item"><a href="{{route('gn-news.index')}}">Список новостей</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{$news->header}}</li>
        </ol>
    </nav>
</section>



