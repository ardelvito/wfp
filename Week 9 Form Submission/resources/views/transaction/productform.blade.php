@extends('layout.conquer')

@section('content')
        @if (session('msg'))
            <div class="alert alert-success">
                {{ session('msg') }}
            </div>
        @endif
        <h2>Tambah Produk Ke Transaksi Baru</h2>
        <form action="{{ route('transactions.insertproduct') }}" method="POST">
            @csrf
            <div class="form-group">
                    <label for="transaction_id">ID Transaksi</label>
                    @php
                        $id = session('transaction_id', 0);
                    @endphp
                    <input type="number" class="form-control" placeholder="ID Transaksi" name="transaction_id" required value={{ $id }} readonly>
                    
                    <label for="product_id" class="form-label">Produk</label>
                        <select class="form-select" name="product_id">
                            <option selected>Nama Produk</option>
                            @foreach ($products as $product)
                                @if (old('product_id') == $product->id)
                                    <option value="{{ $product->id }}" selected>{{ $product->nama_produk }}</option>
                                @endif
                                    <option value="{{ $product->id }}">{{ $product->nama_produk }}</option>
                            @endforeach
                    </select>

                    <div><label for="quantity">Jumlah Beli</label></div>
                    <input type="number" class="form-control" placeholder="Jumlah Stok" name="quantity" required>
                    
                    <label for="price">Harga</label>
                    <input type="number" class="form-control" placeholder="Harga" name="price" required>

                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
@endsection