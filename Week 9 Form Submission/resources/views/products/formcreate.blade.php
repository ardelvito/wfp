@extends('layout.conquer')

@section('content')
        @if (session('msg'))
            <div class="alert alert-success">
                {{ session('msg') }}
            </div>
        @endif
        <h2>Tambah Produk Baru</h2>
        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="namaproduk">Nama Produk</label>
                <input type="text" class="form-control" placeholder="Nama Produk" name="namaproduk" required>
                
                <label for="jumlahstok">Jumlah Stok</label>
                <input type="number" class="form-control" placeholder="Jumlah Stok" name="jumlahstok" required>
                
                <label for="hargajual">Harga Jual</label>
                <input type="number" class="form-control" placeholder="Harga Jual" name="hargajual" required>
                
                <label for="category_id" class="form-label">Kategori</label>
                <select class="form-select" name="category_id">
                    <option selected>Kategori</option>
                    @foreach ($categories as $category)
                        @if (old('category_id') == $category->id)
                            <option value="{{ $category->id }}" selected>{{ $category->nama_kategori }}</option>
                        @endif
                            <option value="{{ $category->id }}">{{ $category->nama_kategori }}</option>
                    @endforeach
                </select>

                <div><label for="hargaproduksi" class="d-block">Harga Produksi</label></div>
                <input type="number" class="form-control" placeholder="Harga produksi" name="hargaproduksi" required>

                <div><label for="image_id" class="form-label">ID Gambar</label></div>
                <select class="form-select" name="image_id">
                    <option selected>ID Gambar</option>
                    @php
                        $idImages = [1,2,3,4,5,6]    
                    @endphp
                    @foreach ($idImages as $eachId)
                        @if (old('image_id') == $eachId)
                            <option value="{{ $eachId }}" selected>{{ $eachId }}</option>
                        @endif
                            <option value="{{ $eachId }}">{{ $eachId }}</option>
                    @endforeach
                </select>

                <div><label for="supplier_id" class="form-label">Nama Supplier</label></div>
                <select class="form-select" name="supplier_id">
                    <option selected>Nama Supplier</option>
                    @foreach ($suppliers as $supplier)
                        @if (old('supplier_id') == $eachId)
                            <option value="{{ $supplier->id }}" selected>{{ $supplier->name }}</option>
                        @endif
                            <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
@endsection