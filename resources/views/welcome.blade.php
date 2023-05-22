<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Gallery</title>
    <link rel="stylesheet" href="/css/app.css">
</head>

<body>
    <h1 class="text-center m-5">Gallery with Laravel</h1>
    {{-- <?php
    print_r($list);
    ?>
    @foreach ($list as $key => $filename)
        {{ $filename }}
    @endforeach --}}

    <div class="container">
        <div class="row g-3 m-3">

            @foreach ($list as $itemkey => $filename)
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card mb-3 h-100">
                        <a href="/images/{{ $filename }}" data-lightbox="image-1"
                            data-title="{{ config('images.' . $itemkey . '.description') }}">
                            <img src="/images/{{ $filename }}" class="card-img-top" height=200
                                alt="{{ config('images.' . $itemkey . '.description') }}">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">{{ config('images.' . $itemkey . '.title') }}</h5>
                            <p class="card-text">{{ config('images.' . $itemkey . '.description') }}</p>
                            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small>
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    </div>

    <script src="/js/app.js"></script>
</body>

</html>
