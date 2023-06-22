@extends('layout.conquer')

@section('content')
        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        <h2>Tambah Transaction Baru</h2>
        <form action="{{ route('transactions.store') }}" method="POST">
            @csrf
            <div class="form-group">
                    <label for="buyers_id" class="form-label">Pembeli</label>
                        <select class="form-select" name="buyers_id">
                            <option selected>Pembeli</option>
                            @foreach ($buyers as $buyer)
                                @if (old('buyers_id') == $buyer->id)
                                    <option value="{{ $buyer->id }}" selected>{{ $buyer->name }}</option>
                                @endif
                                    <option value="{{ $buyer->id }}">{{ $buyer->name }}</option>
                            @endforeach
                    </select>

                    <label for="cashiers_id" class="form-label">Kasir</label>
                        <select class="form-select" name="cashiers_id">
                            <option selected>Kasir</option>
                            @foreach ($cashiers as $cashier)
                                @if (old('cashiers_id') == $cashier->id)
                                    <option value="{{ $cashier->id }}" selected>{{ $cashier->name }}</option>
                                @endif
                                    <option value="{{ $cashier->id }}">{{ $cashier->name }}</option>
                            @endforeach
                    </select>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
@endsection