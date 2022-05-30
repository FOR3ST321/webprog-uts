<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category(Request $request){
        return view('category', [
            'categories' => Category::all(),
            'activeNav' => 'category',
            'activeSubNav' => $request->name,
            'books' => Category::where('name', $request->name)->books()->paginate(5)
        ]);
    }
}
