<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    Public Function CreateArticle(){
        return view('backend.article.create');
    }
}
