@extends('layout.conquer')
@section('content')
    <main>
    <div class="container bg-trasparent my-4 p-3">
        <div class="row">
            <div class="col-md-12">

                @if (session('msg'))
                    <div class="alert alert-success">
                        {{ session('msg') }}
                    </div>
                @endif

                <a class="btn btn-info" data-toggle="modal" href="#disclaimer">Disclaimer</a>
                <a class="btn btn-info" data-toggle="modal" href="/products">Products</a>
                <a class="btn btn-info" data-toggle="modal" href="/categories/create">Tambah Kategori</a>
                <div class="card m-b-30">
                    <div class="card-header">                                
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h5 class="card-title mb-0">Category List</h5>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="disclaimer" tabindex="-1" role="basic" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                <h4 class="modal-title">DISCLAIMER</h4>
                                </div>
                                <div class="modal-body">
                                Pictures shown are for illustration purpose only. Actual product may vary due to product enhancement. 
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--  --}}
                    <div class="container bg-trasparent my-4 p-3">
                        <table class="table table-striped table-hover table-responsive table-sm">
                            <thead class="bg-success text-center text-white">
                                <tr>
                                    <th scope="col" class="text-center">Nama Kategori</th>
                                    <th scope="col" class="text-center">Action</th>
                                    <th scope="col" class="text-center">Created At</th>
                                    <th scope="col" class="text-center">Updated At</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr class="text-center">
                                        <td>{{ $category->nama_kategori }}</td>
                                        <td><a href="#" class="btn btn-primary">Details</a></td>
                                        <td>{{ $category->created_at }}</td>
                                        <td>{{ $category->updated_at }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{--  --}}
                    {{-- <div class="card-body">
                        <div class="product-file-type">
                            <ul class="list-unstyled">
                                @foreach ($categories as $category)
                                    <li class="media mb-3">
                                        <div class="media-body">
                                        <a href="#">
                                            <h5 class="font-16 mb-1">{{ $category->nama_kategori }}<i class="feather icon-download-cloud float-right"></i></h5>
                                        </a>
                                        </div>
                                    </li>
                                    <hr class="my-12 mt1"/>
                                @endforeach
                            </ul>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</main>
@endsection