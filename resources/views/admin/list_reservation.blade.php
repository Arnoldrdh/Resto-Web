
@extends('layouts.admin-layout')

@section('content')
    <div class="flex flex-col gap-4">
        <h2 class="mb-2"><b>Reservation List</b></h2>
        
        {{--
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif --}}
        <div class="rounded-xl border-4">
            <table class=" w-full">
                <tr class="border-b-4">
                    <th class="p-2 text-start">Nama</th>
                    <th class="p-2 text-start">Tanggal</th>
                    <th class="p-2 text-start">Orang</th>
                    <th class="p-2 text-start">id</th>
                </tr>
                @if (!count($reservations))
                <tr>
                    <td colspan="6" class="p-8">
                        <p class="text-center">No Reservation yet</p>
                    </td>
                </tr>
                @endif
                @foreach ($reservations as $reservation)
                    <tr>
                        <td class="p-2">{{ $reservation->name }}</td>
                        <td class="p-2">{{ $reservation->datetime }}</td>
                        <td class="p-2">{{ $reservation->people }}</td>
                        <td class="p-2">{{ $reservation->id }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection