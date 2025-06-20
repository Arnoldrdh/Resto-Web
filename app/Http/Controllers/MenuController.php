<?php

namespace App\Http\Controllers;

use App\Models\menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function show()
    {
        $food = Menu::where('category', 'food')->get();
        $drink = Menu::where('category', 'drink')->get();
        return view('menu', compact('food', 'drink'));
    }


}
