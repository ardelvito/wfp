@extends('layout.conquer')

@section('content')
        @if (session('msg'))
            <div class="alert alert-success">
                {{ session('msg') }}
            </div>
        @endif
        <h2>Tambah Kategori Baru</h2>
        <form action="{{ route('buyers.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="namakategori">Nama Pembeli</label>
                <input type="text" class="form-control" placeholder="Nama Pembeli" name="namapembeli" required>
                <label for="namakategori">Alamat Pembeli</label>
                <input type="text" class="form-control" placeholder="Alamat Pembeli" name="alamatpembeli" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
@endsection