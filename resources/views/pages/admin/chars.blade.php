    <!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>L2Euforia admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
<div class="content">
<div class="row">

    <ul class="nav">
        <li class="nav-item">
            <a href="/" class="nav-link"><< Go website</a>
        </li>
    </ul>

@foreach ($chars['message'] ?? '' as $item)

    <div class="card" style="width: 15rem; @if($item['accesslevel'] == 8) background:#AD9A1E;color:white !important @endif">
        <div class="card-body">
            <h5 class="card-title">{{$item['char_name']}}</h5>
            <h6 class="card-subtitle mb-2 text-muted" style="@if($item['accesslevel'] == 8) color:white !important @endif">@if($item['accesslevel'] == 8) GameMaster - @endif Lvl.{{$item['level']}}</h6>
            <h7 class="card-title">Last access: {{date('m/d/Y H:i:s', $item['lastAccess'])}}</h7><br/>
            <a href="admin_items?page=1&name={{$item['char_name']}}&owner_id={{$item['charId']}}&type=INVENTORY" class="card-link">Show inventory</a><br/>
            <a href="admin_items?page=1&name={{$item['char_name']}}&owner_id={{$item['charId']}}&type=PAPERDOLL" class="card-link">Show Equipped</a><br/>
            <a href="admin_items?page=1&name={{$item['char_name']}}&owner_id={{$item['charId']}}&type=WAREHOUSE" class="card-link">Show Warehouse</a>
        </div>
    </div>
@endforeach
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>
