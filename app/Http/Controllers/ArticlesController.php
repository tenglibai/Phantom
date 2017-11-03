<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ArticlesController extends Controller{
    protected $articleRepository;
    public function __construct(ArticleREspository $articleREspository)
    {
        $this->articleRepository=$articleREspository;
    }
    public function index()
    {
        $articles = $this->articleRepository->all();
        return view('xdebugTest',compact('articles'));
    }
}

