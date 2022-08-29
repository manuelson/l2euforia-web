@foreach ($chars['message'] ?? '' as $item)
    <a href="admin_items?page=1&owner_id={{$item['charId']}}&type=INVENTORY">Show inventory</a>
    <a href="admin_items?page=1&owner_id={{$item['charId']}}&type=WAREHOUSE">Show Warehouse</a>
    <a href="admin_items?page=1&owner_id={{$item['charId']}}&type=PAPERDOLL">Show Equiped</a>

    <div class="new" style="background:grey;padding:10px 10px 10px 10px;color:white; margin-bottom:5px">
        <img src="" />
        <div class="title">Name: {{$item['char_name']}}</div>
        <div class="title">Lvl: {{$item['level']}}</div>
    </div>

@endforeach
