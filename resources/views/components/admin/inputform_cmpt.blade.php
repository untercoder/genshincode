<form method="POST"
      @if(isset($promocode))
      action="{{route("promocode.update", $promocode)}}">
      @else
      action="{{route("promocode.store")}}">
      @endif

    @csrf
    @isset($promocode)@method("PUT")@endisset
    <div class="col mt-2">
        <div class="col">
            <h1>Данные промокода:</h1>
        </div>
        <div class="col">
            <input name="code" type="text" class="form-control" placeholder="Промокод"
                    value="{{isset($promocode)?$promocode->code : null}}"
                    aria-label="code">
        </div>
        <div class="col mt-3">
            <input name="prize" type="text" class="form-control" placeholder="Награда"
                   value="{{isset($promocode)?$promocode->prize : null}}"
                   aria-label="prize">
        </div>
        <div class="col mt-3">
            <input name="server" type="text" class="form-control" placeholder="Сервер"
                   value="{{isset($promocode)?$promocode->server : null}}"
                   aria-label="server">
        </div>
        <div class="col mt-3">
            <input name="date" type="text" class="form-control" placeholder="Срок действия"
                   value="{{isset($promocode)?$promocode->date : null}}"
                   aria-label="date">
        </div>
        <div class="col mt-3">
            <button type="submit" class="btn btn-success">Добавить промокод</button>
        </div>
        <div class="col mt-3">
            <a href="{{route('dashboard')}}" type="button" class="btn btn-warning">Отмена</a>
        </div>
    </div>
</form>
