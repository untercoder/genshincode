
<style>
    .form_section {
        padding: 3%;
        margin: auto;
    }
</style>

<section class = "form_section">
    <form>
        <div class="form-group">
            <label for="exampleFormControlInput1">Заголовок</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" >
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Тело статьи</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        <div class="form-group">
            <label for="exampleFormControlFile1">Загрузить фотографию</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success">Добавить новость</button>
        </div>

        <div class="form-group">
            <a href="{{route('news.index')}}" type="button" class="btn btn-warning">Отмена</a>
        </div>
    </form>
</section>

