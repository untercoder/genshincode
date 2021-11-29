<style>
    .header-new {
        padding-top: 6%;
    }
</style>
<section class="header-new">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Новости</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{$news->header}}</li>
        </ol>
    </nav>
    <h1 class="display-6">{{$news->header}}</h1>
    <hr>
    <div class="text-center">
        <img width="600" height="500" src="{{\Illuminate\Support\Facades\Storage::url($news->img_path)}}" class="img-thumbnail" alt="...">
    </div>
</section>

