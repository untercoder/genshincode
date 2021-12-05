<form method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="exampleFormControlInput1">Краткое описание аккаунта</label>
        <input type="text" name="header" value=""
               class="form-control" id="exampleFormControlInput1">
    </div>

    <div class="form-group">
        <label for="exampleFormControlTextarea1">Полное описание</label>
        <textarea class="form-control" name="text" id="exampleFormControlTextarea1"
                  rows="3"></textarea>
    </div>

    <div class="form-group">
        <label for="select_server">На каком сервере аккаунт?</label>
        <select class="form-control" id="select_server">
            <option>Default select</option>
        </select>
    </div>



    <div class="form-group">
        <label for="exampleFormControlFile1">Загрузить фотографию</label>
        <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
    </div>

    <div class="button-group">
        <button type="submit"
                class="btn btn-success">Опубликовать обьявление</button>
    </div>
</form>

