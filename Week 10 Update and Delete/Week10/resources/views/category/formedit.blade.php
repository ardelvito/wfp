@extends('layout.conquer')

@section('content')
        <h2>Edit Kategori</h2>
        {{-- <form action="{{ route('categories.update'), $data->id }}" method="POST"> --}}
        <form action="{{ route('categories.update', ['category' => $data->id]) }}" method="POST">
            @csrf
            @method("PUT")
            <div class="form-group">
                <label for="namakategori">Nama Kategori</label>
                <input type="text" class="form-control" placeholder="Nama Kategori" name="namakategori" required value="{{ $data->nama_kategori }}">
                <label for="deskripsi">Deskripsi Kategori</label>
                <input type="text" class="form-control" placeholder="Deskripsi Kategori" name="deskripsi" required value="{{ $data->description }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
@endsection