<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Models
use App\Article;
use App\Category;

class shopController extends Controller
{
    public function index(){

    	$articles = Article::all();
    	$categories = Category::all();
    	return view('articles.index')->with('articles', $articles)->with('categories', $categories);

    }
}
