@extends('layouts.plain-layout')

@section('content')
    <h2><b>List Makanan</b></h2>
    
    <a href="jan lupa di add" class="btn btn-success mb-3">Add Product</a>
{{-- 
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif --}}

    <table class="table table-bordered">
        <tr>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Actions</th>
        </tr>
        @foreach ($menus as $m)
            <tr>
                <td><img src="{{ asset($m->image) }}" width="100"></td>
                <td>{{ $m->name }}</td>
                <td>{{ $m->description }}</td>
                <td>{{ $m->category }}</td>
                <td>{{ $m->price }}</td>
                <td>
                    {{-- Hrefnya nanti jan lupa diganti okay --}}
                    <a class="btn btn-info btn-sm" href="view details">View</a>
                    <a class="btn btn-primary btn-sm" href="delete">Edit</a>
                    <form action="delete" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection