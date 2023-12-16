@extends('layouts.template')


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Laravel') }}</title>

<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

@section('content')
<div class="container mt-5 mb-5">
    <h1>List Product</h1>

    <div class="text-end">
        <div class="btn-group" role="toolbar" aria-label="Toolbar with button groups">
            <div class="btn-group me-2" role="group" aria-label="Basic example">
                <form method="GET" action="{{ route('product.create') }}">
                    <button class="btn btn-primary" type="submit">
                        Tambah
                    </button>
                </form>
            </div>
        </div>
    </div>

    <form action="/list_product" method="GET" class="form-inline w-25 d-flex gap-2">
        <input type="form-control" type="search" name="search" placeholder="search">
        <button type="submit" class="btn btn-outline-success">Search</button>
    </form>
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Price</th>
                        <th scope="col">Color</th>
                        <th scope="col">Image</th>
                    </tr>
                </thead>
                <tbody>
                     <!-- $counter = 0;  -->
                    @foreach($product as $pro)
                         <!-- $counter++;  -->
                        <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                            <td>
                            <a href="/product/{{$pro['id']}}">
                            {{ $pro['product_name'] }}
                              </a>
                            </td>
                            <td>{{ $pro['product_desc'] }}</td>
                            <td>{{ $pro['price'] }}</td>
                            <td>{{ $pro['color'] }}</td>
                            <td>{{ $pro['product_image'] }}</td>
                            <td>
                                <button class="btn btn-warning">Update</button>
                                <button class="btn btn-danger">Delete</button>
                            </td>
                            {{-- <td>
                                <form method="GET" action="{{ route('product.edit', $pro['id']) }}">
                                    @csrf
                                    <button class="btn btn-warning" type="submit">Update</button>

                                </form>
                                <form method="POST" action="{{ route('product.delete', $pro['id']) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                            </td> --}}
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <br>
            <div>
                {{$product->links()}}
            </div>
        </div>
    {{-- </div>
</div>
</div> --}}
@endsection