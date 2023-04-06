<link rel="stylesheet" href="/css/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
@php
    // dd($suppliers)
@endphp
<main>
    <div class="container bg-trasparent my-4 p-3">
        <table class="table table-striped table-hover table-responsive table-sm">
            <thead class="bg-success text-center text-white">
                <tr>
                    <th scope="col">Nama Suppliers</th>
                    <th scope="col">Jumlah Stok Barang</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($suppliers as $supplier)
                    <tr class="text-center">
                        <td>{{ $supplier->nama_suppliers }}</td>
                        <td>{{ $supplier->stok_barang }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
