<link rel="stylesheet" href="/css/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
@php
    // dd($products);
@endphp
<main>
    <div class="container-fluid bg-trasparent my-4 p-3" style="position: relative;"> 
        <a href="/categories">Categories</a>
        <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3"> 
            @foreach ($products as $product)
                <div class="col"> 
                    <div class="card h-100 shadow-sm"> 
                        <img src="{{ asset('images/'.$product->image.'.jpg') }}" class="card-img-top" alt="{{ $product->nama_kategori }}"> 
                        <div class="card-body"> 
                            <div class="clearfix mb-3"> 
                                <span class="float-start badge rounded-pill bg-primary">{{ $product->nama_produk }}</span> 
                                <span class="float-end price-hp">@currency( $product->harga_jual)</span> 
                            </div> 
                            <h6 class="card-title">
                                Kategori: {{ $product->Category->nama_kategori }}
                            </h6>
                            <h5 class="card-title">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam quidem eaque ut eveniet aut quis rerum. Asperiores accusamus harum ducimus velit odit ut. Saepe, iste optio laudantium sed aliquam sequi.
                            </h5> 
                            <div class="text-center my-4"> 
                                <a href="#" class="btn btn-warning">Detail Produk</a> 
                            </div> 
                        </div> 
                    </div> 
                </div>
                
                {{-- Eloquent All Product --}}
                {{-- <p>
                    {{ $product->Category->nama_kategori }}
                    
                </p> --}}
            @endforeach
        </div>
    </div>
</main>