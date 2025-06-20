@extends('layouts.plain-layout')

@section('content')
    <h2>Add New Menu</h2>

    <form action="{{ route('post_menu'), $menu->id }}" method="POST" enctype="multipart/form-data">
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
        {{-- <div class="mb-3">
            <label>Category</label>
            <div class="w-full max-w-sm">
                <select name="category" id="category" class="w-full bg-white border border-gray-300 rounded-md shadow-sm pl-3 pr-10 py-2 text-base focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                  <option value="food">Food</option>
                  <option value="drink">Drink</option>
                </select>
              </div>
        </div>
        <div class="mb-3">
            <label>Image</label>
            <input type="file" name="image" class="form-control" required>
            <br>
            <img src="{{ asset($m->image) }}" width="100">
        </div> --}}

        <button class="btn btn-success">Submit</button>
    </form>
@endsection