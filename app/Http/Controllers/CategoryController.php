<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    //
    public function getAll(){
        return view('Categorys.Categorys');
    }

    public function getAllActivated(){
        return view('Categorys.Categorys');
    }

    public function editCateegory(){
        return view('Categorys.Category-edit');
    }

}
