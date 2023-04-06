<link rel="stylesheet" href="/css/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
@php
    // dd($avgPrices)
@endphp

<main>
    @if (count($avgPrices) > 0)
        <div class="container bg-trasparent my-4 p-3">
            <table class="table table-striped table-hover table-responsive table-sm">
                <thead class="bg-success text-center text-white">
                    <tr>
                        <th scope="col">Nama Kategori</th>
                        <th scope="col">Rerata Harga</th>
                        <th scope="col">Jumlah Stok Barang</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($avgPrices as $avgPrice)
                        <tr class="text-center">
                            <td>{{ $avgPrice->nama_kategori }}</td>
                            <td>@currency( $avgPrice->avg_jual)</td>
                            <td>{{ $avgPrice->total_product }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <div class="container bg-trasparent my-4 p-3">
            <p class="text-center">Kategori Tidak Ditemukan</p>
        </div>     
    @endif
</main>
