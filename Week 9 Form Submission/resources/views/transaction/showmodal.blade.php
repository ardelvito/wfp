
<div class="portlet">
    <div class="portlet-title">
        <b>Tampilkan Transaksi dari ID: {{ $data->id }} - {{ $products[0]->transaction_date }}</b>
    </div>

    <div class="portlet-body">
        <div class="row">
            @foreach ($products as $product)
                <div class="col-md-4">
                    <div class="thumbnail">
                        <div class="caption">
                            <p><b>ID Product: {{ $product->product_id}}</b>
                            <p>
                                {{-- Kategori; {{ $product->Category->nama_kategori }} --}}
                                Kategori; {{ $product->nama_kategori }}
                            </p>
                            <p>
                                Harga: Rp {{ $product->harga_jual }}
                            </p>
                            <p>
                                {{-- Jumlah Beli: {{ $product->pivot->quantity }} --}}
                                Jumlah Beli: {{ $product->quantity }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>