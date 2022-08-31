<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

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
