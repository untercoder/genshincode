<style>
    .card-section {
        padding-top: 10px;
    }
    .card-text {
        color: grey;
        text-overflow: ellipsis;
        overflow: hidden;
        white-space: nowrap;
        line-height: 16px;
    }
</style>
@if($accounts and $accounts->count())
    @foreach($accounts as $account)
    <section class="card-section">
        <div class="card" style="width: auto;">
            <div class="card-body">
                <h5 class="card-title">{{$account->header}}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{__("card_component.created_at").$account->created_at->format('d.m.y')}}</h6>
                <p class="card-text">{{$account->description}}</p>
                <div class="d-grid gap-2 d-md-block">
                    <form method="POST" action="{{route("accounts.destroy", $account)}}">
                        @csrf
                        @method("DELETE")
                        <a type="button" href="{{route('accounts.edit', $account)}}" class="btn btn-warning mt-1">Редактировать</a>
                        <a type="button" class="btn btn-primary mt-1">Посмотреть</a>
                        <button type="submit" class="btn btn-danger mt-1"><i class="bi bi-trash"></i>Удалить</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    @endforeach
@else
    <h5>{{__('card_component.no_accounts')}}</h5>
@endif

