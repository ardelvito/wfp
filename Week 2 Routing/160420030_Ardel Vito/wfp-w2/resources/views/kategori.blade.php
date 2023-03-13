{{-- @php
    dd($categories);
@endphp --}}
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="/css/styles.css" rel="stylesheet">
</head>


    <div class="site-wrapper">
        <div class="site-wrapper-inner">
            <div class="container">
                <div class="row">
                    @foreach ($categories as $category)
                        <div class="col-md-4 mb-3">
                            <div class="card" style="width: 18rem;">
                            <img src="https://picsum.photos/300" class="card-img-top" alt="foto{{ $category['title'] }}">
                            <div class="card-body text-dark">
                                <h5 class="card-title">{{ $category['title'] }}</h5>
                                <p class="card-text">{{ $category['description'] }}.</p>
                                <a href="/kategori/{{ $category['title'] }}" class="btn btn-primary">Go somewhere</a>
                            </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="site-wrapper">

        <div class="site-wrapper-inner">


        {{-- <div class="container">

            <div class="masthead clearfix">
            <div class="container inner">
                <h3 class="masthead-brand">Cover</h3>
                <nav>
                <ul class="nav masthead-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">Features</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
                </nav>
            </div>
            </div>

            <div class="inner cover">
            <h1 class="cover-heading">Cover your page.</h1>
            <p class="lead">Cover is a one-page template for building simple and beautiful home pages. Download, edit the text, and add your own fullscreen background photo to make it your own.</p>
            <p class="lead">
                <a href="#" class="btn btn-lg btn-default">Learn more</a>
            </p>
            </div>

        </div> --}}

        </div>

    </div>