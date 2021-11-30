<style>
    .header-new {
        padding-top: 70px;
    }
    .card-section {
        padding-top: 10px;
    }
</style>
<section class="header-new">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('actualCodes.show')}}">Главная</a></li>
            <li class="breadcrumb-item active" aria-current="page">Список новостей</li>
        </ol>
    </nav>
</section>

@foreach($news as $new)
<section class="card-section">
    <div class="card" style="width: auto;">
        <div class="card-body">
            <h5 class="card-title">{{$new->header}}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{$new->created_at}}</h6>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="{{route('gn-news.show', $new)}}" class="card-link">Прочитать</a>
        </div>
    </div>
</section>
@endforeach










