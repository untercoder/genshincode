
<style>
    .form_section {
        padding: 3%;
        margin: auto;
    }
</style>

<section class = "form_section">
    <form method="POST" action="{{route("news.store")}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">Заголовок</label>
            <input type="text" name="header" class="form-control" id="exampleFormControlInput1" >
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Тело статьи</label>
            <textarea class="form-control" name = "text" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

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

