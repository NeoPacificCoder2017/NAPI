<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    //
    public function getAll(){
        return view('categorys.list');
    }

    public function getAllActivated(){
        return view('categorys.list');
    }

    public function editCateegory(){
        return view('categorys.list');
    }

}
