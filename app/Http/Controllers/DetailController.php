<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function bookDetail(Request $request){
        return view('bookdetail');
    }
}
