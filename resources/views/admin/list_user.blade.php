@extends('layouts.plain-layout')

@section('content')
    <h2><b>List User</b></h2>
    
    <a href="jan lupa di add" class="btn btn-success mb-3">Add new User?</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Role</th>
            <th>Actions</th>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->role }}</td>
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