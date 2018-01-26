<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    //
    public function getAll(){
        $categorys = Category::all();
        

        return view('Categorys.Categorys',['categorys'=>$categorys]);
    }

    public function getAllActivated(){
        return view('Categorys.Categorys');
    }

    public function editCategory($categoryId){
        return view('Categorys.Category-edit');
    }

}
