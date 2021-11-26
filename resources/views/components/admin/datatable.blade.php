    @if($modelName === "promoCode")<a href="{{route("promocode.create")}}" type="button" class="btn btn-primary mt-3 mb-1">Добавить промокод</a>@endif
    @if($modelName === "User")<a href="{{route("users.create")}}" type="button" class="btn btn-primary mt-3 mb-1">Создать пользователя</a>@endif

<hr>
<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
    <tr>
        @foreach($tableTh as $th)
            <th>{{$th}}</th>
        @endforeach
    </tr>
    </thead>
    <tbody>
    @foreach($date as $element)
    <tr>

        @if($modelName === "promoCode")
        <td>{{$element->server}}</td>
        <td>{{$element->code}}</td>
        <td>{{$element->prize}}</td>
        <td>{{$element->date}}</td>
        @endif

        @if($modelName === "User")
            <td>{{$element->name}}</td>
            <td>{{$element->email}}</td>
            <td>{{$element->created_at}}</td>
            <td>{{$element->updated_at}}</td>
        @endif


        <td>
            <div class="btn-group" role="group" aria-label="Basic outlined example">
                    @if($modelName === "promoCode")<form method="POST" action="{{route("promocode.destroy", $element)}}">@endif
                    @if($modelName === "User")<form method="POST" action="{{route("users.destroy", $element)}}">@endif
                        @csrf
                        @method("DELETE")
                        <button  type="submit" class="btn btn-danger">Удалить</button>
                        @if($modelName === "promoCode")
                            <a href="{{route("promocode.edit", $element)}}" type="button" class="btn btn-warning">Редактировать</a>
                        @endif
                    </form>
            </div>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>

