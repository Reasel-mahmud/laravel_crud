<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Category;



class CategoryController extends Controller
{
    public $category;
    public function index(){
        return view('crud.add-category');
    }
    public function saveCategory(Request $request){
        Category::newCategory($request);
        return back();
    }
}
