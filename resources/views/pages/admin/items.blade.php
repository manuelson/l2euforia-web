<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>L2Euforia admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>



<br><br>

<main role="main" class="container">

    <ul class="nav">
        <li class="nav-item">
            <a href="admin_chars" class="nav-link"><< Go back</a>
        </li>
        <li class="nav-item">
            <a href="admin_items?page=1&name={{ app('request')->input('name') }}&owner_id={{ app('request')->input('owner_id') }}&type=INVENTORY" class="nav-link">Show inventory</a><br/>
        </li>
        <li class="nav-item">
            <a href="admin_items?page=1&{{ app('request')->input('name') }}&owner_id={{ app('request')->input('owner_id') }}&type=PAPERDOLL" class="nav-link">Show Equipped</a><br/>
        </li>
        <li class="nav-item">
            <a href="admin_items?page=1&{{ app('request')->input('name') }}&owner_id={{ app('request')->input('owner_id') }}&type=WAREHOUSE" class="nav-link">Show Warehouse</a>
        </li>
    </ul>

    <div class="my-3 p-3 bg-white rounded shadow-sm">
        <h6 class="border-bottom border-gray pb-2 mb-0">{{ app('request')->input('name') }} Items view</h6>

        @foreach ($items ?? '' as $item)

            <div class="media text-muted pt-3">
                <img src="img/icons/{{$item['icon']}}.png" alt="32x32" class="mr-2 rounded" style="width: 32px; height: 32px;" data-holder-rendered="true">
                <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray" style="padding-left:10px">
                    @if($item['item']['type'] == 'Weapon' || $item['item']['type'] == 'Armor')
                        <strong class="d-block text-gray-dark">{{$item['item']['name']}} (+{{$item['item']['enchant']}}) - (<span style="color:#AD381E">{{$item['grade']}}</span>)<span style="float:right">{{$item['item']['qty']}}</span></strong>
                    @else
                        @if($item['item']['type'] == 'EtcItem')
                            <strong class="d-block text-gray-dark">{{$item['item']['name']}} <span style="float:right">{{$item['item']['qty']}}</span></strong>
                        @else
                            <strong class="d-block text-gray-dark">{{$item['item']['name']}} (+{{$item['item']['enchant']}}) - (<span style="color:#AD381E">{{$item['grade']}}</span>)<span style="float:right">{{$item['item']['qty']}}</span></strong>
                       @endif
                    @endif
                </p>
            </div>
        @endforeach



    </div>

</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
<style>
    html,
    body {
        overflow-x: hidden; /* Prevent scroll on narrow devices */
    }

    body {
        padding-top: 56px;
    }

    @media (max-width: 991.98px) {
        .offcanvas-collapse {
            position: fixed;
            top: 56px; /* Height of navbar */
            bottom: 0;
            left: 100%;
            width: 100%;
            padding-right: 1rem;
            padding-left: 1rem;
            overflow-y: auto;
            visibility: hidden;
            background-color: #343a40;
            transition-timing-function: ease-in-out;
            transition-duration: .3s;
            transition-property: left, visibility;
        }
        .offcanvas-collapse.open {
            left: 0;
            visibility: visible;
        }
    }

    .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
    }

    .nav-scroller .nav {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: nowrap;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        color: rgba(255, 255, 255, .75);
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
    }

    .nav-underline .nav-link {
        padding-top: .75rem;
        padding-bottom: .75rem;
        font-size: .875rem;
        color: #6c757d;
    }

    .nav-underline .nav-link:hover {
        color: #007bff;
    }

    .nav-underline .active {
        font-weight: 500;
        color: #343a40;
    }

    .text-white-50 { color: rgba(255, 255, 255, .5); }

    .bg-purple { background-color: #6f42c1; }

    .lh-100 { line-height: 1; }
    .lh-125 { line-height: 1.25; }
    .lh-150 { line-height: 1.5; }
    .media {
        display: flex;
        align-items: flex-start;
    }

    .media-body {
        flex: 1;
    }

</style>
</html>
