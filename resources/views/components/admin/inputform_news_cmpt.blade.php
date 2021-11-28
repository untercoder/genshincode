
<style>
    .form_section {
        padding: 3%;
        margin: auto;
    }
</style>

<section class = "form_section">
    <form method="POST"
          @if(isset($news))
          action="{{route("news.update", $news)}}"
          @else
          action="{{route("news.store")}}"
          @endif
          enctype="multipart/form-data">
        @isset($news)@method("PUT")@endisset
        @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">Заголовок</label>
            <input type="text" name="header" value="{{isset($news)?$news->header : null}}"
                   class="form-control" id="exampleFormControlInput1" >
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Тело статьи</label>
            <textarea class="form-control" name = "text" id="exampleFormControlTextarea1" rows="3">{{isset($news)?$news->body_text : null}}</textarea>
        </div>

        @if(isset($news))
            <div class="text-center">
                <h2>Фото в статье</h2>
                <img src="{{\Illuminate\Support\Facades\Storage::url($news->img_path)}}" class="img-thumbnail" alt="...">
            </div>
        @endif

        <div class="form-group">
            <label for="exampleFormControlFile1">Загрузить фотографию</label>
            <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success">Добавить новость</button>
        </div>

        <div class="form-group">
            <a href="{{route('news.index')}}" type="button" class="btn btn-warning">Отмена</a>
        </div>
    </form>
</section>

