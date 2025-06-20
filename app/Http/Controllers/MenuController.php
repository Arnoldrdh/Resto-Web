<?php

namespace App\Http\Controllers;

use App\Models\menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function adminshow(){
        $menus = Menu::all();

        return view('admin.list_makanan', compact('menus'));
    }

    public function createShow() {
        return view('admin.create-menus');
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
        return redirect('/admin/menus');
    }   


    public function edit($id){
        $menu =  menu::findOrFail($id);
        return view('admin.edit-menus' ,compact('menu'));
    }

    public function update(Request $request, $id){
        $request -> validate([
            'name' => 'required',
            'description' => 'required|max:150',
            'price' => 'required|min:1',

 
        ]);
        $product =  menu::findOrFail($id);

        $product->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,

        ]);

        return redirect()->route('admin.menus')->with('success','Product updated.');
    }

    public function show()
    {
        $food = Menu::where('category', 'food')->get();
        $drink = Menu::where('category', 'drink')->get();
        return view('menu', compact('food', 'drink'));
    }

    public function delete($id)
    {
        $data = menu::findOrFail($id);
        $data->delete();

        return redirect()->route('admin.menus')->with('success','Product updated.');
        
    }


}
