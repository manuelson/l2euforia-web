@foreach ($items ?? '' as $item)
    <div class="new" style="background:grey;color:white;margin:10px 10px 10px 10px">
        <img src="" />
        <div class="title">Name: {{$item['item']['name']}}</div>
        <div class="title">Grade: {{$item['grade']}}</div>
        <div class="title">Qty: {{$item['item']['qty']}}</div>
        <img src="img/icons/{{$item['icon']}}.png" />
    </div>
@endforeach
