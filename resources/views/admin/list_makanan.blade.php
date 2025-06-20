@extends('layouts.admin-layout')

@section('content')
    <div class="flex flex-col gap-4">
        <h2 class="mb-2"><b>Menu List</b></h2>
        
        <a href="{{route('admin.menus.create')}}">
            <button class="bg-accent text-primary hover:bg-accent/80 border-4">
                Add Menu
            </button>
        </a>
        {{--
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif --}}
        <div class="rounded-xl border-4">
            <table class=" w-full">
                <tr class="border-b-4">
                    <th class="p-2 text-start">Gambar</th>
                    <th class="p-2 text-start">Nama</th>
                    <th class="p-2 text-start">Deskripsi</th>
                    <th class="p-2 text-start">Kategori</th>
                    <th class="p-2 text-start">Harga</th>
                    <th class="p-2 text-start">Actions</th>
                </tr>
                @if (!count($menus))
                <tr>
                    <td colspan="6" class="p-8">
                        <p class="text-center">No menu yet</p>
                    </td>
                </tr>
                @endif
                @foreach ($menus as $m)
                    <tr>
                        <td class="p-2"><img src="{{ asset('images/'.'1750392208.jpg') }}" width="100"></td>
                        <td class="p-2">{{ $m->name }}</td>
                        <td class="p-2">{{ $m->description }}</td>
                        <td class="p-2">{{ $m->category }}</td>
                        <td class="p-2">{{ $m->price }}</td>
                        <td class="p-2">
                            {{-- Hrefnya nanti jan lupa diganti okay --}}
                            <a href="">
                                <button class="border-4 py-1 hover:bg-accent/20">View</button>
                            </a>
                            <a href="">
                            <button class="border-4 py-1 hover:bg-accent/20">Edit</button>
                            </a>
                            <form action="delete" method="POST" style="display:inline;">
                                @csrf @method('DELETE')
                                <button class="bg-destructive py-1 bg-destructive/90 border-4">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection