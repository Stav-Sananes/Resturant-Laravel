<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class FoodCategoryController extends Controller
{
    public function index (){

        $categories = Category::all();
        return view('categories.index',compact('categories'));
    }
    public function show(Category $category){
        return view('categories.show',compact($category));
    }
}
