<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function contact(){
        return view('contact', [
            'categories' => Category::all(),
            'activeNav' => 'contact',
        ]);
    }
}
