@extends('layouts.admin-layout')

@section('content')
    <h2>Edit Menu</h2>

    <form action="{{ route('admin.menus.update', $menu->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3 flex flex-col gap-1">
            <label class="font-semibold">Food Name</label>
            <input type="text" id="name" name="name" class="border-4 rounded-lg px-2 py-1" required value="{{$menu->name}}">
        </div>

        <div class="mb-3 flex flex-col gap-1">
            <label class="font-semibold">Description</label>
            <textarea name="description" id="description"class="border-4 rounded-lg p-2" required>{{$menu->description}}</textarea>
        </div>

        <div class="mb-3 flex flex-col gap-1">
            <label class="font-semibold">Price</label>
            <input type="number" id ="price "name="price" class="border-4 rounded-lg px-2 py-1" required value="{{$menu->price}}">
        </div>

        <button type="submit" class="bg-accent border-4 hover:bg-accent/80 py-1">Submit</button>
    </form>
@endsection