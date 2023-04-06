{{-- @php
    dd($reservations)
@endphp --}}

<div class="card-body mt-2">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
                    <h1 style="color:rgba(0, 0, 0, 1); font-weight: bold; text-align:center">All Data</h1>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Kode Reservasi</th>
                                    <th scope="col">Nama Peserta</th>
                                    <th scope="col">Kode File</th>
                                    <th scope="col">Waktu Mulai</th>
                                    <th scope="col">Nomor Studio</th>
                                </tr>
                            </thead>
                            <tbody>
                                    @foreach ($reservations as $reservation)
                                        <tr>
                                            <td>{{ $reservation->id }}</td>
                                            <td>{{ $reservation->kode_reservasi}}</td>
                                            <td>{{ $reservation->nama_peserta}}</td>
                                            <td>{{ $reservation->kode_file}}</td>
                                            <td>{{ $reservation->waktu_mulai}}</td>
                                            <td>{{ $reservation->nomor_studion}}</td>
                                        </tr>
                                    @endforeach
                            </tbody>
                        </table>
                    </div>