@extends('layout.conquer')
@section('content')
	<a href={{ route('categories.create') }} class="btn-primary">Tambah Kategori</a>
	<a href={{ route('products.create') }} class="btn-primary">Tambah Produk</a>
	<a href={{ route('buyers.create') }} class="btn-primary">Tambah Pembeli</a>
	<a href={{ route('transactions.create') }} class="btn-primary">Tambah Transaksi</a>

@endsection