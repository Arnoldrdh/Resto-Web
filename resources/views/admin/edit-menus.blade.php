@extends('layouts.admin-layout')

@section('content')
    <h2>Add New Menu</h2>

    <form action="{{ route('admin.menus.update', $menu->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label>Food Name</label>
            <input type="text" id="name" name="name" class="form-control" value="{{$menu->name}}" required >
        </div>

        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" id="description"class="form-control" value="{{$menu->description}}" required></textarea>
        </div>

        <div class="mb-3">
            <label>Price</label>
            <input type="number" id ="price "name="price" class="form-control" value="{{$menu->price}}" required>
        </div>

        <button class="btn btn-success">Submit</button>
    </form>
@endsection