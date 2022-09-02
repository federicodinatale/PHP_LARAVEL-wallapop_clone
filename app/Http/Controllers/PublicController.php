<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\Category;


use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index() {

        $ads = Ad::orderBy("created_at", "desc")->take(6)->get();
        return view("ads.index", compact("ads"));
    }


    public function adsByCategory(Category $category) {

        $ads = $category->ads()->latest()->get();

        return view("ad.by-category", compact("category", "ads"));

    }
}
