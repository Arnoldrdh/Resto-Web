<?php

namespace App\Http\Controllers;

use App\Models\menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(){
        return view('products.index');
    }

    public function store(Request $request)
    {
        $request -> validate([
            'name' => 'required',
            'description' => 'required|max:150',
            'price' => 'required|min:1',
            'category' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $product = new menu();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->category = $request->category;
        $product->image = 'images/'.$imageName;
        $product->save();
        return redirect('/show');
    }

    public function show()
    {
        $food = Menu::where('category', 'food')->get();
        $drink = Menu::where('category', 'drink')->get();
        return view('menu', compact('food', 'drink'));
    }


}
