<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category(Request $request){
        $category = Category::where('id', $request->id)->first();
        return view('category', [
            'categories' => Category::all(),
            'activeNav' => 'category',
            'activeSubNav' => $category->category,
            'books' => Book::where('category_id', $request->id)->paginate(5)
        ]);
    }
}
