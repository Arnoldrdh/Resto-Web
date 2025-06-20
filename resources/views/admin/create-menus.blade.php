@extends('layouts.admin-layout')

@section('content')
    <h2>Add New Menu</h2>

    <form action="/admin/menus" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3 flex flex-col gap-1">
            <label class="font-semibold">Food Name</label>
            <input type="text" id="name" name="name" class="border-4 rounded-lg px-2 py-1" required>
        </div>

        <div class="mb-3 flex flex-col gap-1">
            <label class="font-semibold">Description</label>
            <textarea name="description" id="description"class="border-4 rounded-lg p-2" required></textarea>
        </div>

        <div class="mb-3 flex flex-col gap-1">
            <label class="font-semibold">Price</label>
            <input type="number" id ="price "name="price" class="border-4 rounded-lg px-2 py-1" required>
        </div>
        <div class="mb-3 flex flex-col gap-1">
            <label class="font-semibold">Category</label>
            <div class="w-full">
                <select name="category" id="category" class="w-full border-4 rounded-md shadow-sm pl-3 pr-10 p-2 text-base focus:outline-none">
                  <option value="food">Food</option>
                  <option value="drink">Drink</option>
                </select>
              </div>
        </div>
        <div class="mb-3 flex flex-col gap-1">
            <label class="font-semibold">Image</label>
            <input type="file" name="image" class="w-full border-4 rounded-lg px-2 py-1" required>
        </div>

        <button type="submit" class="bg-accent border-4 hover:bg-accent/80 py-1">Submit</button>
    </form>
@endsection