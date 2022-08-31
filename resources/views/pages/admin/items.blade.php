@foreach ($items ?? '' as $item)
    <div class="new">
        <img src="" />
        <div class="title">Name: {{$item['item']['name']}}</div>
        <div class="title">Grade: {{$item['grade']}}</div>
        <div class="title">Grade: {{$item['qty']}}</div>
        <img src="img/icons/{{$item['icon']}}.png" />
    </div>
@endforeach
