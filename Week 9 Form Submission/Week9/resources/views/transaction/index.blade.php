{{-- @php
    dd($data);
@endphp --}}
@extends('layout.conquer')
@section('content')

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Pembeli</th>
                <th>Kasir</th>
                <th>TanggalTransaction</th>
                <th>Action </th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $d)
                <tr>
                <td>{{ $d->id }}</td>
                <td>{{ $d->buyer->name }}</td>
                <td>{{ $d->user->name }}</td>
                <td>{{ $d->transaction_date }}</td>
                <td><a class="btn   btn-default"   data-toggle="modal"href="#basic"   
                onclick="getDetailData({{$d->id}});">Lihat Rincian  Pembelian</a></td>
                </tr>
            @endforeach
        <tbody>

    </table>

    <div id="msg"></div>
@endsection

<script>
    function getDetailData(id) {
        $.ajax({
            type:'POST',
            url:'{{route("transaction.showAjax")}}',
            data:'_token= <?php echo csrf_token() ?> &id='+id,
            success:function(data) {
                console.log("test terima");
                // console.log(data.msg);
                $("#msg").html(data.msg);
            },
                error: function(xhr, status, error) {
                console.log(error);
            }
        });
}

</script>
