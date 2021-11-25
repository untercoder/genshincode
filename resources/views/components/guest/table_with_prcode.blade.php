<thead>
<tr>
    <th>Сервер</th>
    <th>Промокод</th>
    <th>Нагрда</th>
    <th>Срок действия</th>
</tr>
</thead>
<tbody>
@foreach($promocodes as $promocode)
    <tr>
        <td>{{$promocode->server}}</td>
        <td>{{$promocode->code}}</td>
        <td>{{$promocode->prize}}</td>
        <td>{{$promocode->date}}</td>
    </tr>
@endforeach
</tbody>
