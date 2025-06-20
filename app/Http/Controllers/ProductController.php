<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    


    public function create(Request $request)
    {
        $request -> validate([
            'name' => 'required',
            'description' => 'required|max:150',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->image = 'images/'.$imageName;
        $product->save();
        return redirect('/testing');
    }


}
