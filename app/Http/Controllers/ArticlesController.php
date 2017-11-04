<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ArticlesController extends Controller
{
    protected $articleRepository;

    public function __construct(ArticleRespository $articleRespository)
    {
        $this->articleRepository = $articleRespository;
    }

    public function index()
    {
        $articles = $this->articleRepository->all();
        return view('xdebugTest', compact('articles'))->with([
            'myArticle' => 'myArticle'
        ]);
    }
}
