@extends('layout.conquer')

@section('content')
        <h2>Tambah Kategori Baru</h2>
        <form action="{{ route('categories.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="namakategori">Nama Kategori</label>
                <input type="text" class="form-control" placeholder="Nama Kategori" name="namakategori" required>
                <label for="deskripsi">Deskripsi Kategori</label>
                <input type="text" class="form-control" placeholder="Deskripsi Kategori" name="deskripsi" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
@endsection