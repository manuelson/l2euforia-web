<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

@foreach ($chars['message'] ?? '' as $item)


    <div class="m-2 card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{$item['char_name']}}</h5>
            <h6 class="card-subtitle mb-2 text-muted">Lvl.{{$item['level']}}</h6>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="admin_items?page=1&owner_id={{$item['charId']}}&type=INVENTORY" class="card-link">Show inventory</a>
            <a href="admin_items?page=1&owner_id={{$item['charId']}}&type=PAPERDOLL" class="card-link">Show Equipped</a>
            <a href="admin_items?page=1&owner_id={{$item['charId']}}&type=WAREHOUSE" class="card-link">Show Warehouse</a>
        </div>
    </div>


@endforeach

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>


<style>
    body{
        margin: 5px 0;
    }

    .card{
        border-radius: 8px;
        border: 1px solid #cccccc;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 5px;
        box-sizing: border-box;
        width: 200px;
        height: 200px;
        transition: all linear 200ms;
    }
    .card:hover{
        transform: scale(1.1);
        transition: all linear 200ms;
        z-index: 1;
        box-shadow: 1px 1px 10px rgba(0,0,0,.3);
        cursor: pointer;
    }
</style>
