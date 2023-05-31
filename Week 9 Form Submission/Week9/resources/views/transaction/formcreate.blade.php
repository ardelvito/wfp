@extends('layout.conquer')

@section('content')
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <h2>Tambah Transaction Baru</h2>
        <form action="{{ route('transactions.store') }}" method="POST">
            @csrf
            <div class="form-group">
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Daftar Product
                        <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                @foreach ($products as $item)
                                    <li><a href="#">{{ $item->nama_produk}}</a></li>
                                @endforeach
                            </ul>
                    </div>
                </div>
                <label for="namakategori">Nama Kategori</label>
                <input type="text" class="form-control" placeholder="Nama Kategori" name="namakategori" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
@endsection