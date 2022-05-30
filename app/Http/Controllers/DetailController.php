<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function bookDetail(Request $request){
        return view('bookdetail', [
            'categories' => Category::all(),
            'activeNav' => '',
            'book' => Book::where('id', $request->id)->first()
        ]);
    }
}
