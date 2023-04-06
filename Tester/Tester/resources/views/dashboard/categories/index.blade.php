<link rel="stylesheet" href="/css/categories.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
@php
    // dd($categories);
@endphp
<main>
    <div class="container bg-trasparent my-4 p-3">
        <div class="row">
            <div class="col-md-12">
                <a href="/products">Products</a>

                <div class="card m-b-30">
                    <div class="card-header">                                
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h5 class="card-title mb-0">Category List</h5>
                            </div>
                            <div class="col-4">
                                <ul class="list-inline-group text-right mb-1 pl-0">
                                    <li class="list-inline-item mr-0 font-12"><i class="feather icon-more-vertical- font-20 text-primary"></i></li>
                                </ul>                                        
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="product-file-type">
                            <ul class="list-unstyled">
                                @foreach ($categories as $category)
                                    <li class="media mb-3">
                                        <div class="media-body">
                                        <a href="report/show/{{ $category->nama_kategori }}">
                                            <h5 class="font-16 mb-1">{{ $category->nama_kategori }}<i class="feather icon-download-cloud float-right"></i></h5>
                                        </a>
                                        </div>
                                    </li>
                                    <hr class="my-12 mt1"/>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
